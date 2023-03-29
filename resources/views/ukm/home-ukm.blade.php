@extends('layouts.main-ukm')

@section('container')
    <section id="content">
        <div class="container-fluid">
            @if (isset($error))
                <div class="alert alert-warning fs-5 text-center" role="alert" style="margin: 250px 100px 200px 100px; line-height: 200px;">
                    {{ $error }}
                </div> 
            @else
                <div class="row">
                    <div class="col-sm-12 text-center mt-5"
                        style="height: 821px; background-image: url({{ asset('storage/asset/img/upload/' . $contents->jumbotron) }}); background-repeat: no-repeat; background-size: cover;">
                        <img src="{{ asset('storage/asset/img/upload/' . $contents->logo) }}" height="300px" alt=""
                            srcset="" style="margin-top: 110px;">
                        <br><br><br><br><br>
                        <h1 class="text-light">Selamat Datang Di Unit Kegiatan Mahasiswa</h1>
                        <h1 class="text-light">{{ $contents->nama_ukm }}</h1>
                        <br><br>
                    </div>
                </div>
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-sm-6 text-center">
                        <p class="fs-5" style="text-align: justify;">
                            {{ $contents->deskripsi }}
                        </p>
                    </div>
                </div>
                <div class="row bg-danger text-light" style="height: 532px;">
                    <div class="col-sm-4 text-center fs-1 my-auto">
                        VISI
                    </div>
                    <div class="col-sm-6 my-auto" style="text-align: justify;">
                        {{ $contents->visi }}
                    </div>
                </div>
                <div class="row bg-secondary text-light" style="height: 532px;">
                    <div class="col-sm-4 text-center fs-1 my-auto">
                        MISI
                    </div>
                    <div class="col-sm-6 my-auto" style="text-align: justify;">
                        {{ $contents->misi }}
                    </div>
                </div>
                {{-- <div class="row text-center pt-5 mt-5 justify-content-center">
                    <h1>STRUKTUR ORGANISASI</h1>
                    <div class="col-sm-3 mt-5">
                        <div class="card mx-auto" style="width: 18rem; height: 25rem;">
                            <img src="../img/astacala-president.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Aditya Zhafir</h5>
                                <p class="card-text">President</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5">
                        <div class="card mx-auto" style="width: 18rem; height: 25rem;">
                            <img src="../img/astacala-vice-president.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Titachan</h5>
                                <p class="card-text">Vice President</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5">
                        <div class="card mx-auto" style="width: 18rem; height: 25rem;">
                            <img src="../img/astacala-director.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Yovita</h5>
                                <p class="card-text">Director</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row text-center pt-5 mt-3 justify-content-center">
                    <h1 class="mt-5 mb-4">GALERI KEGIATAN</h1>
                    <div class="col-sm-6">
                        <iframe class="embed-responsive-item" width="820" height="500"
                            src="https://www.youtube.com/embed/{{ $contents->galeri }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row justify-content-center mt-5 mb">
                    <div class="col-sm-1">

                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- content -->
@endsection
