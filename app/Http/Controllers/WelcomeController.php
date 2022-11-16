<?php

namespace App\Http\Controllers;

use App\Models\Needhelp;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index()
    {
        # $needs = Needhelp::with('user')->orderBy('id', 'desc')->withSum('donations', 'amount')->paginate(3);
        $needs = Needhelp::where('status', 2)->withSum('donations', 'amount')->paginate(4);
        return view('welcome', compact('needs'));
    }

    public function projects()
    {
        $needs = Needhelp::where('status', 2)->withSum('donations', 'amount')->paginate(12);
        return view('pages.projects', compact('needs'));
    }

    public function newsletter(Request $request)
    {
        //dd($request->all());
        # code...
        return back()->with('success', 'Thank you for subscribing');
    }



    public function aboutus()
    {
        return view('pages.about');
    }




}
