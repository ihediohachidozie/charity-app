<?php

namespace App\Http\Controllers;

use App\Models\Needhelp;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $needs = Needhelp::where('status', 2)->get();
        return view('welcome', compact('needs'));
    }
}
