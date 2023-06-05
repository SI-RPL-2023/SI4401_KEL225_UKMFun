@extends('layouts.app')

@section('container')
    <body
        style="background-image: url('{{ $pengaturan->background_universitas() }}'); background-repeat: no-repeat;  background-size: cover;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="card" style="margin-top: 210px; margin-bottom: 65px; height: 40rem; width: 75rem;">
                    <div class="card-body">
                        <div class="row justify-content-center pt-5" style="text-align: justify;">
                            <div class="col-sm-9 text-center">
                                <img class="" src="{{ $pengaturan->logo() }}" height="170px"
                                    alt="" srcset="">
                                <br><br>
                                    <p>{!! $pengaturan->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
