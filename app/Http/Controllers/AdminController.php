<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        if (! Gate::allows('admin_view')) {
            abort(403);
        }
        $users = User::with('profile')->whereNot('id', 1)->get();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        if (! Gate::allows('admin_view', $user)) {
            abort(403);
        }
        return view('admin.users.show', compact('user'));
    }
}
