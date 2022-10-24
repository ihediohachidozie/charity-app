<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\Models\Profile as ModelsProfile;

class Profile extends Component
{
    use WithFileUploads;

    public $name, $email, $image, $imgtemp, $about, $company, $job, $country, $address, $phone, $twitter, $facebook, $instagram, $linkedin;

    public $currentpassword, $password, $password_confirmation;


    public function updateprofile()
    {

        $user = Auth::user();
        if ($user->profile == null) {
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
            $profile->instagram = $this->instagram;

            $profile->save();
        } else {

            $user->profile->about = $this->about;
            $user->profile->company = $this->company;
            $user->profile->job = $this->job;
            $user->profile->country = $this->country;
            $user->profile->address = $this->address;
            $user->profile->phone = $this->phone;
            $user->profile->twitter = $this->twitter;
            $user->profile->facebook = $this->facebook;
            $user->profile->linkedin = $this->linkedin;
            $user->profile->instagram = $this->instagram;

            $user->profile->save();
        }

        if ($this->imgtemp != null) {

            $this->image = $this->imgtemp;

            $this->validate([
                'image' => 'sometimes|image|max:1024', // 1MB Max
            ]);

            $user->profile->image = $this->image->store('assets/img', 'public');
            $user->profile->save();
            $imageName = time() . '_' . $this->image->extension();

            $img = Image::make($this->image)->fit(120, 120);

            $img->save('storage/' . $imageName);
        }
        $this->imgtemp = null;

        if ($this->name != null) {
            User::find(auth()->id())->update([
                'name' => $this->name
            ]);
        }

        session()->flash('message', 'Profile successfully saved.');
    }

    public function removepic()
    {
        $user = Auth::user();
        if ($user->profile != null) {
            $user->profile->image = null;
            $user->profile->save();
        }
        session()->flash('removed', 'Profile image successfully removed.');
    }

    public function getuser()
    {
        $user = Auth::user();
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;

        if ($user->profile != null) {
            $this->about = $user->profile->about;
            $this->company = $user->profile->company;
            $this->country = $user->profile->country;
            $this->phone = $user->profile->phone;
            $this->job = $user->profile->job;
            $this->address = $user->profile->address;
            $this->twitter = $user->profile->twitter;
            $this->facebook = $user->profile->facebook;
            $this->instagram = $user->profile->instagram;
            $this->linkedin = $user->profile->linkedin;
            $this->image = $user->profile->image;
        }
        # code...
    }

    public function changePw()
    {

        $this->validate([
            'currentpassword' => 'required|string', // 1MB Max
            'password' => 'required|string|confirmed'
        ]);

        $msg = null;
        if (Hash::check($this->currentpassword, auth()->user()->password)) {

            User::find(auth()->id())->update([
                'password' => Hash::make($this->password),
            ]);

            $this->currentpassword = $this->password = $this->password_confirmation = null;

            $msg = 'Password successfully changed.';
        } else {
            $msg = 'The provided password does not match your current password.';
        }

        session()->flash('status', $msg);
    }

    public function render()
    {

        $this->getuser();
        return view('livewire.profile');
    }
}
