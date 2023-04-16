@extends('layouts.main-ukm')

@section('container')
    <div class="container">
        <div class="mt-5 pb-5"> 
            <br><br><br><br><br>
            <h3 class="ms-5">Edit Konten</h3>
            <div class="row justify-content-center mt-5">
                <div class="col-sm-5 mx-5">
                    <form action="/add_content" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label fs-5">Nama UKM</label>
                            <input type="text" class="form-control" id="nama" name="nama_ukm"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fs-5">Deskripsi</label>
                            <textarea class="form-control" placeholder="Eg. your text here" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label fs-5">Logo UKM</label>
                            <input class="form-control" type="file" id="logo" name="logo">
                        </div>
                        <div class="mb-3">
                            <label for="jumbotron" class="form-label fs-5">Gambar Jumbotron</label>
                            <input class="form-control" type="file" id="jumbotron" name="jumbotron">
                        </div>
                        <label for="galeri" class="form-label fs-5">Galeri Kegiatan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://www.youtube.com/</span>
                            <input type="text" class="form-control" id="galeri" name="galeri" aria-describedby="basic-addon3">
                        </div>
                </div>
                <div class="col-sm-5 mx-5">
                    <div class="mb-3 mb-5">
                        <label for="visi" class="form-label fs-5">Visi</label>
                        <textarea class="form-control" placeholder="Eg. your text here" id="visi" name="visi" style="height: 150px"></textarea>
                    </div>
                    <div class="mb-3 my-5">
                        <label for="misi" class="form-label fs-5">Misi</label>
                        <textarea class="form-control" placeholder="Eg. your text here" id="misi" name="misi" style="height: 150px"></textarea>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="formFile" class="form-label fs-5">Struktur Organisasi</label>
                        <br>
                        <button type="button" class="btn btn-primary">Tambah +</button>
                    </div> --}}
                    <div class="input-group d-grid" style="margin-top: 43px">
                        <button class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
