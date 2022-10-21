<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use App\Models\Profile as ModelsProfile;

class Profile extends Component
{
    use WithFileUploads;

    public $name, $email, $image, $about, $company, $job, $country, $address, $phone, $twitter, $facebook, $instagram, $linkedin;


    public function updateprofile()
    {

        $this->validate([
            'image' => 'sometimes|image|max:1024', // 1MB Max
        ]);

        $profile = new ModelsProfile();
        $profile->user_id = auth()->id();
        $profile->about = $this->about;
        $profile->company = $this->company;
        $profile->job = $this->job;
        $profile->country = $this->country;
        $profile->address = $this->address;
        $profile->phone = $this->phone;
        $profile->twitter = $this->twitter;
        $profile->facebook = $this->facebook;
        $profile->linkedin = $this->linkedin;
       # $profile->image = $this->image->store('assets/img', 'public');

        $profile->save();

        $imageName = time().'_'.$this->image->extension();

        $img = Image::make($this->image)->fit(640, 428);

        $img->save('storage/'. $imageName);


    }

    public function render()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        return view('livewire.profile');
    }
}
