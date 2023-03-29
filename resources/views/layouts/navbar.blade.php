<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('asset/img/tel-u.png') }}" class="my-2" alt="tel-u" height="40px">
        </a>
        <div class="navbar-nav">
            <ul class="nav justify-content-end">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $title === 'Home' ? 'text-danger' : 'text-dark' }}" href="/home">HOME</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $title === 'Event' ? 'text-danger' : 'text-dark' }}" href="/event-telutizen">EVENT</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $title === 'UKM' ? 'text-danger' : 'text-dark' }}" href="/ukm">UKM</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $title === 'About Us' ? 'text-danger' : 'text-dark' }}" href="/about">ABOUT
                        US</a> 
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="/notifikasi" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><img class="me-3" src="{{ asset('asset/img/notifikasi.png') }}"
                            alt="" height="20px"></a>
                </li>

                <div class="dropdown ms-2">
                    <li class="nav-item ms-2 me-5">
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                                {{ auth()->user()->nama }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-danger"
                                        href="#"><strong>{{ auth()->user()->nama }}</strong></a></li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item">Logout</button></li>
                                </form>
                            </ul>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pemberitahuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- {{ $pendaftaran }} --}}
                @if ($pendaftaran == [])
                    <p>Belum ada pemberitahuan</p>
                @else
                    @foreach ($pendaftaran as $daftar)
                        @if ($daftar->status == 'Terima')
                            <p>Selamat, anda telah <strong class="text-success">DITERIMA</strong> pada <strong
                                    class="text-success">UKM {{ $daftar->nama_ukm }}</strong></p>
                        @elseif ($daftar->status == 'Tolak')
                            <p>Maaf, anda telah <strong class="text-danger">DITOLAK</strong> pada <strong
                                    class="text-danger">UKM {{ $daftar->nama_ukm }}</strong></p>
                        @else
                            <p>Pendaftaran telah <strong class="text-primary">MASUK</strong> harap menunggu konfirmasi
                                dari
                                <strong class="text-primary">UKM {{ $daftar->nama_ukm }}</strong>
                            </p>
                        @endif
                    @endforeach
                @endif

            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
