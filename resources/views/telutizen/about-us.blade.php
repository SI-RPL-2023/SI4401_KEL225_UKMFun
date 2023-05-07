@extends('layouts.main')

@section('container')

    <body
        style="background-image: url('{{ asset('asset/img/bg.png') }}'); background-repeat: no-repeat;  background-size: cover;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="card" style="margin-top: 210px; margin-bottom: 65px; height: 40rem; width: 75rem;">
                    <div class="card-body">
                        <div class="row justify-content-center pt-5" style="text-align: justify;">
                            <div class="col-sm-9 text-center">
                                <img class="" src="{{ asset('asset/img/ukm-fun-black.png') }}" height="170px"
                                    alt="" srcset="">
                                <br><br>
                                <p class="mt-5" style="font-size: 25px"><span class="fw-bold text-danger">UKM FUN</span> adalah sebuah website yang menampilkan seluruh informasi UKM yang ada di Telkom University
                                    seperti visi misi UKM, foto kegiatan, register UKM, serta kontak/sosmed tiap UKM
                                    tersebut.
                                    Kami berharap website ini dapat menjadi wadah yang dapat memperkenalkan UKM atau
                                    Organisasi kepada seluruh mahasiswa yang ada di telkom university.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
