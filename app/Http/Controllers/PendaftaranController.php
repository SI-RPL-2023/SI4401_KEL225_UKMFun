<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function terima($id_pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($id_pendaftaran);
        $pendaftaran->status = 'Terima';
        $pendaftaran->save();

        return redirect()->route('index-pendaftaran')->with('success', 'Mahasiswa berhasil diterima!');
    }

    public function tolak($id_pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($id_pendaftaran);
        $pendaftaran->status = 'Tolak';
        $pendaftaran->save();

        return redirect()->route('index-pendaftaran')->with('failed', 'Mahasiswa berhasil ditolak!');
    }

}