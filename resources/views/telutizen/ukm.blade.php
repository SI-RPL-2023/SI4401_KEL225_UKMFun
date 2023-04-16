@extends('layouts.main')

@section('container')
    <div class="container">
        <br><br><br><br><br><br>
        <h2 class="text-center">List UKM</h2>
        <br>
        {{-- table --}}
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">ID Pendaftaran</th>
                    <th scope="col">ID UKM</th>
                    <th scope="col">Nama UKM</th>
                    <th scope="col">Status Pendaftaran</th>
                    <th scope="col">Tanggal Pengumuman</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($pendaftaran as $daftar)
                    <tr>
                        <th scope="row">{{ $daftar->id_pendaftaran }}</th>
                        <th scope="row">{{ $daftar->id_ukm }}</th>
                        <td scope="row">{{ $daftar->nama_ukm }}</th>
                            <td class="text-success">
                                @if ($daftar->status == 'Terima')
                                Diterima
                                @elseif ($daftar->status == 'Tolak')
                                <span class="text-danger">DiTolak</span>
                                @else
                                <span class="text-primary">Belum dikonfirmasi</span>
                                @endif
                            </td>
                            <td scope="row">{{ $daftar->updated_at }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br><br><br>
        <br><br><br><br>
        <br><br>
        {{-- table --}}
    </div>
@endsection
