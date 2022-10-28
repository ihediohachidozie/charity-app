<?php

namespace App\Http\Controllers;

use App\Models\Needhelp;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AdminNeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $needs = Needhelp::with('user')->orderBy('id', 'desc')->get();

        return view('admin.needs.index', compact('needs'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Needhelp  $needhelp
     * @return \Illuminate\Http\Response
     */
    public function show(Needhelp $needhelp)
    {
       // dd($needhelp);
        return view('admin.needs.show', compact('needhelp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Needhelp  $needhelp
     * @return \Illuminate\Http\Response
     */
    public function edit(Needhelp $needhelp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Needhelp  $needhelp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Needhelp $needhelp)
    {

       Needhelp::find($needhelp->id)->update([
            'status' => $request->status,

        ]);

        return redirect()->route('needhelps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Needhelp  $needhelp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Needhelp $needhelp)
    {
        //
    }
}
