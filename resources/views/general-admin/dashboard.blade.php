@extends('layouts.app')

@section('container')
    {{-- {{ dd($contents->) }} --}}
    <section id="content" style="margin-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Dashboard</h3>
                </div>
            </div>
            <div class="row card-count">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-4 align-self-center">
                                <img src="{{ asset('asset/img/mahasiswa_aktif.png') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md align-self-center">
                                <div class="text-center">
                                    <div class="count">{{ $count['mahasiswa_aktif'] }}</div>
                                    <span class="small">Mahasiswa Aktif</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-4 align-self-center">
                                <img src="{{ asset('asset/img/alumni.png') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md align-self-center">
                                <div class="text-center">
                                    <div class="count">{{ $count['alumni'] }}</div>
                                    <span class="small">Alumni</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-4 align-self-center">
                                <img src="{{ asset('asset/img/ukm.png') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md align-self-center">
                                <div class="text-center">
                                    <div class="count">{{ $count['ukm'] }}</div>
                                    <span class="small">Organisasi/UKM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-4 align-self-center">
                                <img src="{{ asset('asset/img/mahasiswa_ukm.png') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md align-self-center">
                                <div class="text-center">
                                    <div class="count">0</div>
                                    <span class="small">Mahasiswa bergabung UKM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [86, 114, 106, 106, 107, 111, 133],
                    label: "Total",
                    borderColor: "rgb(62,149,205)",
                    backgroundColor: "rgb(62,149,205,0.1)",
                }, {
                    data: [70, 90, 44, 60, 83, 90, 100],
                    label: "Accepted",
                    borderColor: "rgb(60,186,159)",
                    backgroundColor: "rgb(60,186,159,0.1)",
                }, {
                    data: [10, 21, 60, 44, 17, 21, 17],
                    label: "Pending",
                    borderColor: "rgb(255,165,0)",
                    backgroundColor: "rgb(255,165,0,0.1)",
                }, {
                    data: [6, 3, 2, 2, 7, 0, 16],
                    label: "Rejected",
                    borderColor: "rgb(196,88,80)",
                    backgroundColor: "rgb(196,88,80,0.1)",
                }]
            },
        });
    </script>
@endpush
@push('styles')
    <style>
        .card-count .card {
            height: 122px;
        }

        .card div {}

        span.small {
            font-size: 12px;
        }

        .count {
            font-size: 34px;
            padding: 0;
            margin: 0;
        }

        #myChart {
            min-height: 400px;
        }
    </style>
@endpush
