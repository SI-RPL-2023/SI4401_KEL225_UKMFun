<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('asset/img/tel-u.png') }}" class="my-2" alt="tel-u" height="40px">
        </a>
        <div class="navbar-nav"> 
            <ul class="nav justify-content-end">
                <li class="nav-item mx-2"> 
                    <a class="nav-link {{ $title === auth()->user()->nama ? 'text-danger' : 'text-dark' }}" href="/home-ukm">{{ auth()->user()->nama }}</a>
                </li>
                <li class="nav-item mx-2"> 
                    <a class="nav-link {{ $title === 'Edit' ? 'text-danger' : 'text-dark' }}" href="/edit">EDIT</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $title === 'Event' ? 'text-danger' : 'text-dark' }}" href="/event">EVENT</a>
                </li>
                <li class="nav-item mx-2"> 
                    <a class="nav-link {{ $title === 'Pendaftaran' ? 'text-danger' : 'text-dark' }}" href="/pendaftaran">PENDAFTARAN</a>
                </li>
                {{-- <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="#"><img class="me-3"
                            src="{{ asset('asset/img/notifikasi.png') }}" alt="" height="20px"></a>
                </li> --}}
                <div class="dropdown ms-5">
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
                                <li><a class="dropdown-item text-danger" href="#"><strong>{{ auth()->user()->nama }}</strong></a></li>
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
