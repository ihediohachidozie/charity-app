<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Needhelp;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class Needs extends Component
{
    use WithFileUploads;

    public $type, $description, $monetary, $country, $province, $picture, $need_id;

    public $helptype = [1 => 'Food', 2 => 'Money', 3 => 'Cloth'];
    public $status = ['Pending Approval', 'Rejected', 'Approved'];

    public function getNeeds()
    {
        return Needhelp::where('user_id', auth()->id())->get();
        # code...
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->need_id = $this->type = $this->description = $this->monetary = $this->country = $this->province = $this->picture = null;
    }

    public function save()
    {
        #  dd($this->type);
        $user = Auth::user();

        $this->validate([
            'type' => 'required',
            'description' => 'required',
            'monetary' => 'required',
            'country' => 'required',
            'province' => 'required',
            'picture' => 'sometimes|image|max:1024', // 1MB Max
        ]);

        Needhelp::updateOrCreate(['id' => $this->need_id], [
            'type' => $this->type,
            'user_id' => auth()->id(),
            'description' => $this->description,
            'monetary' => $this->monetary,
            'country' => $this->country,
            'province' => $this->province,
            'picture' => $this->picture->store('assets/needpics', 'public')

        ]);

        if ($this->picture != null) {

            $imageName = time() . '_' . $this->picture->extension();

            $img = Image::make($this->picture)->fit(640, 473);

            $img->save('storage/' . $imageName);
        }
        $this->resetInputFields();
        $this->fileClear($this->picture);
        session()->flash(
            'message',
            $this->need_id ? 'Need Request Updated Successfully.' : 'Need Request Created Successfully.'
        );
    }

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $post = Needhelp::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;

        $this->openModal();
    }
    public function fileClear($inputId)
    {
        $this->$inputId = "";
    }
    public function render()
    {
        return view('livewire.needs', [
            'needs' => $this->getNeeds(),
            'helptype' => $this->helptype,
            'status' => $this->status
        ]);
    }
}
