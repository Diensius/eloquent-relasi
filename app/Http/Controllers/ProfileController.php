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
        // Fungsi Validasi
        $request->validate([
            'umur'  => 'required',
            'biodata'  => 'required',
            'alamat'  => 'required',
        ],
        // Custom Pesan Error
        [
            'umur.required'     => 'Umur Tidak Boleh Kosong !',
            'biodata.required'     => 'Biodata Tidak Boleh Kosong !',
            'alamat.required'      => 'Alamat Tidak Boleh Kosong !',
        ]); 

        $profile = Profile::find($id);

        $profile->umur = $request['umur'];
        $profile->biodata = $request['biodata'];
        $profile->alamat = $request['alamat'];
        $profile->user_id = Auth::id();
        $profile->save();

        return redirect('/profile');
    }
}
