<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    // TELUTIZEN VIEW
    public function home()
    {
        return redirect()->route('index_telutizen');
    }
    public function ukm()
    {
        $pendaftaran = Pendaftaran::where('id_mahasiswa', Auth::user()->id_user)->get();
        if ($pendaftaran == null) {
            $pendaftaran = [];
        }
        return view('telutizen.ukm', [
            'title' => 'UKM',
            'pendaftaran' => $pendaftaran
        ]);
    }

    // UKM VIEW
    public function edit_ukm()
    {
        return view('ukm.edit-ukm', [
            'title' => 'Edit'
        ]);
    }
}
