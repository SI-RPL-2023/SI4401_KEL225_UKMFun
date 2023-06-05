<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{ asset('asset/img/ukm-fun.png') }}" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<title>UKM FUN | {{ $title }}</title>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @stack('styles')
{{-- <script>
    $(function() {
        let pengaturan_warna = '{{ $pengaturan->main_color }}';
        $('.btn-danger').css({
            "backgroundColor": pengaturan_warna,
            "borderColor": pengaturan_warna
        })
        $('.text-danger').css({
            "color": pengaturan_warna + '!important',
            "borderColor": pengaturan_warna
        })
    })
</script> --}}
@if ($pengaturan->main_color)
    <style>
        .btn-danger.dropdown-toggle {
            background: {{ $pengaturan->main_color }} !important;
            border-color: {{ $pengaturan->main_color }} !important;
        }
        .btn-danger {
            background: {{ $pengaturan->main_color }} !important;
            border-color: {{ $pengaturan->main_color }} !important;
        }
        .active{
            color: {{ $pengaturan->main_color }} !important;
        }

        .btn-danger:hover {
            background: {{ $pengaturan->main_color }} !important;
            border-color: {{ $pengaturan->main_color }} !important;
        }

        .btn-danger:active {
            background: {{ $pengaturan->main_color }} !important;
            border-color: {{ $pengaturan->main_color }} !important;
        }

        .text-danger {
            color: {{ $pengaturan->main_color }} !important;
        }

        a.nav-link.text-danger {
            color: {{ $pengaturan->main_color }} !important;
        }
        .dropdown-item.text-danger {
            color: {{ $pengaturan->main_color }} !important;
        }

        .text-danger:hover {
            color: {{ $pengaturan->main_color }} !important;
        }

        .text-danger:active {
            color: {{ $pengaturan->main_color }} !important;
        }
    </style>
@endif

