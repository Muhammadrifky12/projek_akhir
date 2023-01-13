@extends('layout.admin')
@section('title', 'Dashboard')
@section('content-title', 'Dashboard')
@section('content')
    <style>
        #pp {
            background: linear-gradient(to left, #33ccff 0%, #33ccff 100%)
        }
    </style>
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header" id="pp">
                    <h6 class="m-0 font-weight-bold text-dark">Pelanggaran Ringan : Peringatan Petugas Ketertipan
                </div>
            </div>
            <div class="card shadow mb-4">
                <div style="background: gray" class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark">Pelanggaran Ringan : Panggilan Orang Tua
                </div>
            </div>
            <div class="card shadow mb-4">
                <div id="pp" class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark">Pelanggaran Ringan : Panggilan Skorsing
                </div>
            </div>
            <div class="card shadow mb-4">
                <div style="background: gray" class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark">Pelanggaran Ringan : Panggilan Dikeluarkan Dari Sekolah
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="diagram" width="772" height="312"
                            style="display: block; height: 208px; width: 515px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Pelanggaran
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Tidak Pelanggaran
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        var ctx = document.getElementById("diagram");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Pelanggaran"],
            datasets: [{
                data: {!!json_encode($history)!!},
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>
@endsection
