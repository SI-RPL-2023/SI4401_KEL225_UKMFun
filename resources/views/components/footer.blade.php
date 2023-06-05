<footer>
    <div class="footer p-4 mt-5 bg-dark text-light">
        <div class="row">
            <div class="col-sm-3">
                <img src="{{ asset('asset/img/tel-u-white.png') }}" height="70px" class="mt-3 ms-5" alt="" srcset="">
                <p class="mt-2 ms-5">{{ $pengaturan->alamat_universitas }}</p>
                <div class="row">
                    <p class="mt-5 ms-5 text-secondary">© Copyright 2022  |  Telkom University | Powered by UKM Fun</p>
                </div>
            </div>
            <div class="col-sm-3">
                <p class="text-center mt-4">FOLLOW US</p>
                <div class="text-center">
                    {{-- <a class="mx-2" href="{{ $pengaturan->link_facebook }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('asset/img/facebook.png') }}" alt="" srcset="">
                    </a> --}}
                    <a class="mx-2" href="{{ $pengaturan->link_instagram }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('asset/img/instagram.png') }}" alt="" srcset="">
                    </a>
                    <a class="mx-2"href="https://twitter.com/TelUniversity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" rel="noopener noreferrer">
                        <img src="{{ $pengaturan->link_twitter }}" alt="" srcset="">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                {!! $pengaturan->alamat_iframe_universitas !!}
            </div>
        </div>
    </div>
</footer>

@stack('scripts')
