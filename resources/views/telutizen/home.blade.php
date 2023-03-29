@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row text-center mt-5 justify-content-center">
            <div class="col-sm-12 mb-5 mt-5">
                @if (session()->has('success'))
                    <div class="alert alert-success fs-5 text-center" role="alert" style="margin-top: 200px;">
                        {{ session('success') }}
                    </div> 
                @endif
                <img class="mt-5" src="{{ asset('asset/img/ukm-fun-black.png') }}" alt="ukm-fun" width="60%">
            </div> 
        </div>
        <div class="row text-center mt-5 justify-content-center">
            @foreach ($contents as $content)
                {{-- card --}}
                <div class="col-sm-4 mt-5">
                    <div class="card mx-auto" style="width: 18rem; height: 30rem;">
                        <img src="{{ asset('storage/asset/img/upload/' . $content->logo) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $content->nama_ukm }}</h5>
                            <p class="card-text" style="font-weight: normal;">{{ Str::limit($content->deskripsi, 100, ' ...') }}</p>
                            <a href="{{ url('detail-ukm/' . $content->id_ukm) }}" class="btn btn-danger">Lihat UKM</a>
                        </div>
                    </div>
                </div>
                {{-- card --}}
            @endforeach
        </div>
        <br><br><br><br>
        <br><br><br><br>
    </div>
@endsection
