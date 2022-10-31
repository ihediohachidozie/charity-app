<?php

namespace App\Http\Controllers;

use App\Models\Needhelp;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function getform($id)
    {
      //  dd($id);
        $need = Needhelp::find($id);
        dd($need);
        return view('donation.form');
    }
}
