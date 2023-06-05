@extends('layouts.app')

@section('container')
    {{-- {{ dd($contents->) }} --}}
    <section id="content" style="margin-top:100px">
        <div class="container">
            @if (Session::has('success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <h1>EDIT CONTENT</h1>
            <form action="{{ route('pengaturan.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class='form-group mb-3'>
                            <label for='nama_universitas' class='mb-2'>Nama Universitas</label>
                            <input type='text' name='nama_universitas'
                                class='form-control @error('nama_universitas') is-invalid @enderror'
                                value='{{ $pengaturan->nama_universitas ?? old('nama_universitas') }}'>
                            @error('nama_universitas')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='deskripsi' class='mb-2'>Deskripsi</label>
                            <textarea name='deskripsi' id='deskripsi' cols='30' rows='3'
                                class='form-control @error('deskripsi') is-invalid @enderror'>{{ $pengaturan->deskripsi ?? old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group row mb-3'>
                            <div class="col-12">
                                <label for='logo' class='mb-2'>Logo UKM Fun</label>
                                <br>
                            </div>
                            @if ($pengaturan)
                                <div class="col-md-3">
                                    <img src="{{ $pengaturan->logo() }}" class="img-fluid" alt="">
                                </div>
                            @endif
                            <div class="@if ($pengaturan)col-md-9 align-self-center @else col-md-12 @endif">
                                <input type='file' name='logo'
                                    class='form-control @error('logo') is-invalid @enderror' value='{{ old('logo') }}'>
                                @error('logo')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group row mb-3'>
                            <div class="col-12">
                                <label for='background_universitas' class='mb-2'>Background Universitas</label>
                                <br>
                            </div>
                            @if ($pengaturan)
                                <div class="col-md-3">
                                    <img src="{{ $pengaturan->background_universitas() }}" class="img-fluid" alt="">
                                </div>
                            @endif
                            <div class="@if ($pengaturan)col-md-9 align-self-center @else col-md-12 @endif">
                                <input type='file' name='background_universitas'
                                    class='form-control @error('background_universitas') is-invalid @enderror' value='{{ old('background_universitas') }}'>
                                @error('background_universitas')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group mb-3'>
                            <label for='main_color' class='mb-2'>Main Color</label>
                            <input type='color' name='main_color'
                                class='form-control form-control-color  @error('main_color') is-invalid @enderror'
                                value='{{ $pengaturan->main_color ?? old('main_color') }}'>
                            @error('main_color')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class='form-group mb-3'>
                            <label for='alamat_universitas' class='mb-2'>Alamat Universitas</label>
                            <textarea name='alamat_universitas' id='alamat_universitas' cols='30' rows='3'
                                class='form-control @error('alamat_universitas') is-invalid @enderror'>{{ $pengaturan->alamat_universitas ?? old('alamat_universitas') }}</textarea>
                            @error('alamat_universitas')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='alamat_iframe_universitas' class='mb-2'>Iframe Alamat Universitas</label>
                            <textarea name='alamat_iframe_universitas' id='alamat_iframe_universitas' cols='30' rows='3'
                                class='form-control @error('alamat_iframe_universitas') is-invalid @enderror'>{{ $pengaturan->alamat_iframe_universitas ?? old('alamat_iframe_universitas') }}</textarea>
                            @error('alamat_iframe_universitas')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='link_instagram' class='mb-2'>Instagram</label>
                            <input type='text' name='link_instagram'
                                class='form-control @error('link_instagram') is-invalid @enderror'
                                value='{{ $pengaturan->link_instagram ?? old('link_instagram') }}'>
                            @error('link_instagram')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='link_twitter' class='mb-2'>Twitter</label>
                            <input type='text' name='link_twitter'
                                class='form-control @error('link_twitter') is-invalid @enderror'
                                value='{{ $pengaturan->link_twitter ?? old('link_twitter') }}'>
                            @error('link_twitter')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='link_website' class='mb-2'>Website</label>
                            <input type='text' name='link_website'
                                class='form-control @error('link_website') is-invalid @enderror'
                                value='{{ $pengaturan->link_website ?? old('link_website') }}'>
                            @error('link_website')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-3">
                        <button class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- content -->
@endsection
