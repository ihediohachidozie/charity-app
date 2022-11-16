<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function monetary()
    {
        return view('pages.services.monetary');
    }

    public function food()
    {
        return view('pages.services.food');
    }

    public function cloth()
    {
        return view('pages.services.cloth');
    }

    public function training()
    {
        return view('pages.services.training');
    }
}
