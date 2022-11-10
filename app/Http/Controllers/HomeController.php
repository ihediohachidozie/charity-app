<?php

namespace App\Http\Controllers;

use App\Models\Donation;
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
        $donations = Donation::sum('amount');

        $monthly_donations = Donation::select(
            DB::raw('sum(amount) as Total'),
            DB::raw("(DATE_FORMAT(created_at, '%b')) as month")
            )->where(DB::raw("DATE_FORMAT(created_at, '%Y')"), date('Y'))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%b')"))
            ->orderBy(DB::raw("DATE_FORMAT(created_at, '%m')"))
            ->pluck('Total', 'month');

      #  dd($monthly_donations);
        $total = [];
        $month = [];

        foreach($monthly_donations as $key => $value){
            array_push($month, $key);
            array_push($total, $value);
         }



        if (auth()->user()->is_admin){


            $needs = Needhelp::with('donations')->get();

            $requested_value = DB::table('needhelps')
                    ->select(DB::raw('SUM(monetary) as total_values'))
                    ->pluck('total_values');
        }else{
            $needs = Needhelp::where('user_id', auth()->id())->paginate(3);
            $n = Needhelp::where('user_id', auth()->id())->pluck('id');
            $donations = Donation::whereIn('needhelp_id', $n)->get();
            $requested_value = DB::table('needhelps')
                    ->select(DB::raw('SUM(monetary) as total_values'))
                    ->where('user_id', auth()->id())
                    ->pluck('total_values');
        }

              // dd($orders);

        return view('home', compact('users', 'needs', 'requested_value', 'donations', 'month', 'total'));
    }
}
