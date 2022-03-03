<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('profile/index', compact('profile'));
    }

    public function update($id, Request $request)
    {
        return view('home/index');
    }
}
