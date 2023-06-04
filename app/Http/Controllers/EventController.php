<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index()
    {

        // $events = Event::all();
        $title = 'Event';
        $id_ukm = Auth::user()->id_user;

        $events = Event::where('id_ukm', '=', Auth::user()->id_user)->get();

        if ($events->all() === []) {
            return view('ukm.event-ukm', ['error' => 'Event Belum Ada!'], compact('events', 'title'));
        } else {
            $events = $events[0];
        }

        // dd($events->all()[0]->nama_event);

        if ($events != null && $events->id_ukm ==  $id_ukm) {
            return view('ukm.event-ukm', compact('events', 'title'));
        } else {
            return view('ukm.event-ukm', ['error' => 'Event Belum Ada!'], compact('events', 'title'));
        }

        return view('ukm.event-ukm', compact('events', 'title'));
    }


    public function store(Request $request)
    {

        // dd($request->all());
        // validasi
        // $request->validate([
        //     'id_ukm' => 'required',
        //     'nama_ukm' => 'required',
        //     'nama_event' => 'required',
        //     'tanggal' => 'required',
        //     'dekripsi' => 'required',
        //     'link' => 'required',
        //     'poster' => 'required',
        // ]);

        // link storage:
        // php artisan storage:link
        // poster
        $poster = $request->file('poster');
        $poster->storeAs('public\asset\img\upload', $poster->hashName());

        // $id_ukm = auth()->user()->id_user;

        // NEW
        Event::create([
            'id_ukm' => $request->id_ukm,
            'nama_ukm' => $request->nama_ukm,
            'nama_event' => $request->nama_event,
            'poster' => $poster->hashName(),
            'waktu' => $request->waktu,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'link' =>  $request->link,
        ]);

        Session::flash('success', 'Event berhasil ditambahkan.');

        return redirect()->route('index-event');
    }

}
