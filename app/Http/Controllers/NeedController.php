<?php

namespace App\Http\Controllers;

use App\Models\Helptype;
use App\Models\Needhelp;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $needs = Needhelp::where('user_id', auth()->id())->get();
        $helptype = Helptype::all();
        //$status = ['Pending Approval', 'Rejected', 'Approved'];

        return view('needs.index', compact('needs', 'helptype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       # $helptype = Helptype::all();
        $need = new Needhelp();
        return view('needs.create', compact('need'));
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
        $help = Needhelp::create([
            'type' => $request->type,
            'caption' => $request->caption,
            'description' => $request->description,
            'province' => $request->province,
            'country' => $request->country,
            'monetary' => $request->monetary,
            'user_id' => auth()->id()
        ]);

        $this->storeImage($help);

        return back()->with('status', 'Profile successfully changed.');
    }
  /**
     * store Image function
     *
     * @param  mixed $profile
     * @return void
     */
    public function storeImage($help)
    {
        if (request()->has('picture')) {
            $help->update([
                'picture' => request()->picture->store('assets/img/profile', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $help->picture))->fit(500, 500);
            $image->save();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $need = Needhelp::find($id);
        return view('needs.show', compact('need'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       # $helptype = Helptype::all();
        $need = Needhelp::find($id);
        return view('needs.edit', compact('need'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $help = Needhelp::find($id)->update([
            'type' => $request->type,
            'caption' => $request->caption,
            'description' => $request->description,
            'province' => $request->province,
            'country' => $request->country,
            'monetary' => $request->monetary,
        ]);
        $this->storeImage($help);

        return redirect()->route('needs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
