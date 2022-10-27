<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (auth()->user()->profile != null) {
            $id = auth()->user()->profile->id;

            $profile = Profile::updateOrcreate(['id' => $id], [
                'company' => $request->company,
                'job' => $request->job,
                'phone' => $request->phone,
                'country' => $request->country,
                'address' => $request->address,
                'about' => $request->about,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
            ]);
        } else {
            $profile = Profile::create([
                'company' => $request->company,
                'job' => $request->job,
                'phone' => $request->phone,
                'country' => $request->country,
                'address' => $request->address,
                'about' => $request->about,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'user_id' => auth()->id()
            ]);
        }

        $profile->save();

        $this->storeImage($profile);
        $this->changeName($request);

        return back()->with('status', 'Profile successfully changed.');
    }

    /**
     * change Name function
     *
     * @param  mixed $profile
     * @return void
     */
    public function changeName($request)
    {
        if (request()->has('name')) {
            User::find(auth()->id())->update([
                'name' => $request->name,
            ]);
        }
    }

    /**
     * store Image function
     *
     * @param  mixed $profile
     * @return void
     */
    public function storeImage($profile)
    {
        if (request()->has('image')) {
            $profile->update([
                'image' => request()->image->store('assets/img/profile', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $profile->image))->fit(120, 120);
            $image->save();
        }
    }

    /**
     * change password function
     *
     * @param  mixed $profile
     * @return void
     */
    public function changePw(Request $request)
    {
        $request->validate([
            'currentpassword' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        if (Hash::check($request->currentpassword, auth()->user()->password)) {

            User::find(auth()->id())->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->back()->with('success', 'Password successfully changed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
