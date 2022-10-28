<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::with('profile')->get();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        # code...
        return view('admin.users.show', compact('user'));
    }
}
