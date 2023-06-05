@extends('layouts.app')

@section('container')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <section id="content" style="margin-top:100px">
        <div class="container">
            @if (Session::has('error'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    </div>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <h3>User UKM FUN <a href="{{ route('users.download-sampel-import') }}"
                            class="btn bg-success text-white btn-sm">Download Format</a></h3>

                    <div class="mb-5">
                        <form action="{{ route('users.import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class='form-group mb-3'>
                                <label for='file_excel' class='mb-2'>Mahasiswa (format .xlsx)</label>
                                <input type='file' name='file_excel'
                                    class='form-control @error('file_excel') is-invalid @enderror'
                                    value='{{ old('file_excel') }}'>
                                @error('file_excel')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success w-100">Tambah User</button>
                            </div>
                        </form>
                    </div>

                    <table class="table table-striped table-hover mt-5" id="dTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>NIM</th>
                                <th>Jurusan</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->nim ?? '-' }}</td>
                                    <td>{{ $user->jurusan ?? '-' }}</td>
                                    <td>{{ $user->jk ?? '-' }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{!! $user->status() !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dTable').DataTable();
        });
    </script>
@endsection
