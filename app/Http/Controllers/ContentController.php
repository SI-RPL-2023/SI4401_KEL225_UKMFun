<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function index_telutizen()
    {
        $contents = Content::all();
        $title = 'Home';


        // dd($contents->all());
        // $pendaftaran = Pendaftaran::find(Auth::user()->id_user);
        $pendaftaran = Pendaftaran::where('id_mahasiswa', Auth::user()->id_user)->get();

        // if ($pendaftaran == null) {
        //     $pendaftaran = [];
        // }


        return view('telutizen.home', compact('contents', 'pendaftaran', 'title'));
    }
    
    public function detail_ukm($id_ukm)
    {
        $contents = Content::where('id_ukm',  $id_ukm)->latest()->get();
        $title = $contents[0]->nama_ukm;
        $contents = $contents[0];
        // dd($contents->all()[0]->nama_ukm);
        // $pendaftaran = Pendaftaran::find(Auth::user()->id_user);
        $pendaftaran = Pendaftaran::where('id_mahasiswa', Auth::user()->id_user)->get();
        // dd($pendaftaran);
        if ($pendaftaran == null) {
            $pendaftaran = [];
        }
        
        return view('telutizen.detail-ukm', compact('contents', 'pendaftaran', 'title'));
    }

    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'nama_ukm' => 'required|string',
            'deskripsi' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg',
            'jumbotron' => 'required|image|mimes:jpeg,png,jpg',
            'galeri' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        // link storage:
        // php artisan storage:link

        // logo
        $logo = $request->file('logo');
        $logo->storeAs('public\asset\img\upload', $logo->hashName());


        // jumbotron
        $jumbotron = $request->file('jumbotron');
        $jumbotron->storeAs('public\asset\img\upload', $jumbotron->hashName());

        $id_ukm = auth()->user()->id_user;

        // NEW
        $contents = Content::where('id_ukm',  $id_ukm)->latest()->get();
        if ($contents->all() === []) {
            Content::create([
                'id_ukm' => $id_ukm,
                'nama_ukm' => $request->nama_ukm,
                'deskripsi' => $request->deskripsi,
                'logo' => $logo->hashName(),
                'jumbotron' => $jumbotron->hashName(),
                'galeri' => $request->galeri,
                'visi' => $request->visi,
                'misi' =>  $request->misi,
            ]);

            return redirect()->route('home-ukm');
        } else {
            $contents[0]->update([
                'id_ukm' => $id_ukm,
                'nama_ukm' => $request->nama_ukm,
                'deskripsi' => $request->deskripsi,
                'logo' => $logo->hashName(),
                'jumbotron' => $jumbotron->hashName(),
                'galeri' => $request->galeri,
                'visi' => $request->visi,
                'misi' =>  $request->misi,
            ]);

            return redirect()->route('home-ukm');
        }
    }
}
