@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <br><br><br><br><br>
        {{-- <h2 class="text-center">Status Pendaftar</h2>
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="mt-3">
                <h5>Jumlah Pendaftar</h5>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Info example"
                        style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100</div>
                </div>
            </div>
            <div class="mt-3">
                <h5>Terima</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Warning example"
                        style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">55</div>
                </div>
            </div>
            <div class="mt-3">
                <h5>Tolak</h5>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example"
                        style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">20</div>
                </div>
            </div>
            <div class="mt-3">
                <h5>Belum Dikonfirmasi</h5>
                <div class="progress">
                    <div class="progress-bar bg-secondary" role="progressbar" aria-label="Danger example"
                        style="width: 5%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">5</div>
                </div>
            </div>
        </div>
    </div> --}}
        <!-- table -->
        <br><br>
        <h2 class="text-center">List Pendaftar</h2>
        <br>
        @if (session()->has('success'))
            <div class="alert alert-success fs-5 text-center" role="alert">
                {{ session('success') }}
            </div>
            @elseif (session()->has('failed'))
            <div class="alert alert-danger fs-5 text-center" role="alert">
                {{ session('failed') }}
            </div>
        @endif
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">KSM</th>
                    <th scope="col">KHS</th>
                    <th scope="col">CV</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($pendaftaran as $daftar)
                    <tr>
                        <th scope="row">{{ $daftar->id_pendaftaran }}</th>
                        <td>{{ $daftar->nama }}</td>
                        <td>{{ $daftar->nim }}</td>
                        <td>{{ $daftar->jurusan }}</td>
                        <td>{{ $daftar->jk }}</td>
                        <td>{{ $daftar->alamat }}</td>
                        <td>{{ $daftar->email }}</td>
                        <td>{{ $daftar->no_hp }}</td>
                        <td><a class="text-decoration-none" target="blank" href="dokumen/{{ $daftar->ksm }}">{{ $daftar->ksm }}</a></td>
                        <td><a class="text-decoration-none" target="blank" href="dokumen/{{ $daftar->khs }}">{{ $daftar->khs }}</a></td>
                        <td><a class="text-decoration-none" target="blank" href="dokumen/{{ $daftar->cv }}">{{ $daftar->cv }}</a></td>
                        <td class="text-success">
                            @if ($daftar->status == 'Terima')
                                Diterima
                            @elseif ($daftar->status == 'Tolak')
                                <span class="text-danger">Tolak</span>
                            @else
                                <a href="{{ url('terima/' . $daftar->id_pendaftaran) }}" class="btn btn-success">Terima</a>
                                <p></p>
                                <a href="{{ url('tolak/' . $daftar->id_pendaftaran) }}" class="btn btn-danger">Tolak</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- table -->
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br>
        <br>
    </div>
@endsection
