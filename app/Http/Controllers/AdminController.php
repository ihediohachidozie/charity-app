<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        if (! Gate::allows('admin_view')) {
            return view('error404');
        }
        $users = User::with('profile')->whereNot('id', 1)->paginate(8);
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        if (! Gate::allows('admin_view', $user)) {
            return view('error404');
        }
        return view('admin.users.show', compact('user'));
    }

    public function donors()
    {
        if (! Gate::allows('admin_view')) {
            return view('error404');
        }
        $donations = Donation::paginate(10);

        return view('admin.donations.donors', compact('donations'));
    }
}
