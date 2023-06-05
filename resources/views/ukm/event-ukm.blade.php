@extends('layouts.main-ukm')

@section('container')
    <section id="event">
        <div class="container" style="margin-top: 100px;">
            <button type="button" class="btn btn-success btn-lg my-5 fs-6" data-bs-toggle="modal" data-bs-target="#pendaftaran"
                style="width: 10rem;">+ Tambah Event</button>
            @if (isset($error))
                <div class="alert alert-primary fs-5 text-center" role="alert"
                    style="margin: 0px 50px 0px 50px; line-height: 100px;">
                    {{ $error }}
                </div>
            @else
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                {{-- {{ dd($events->all()[0]) }} --}}
                <div class="row text-center mt-5 justify-content-center">
                    @foreach ($events->all() as $event)
                        {{-- card --}}
                        <div class="col-sm-4 mt-5 text-center">
                            <div class="card mx-auto" style="width: 18rem; height: 30rem;">
                                <img src="{{ asset('storage/asset/img/upload/' . $event->poster) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>{{ $event->nama_event }}</b></h5>
                                    <span class="text-muted">{{ strftime('%d %B %Y', strtotime($event->tanggal)) }}
                                        {{ date('H:i', strtotime($event->waktu)) }} WIB</span>
                                    <p class="card-text" style="font-weight: normal;">
                                        {{ Str::limit($event->deskripsi, 100, ' ...') }}</p>
                                    {{-- <a href="{{ url('detail-ukm/' . $event->id_ukm) }}" class="btn btn-danger">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                    @endforeach
                </div>
                {{-- {{ dd($events->) }}
                <p>Jumlah Event Terdaftar : {{ count($events) }}</p> --}}
            @endif
        </div>
        <br><br><br><br><br><br><br><br>
        <div id="pendaftaran" class="modal fade">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"> Tambahkan Event ke {{ auth()->user()->nama }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h1>{{ auth()->user()->nama }}</h1>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="padding: 0px 100px 0px 100px;">
                            {{-- <div class="col-sm-5 mt-5"> --}}
                            <form action="/add-event" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_ukm" value="{{ auth()->user()->id_user }}">
                                <input type="hidden" name="nama_ukm" value="{{ auth()->user()->nama }}">
                                <div class="mb-3">
                                    <label for="nama_event" class="form-label">Nama Event</label>
                                    <input type="text" class="form-control" id="nama_event" name="nama_event"
                                        aria-describedby="emailHelp" placeholder="Nama Event" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label for="waktu" class="form-label">Waktu</label>
                                    <input type="time" class="form-control" id="waktu" name="waktu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label fs-5">Deskripsi</label>
                                    <textarea class="form-control" placeholder="Eg. your text here" id="deskripsi" name="deskripsi" style="height: 100px"
                                        required></textarea>
                                </div>
                                {{-- </div> --}}
                                {{-- <div class="col-sm-5 mt-5"> --}}
                                {{-- <div class="mb-3">
                                    <label for="link" class="form-label">Link Pendaftaran</label>
                                    <input type="teks" class="form-control" id="link" name="link"
                                        placeholder="Link Pendaftaran" required>
                                </div> --}}
                                <div class="mb-3">
                                    <label for="poster" class="form-label">Gambar/Poster</label>
                                    <input class="form-control" type="file" id="poster" name="poster" required>
                                </div>
                                {{-- </div> --}}
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
