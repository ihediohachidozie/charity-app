<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Needhelp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $needs = Needhelp::all();

        $requested_value = DB::table('needhelps')
                ->select(DB::raw('SUM(monetary) as total_values'))
                ->pluck('total_values');

              // dd($orders);

        return view('home', compact('users', 'needs', 'requested_value'));
    }
}
