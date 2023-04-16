@extends('layouts.main')

@section('container')
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center mt-5"
                    style="height: 821px; background-image: url({{ asset('storage/asset/img/upload/' . $contents->jumbotron) }}); background-repeat: no-repeat; background-size: cover;">
                    <img src="{{ asset('storage/asset/img/upload/' . $contents->logo) }}" height="300px" alt=""
                        srcset="" style="margin-top: 110px;">
                    <br><br><br><br><br>
                    <h1 class="text-light">Selamat Datang Di Unit Kegiatan Mahasiswa</h1>
                    <h1 class="text-light">{{ $contents->nama_ukm }}</h1>
                    <button type="button" class="btn btn-danger btn-lg my-5" data-bs-toggle="modal"
                        data-bs-target="#pendaftaran" style="width: 15rem;">DAFTAR</button>
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
        </div>
    </section>
    <!-- modal -->
    <div id="pendaftaran" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pendaftaran UKM {{ $contents->nama_ukm }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <img src="{{ asset('storage/asset/img/upload/' . $contents->logo) }}" height="150px"
                            alt="" srcset="">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-5 mt-5">
                                <form action="/add-pendaftaran" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_ukm" value="{{ $contents->id_ukm }}">
                                <input type="hidden" name="nama_ukm" value="{{ $title }}">
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama"
                                        aria-describedby="emailHelp" value="{{ auth()->user()->nama }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="number" class="form-control" id="nim" name="nim" value="{{ auth()->user()->nim }}" required>
                                </div>
                                {{-- backup input --}}
                                {{-- <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ auth()->user()->jurusan }}" disabled required>
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="jk" name="jk" value="{{ auth()->user()->jk }}" disabled required>
                                </div> --}}
                                {{-- backup input --}}
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <select class="form-select" aria-label="Default select example" id="jurusan"
                                        name="jurusan" required>
                                        <option value="{{ auth()->user()->jurusan }}" selected>{{ auth()->user()->jurusan }}</option>
                                        <option value="S1 Teknik Telekomunikasi">S1 Teknik Telekomunikasi</option>
                                        <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                                        <option value="S1 Smart Science and Technology">S1 Smart Science and Technology
                                        </option>
                                        <option value="S1 Teknik Komputer">S1 Teknik Komputer</option>
                                        <option value="S1 Teknik Biomedis">S1 Teknik Biomedis</option>
                                        <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                                        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                                        <option value="S1 Digital Supply Chain">S1 Digital Supply Chain</option>
                                        <option value="S1 Informatika">S1 Informatika</option>
                                        <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
                                        <option value="S1 Rekayasa Perangkat Lunak">S1 Rekayasa Perangkat Lunak</option>
                                        <option value="S1 Data Sains">S1 Data Sains</option>
                                        <option value="S1 Manajemen Bisnis Telekomunikasi & Informatika (MBTI)">S1
                                            Manajemen Bisnis Telekomunikasi & Informatika (MBTI)</option>
                                        <option value="S1 Akuntansi">S1 Akuntansi</option>
                                        <option value="S1 Administrasi Bisnis">S1 Administrasi Bisnis</option>
                                        <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
                                        <option value="S1 Digital Public Relation">S1 Digital Public Relation</option>
                                        <option value="S1 Digital Content Broadcasting<">S1 Digital Content Broadcasting</option>
                                        <option value="S1 Desain Komunikasi Visual">S1 Desain Komunikasi Visual</option>
                                        <option value="S1 Product Innovation & Management">S1 Product Innovation & Management </option>
                                        <option value="S1 Desain Interior">S1 Desain Interior</option>
                                        <option value="S1 Kriya (Fashion and Textile Design)">S1 Kriya (Fashion and Textile Design)</option>
                                        <option value="S1 Creative Arts (Intermedia Visual Arts)">S1 Creative Arts (Intermedia Visual Arts)</option>
                                        <option value="D3 Teknik Telekomunikasi (Digital Connectivity)">D3 Teknik Telekomunikasi (Digital Connectivity)</option>
                                        <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                        <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
                                        <option value="D3 Sistem Informasi Akuntansi">D3 Sistem Informasi Akuntansi </option>
                                        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                                        <option value="D3 Digital Marketing">D3 Digital Marketing</option>
                                        <option value="D3 Hospitality and Culinary Art">D3 Hospitality and Culinary Art</option>
                                        <option value="S1 Terapan Digital Creative Multimedia (DCM)">S1 Terapan Digital Creative Multimedia (DCM)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" id="jenis_kelamin"
                                        name="jk" required>
                                        <option value="{{ auth()->user()->jk }}" selected>{{ auth()->user()->jk }}</option>
                                        <option value="Laki - laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-sm-5 mt-5">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No. HP</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ksm" class="form-label">KSM</label>
                                    <input class="form-control" type="file" id="ksm" name="ksm" required>
                                </div>
                                <div class="mb-3">
                                    <label for="khs" class="form-label">KHS</label>
                                    <input class="form-control" type="file" id="khs" name="khs">
                                </div>
                                <div class="mb-3">
                                    <label for="cv" class="form-label">CV</label>
                                    <input class="form-control" type="file" id="cv" name="cv" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                    </div>
                </div>
    </form>
    </div>
    </div>
    <!-- modal -->
    <!-- content -->
@endsection
