@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<h1 class="text-2xl font-semibold text-gray-800 mb-8">Selamat datang, {{ Auth::user()->name }}</h1>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Users Card -->
    <div class="bg-white rounded-lg shadow p-6 flex items-center">
        <div class="p-3 rounded-full bg-gray-100 mr-4">
            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
        </div>
        <div>
            <p class="text-5xl font-bold text-gray-800">{{ $totalUsers }}</p>
            <p class="text-gray-600 mt-1">Total Pengguna</p>
        </div>
    </div>
    
    <!-- Registered Students Card -->
    <div class="bg-white rounded-lg shadow p-6 flex items-center">
        <div class="p-3 rounded-full bg-gray-100 mr-4">
            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
        </div>
        <div>
            <p class="text-5xl font-bold text-gray-800">{{ $registeredStudents }}</p>
            <p class="text-gray-600 mt-1">Siswa Mendaftar</p>
            <a href="#" class="text-xs text-green-500 flex items-center mt-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Lihat
            </a>
        </div>
    </div>
    
    <!-- Accepted Students Card -->
    <div class="bg-white rounded-lg shadow p-6 flex items-center">
        <div class="p-3 rounded-full bg-gray-100 mr-4">
            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <div>
            <p class="text-5xl font-bold text-gray-800">{{ $acceptedStudents }}</p>
            <p class="text-gray-600 mt-1">Siswa Diterima</p>
            <a href="#" class="text-xs text-green-500 flex items-center mt-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Lihat
            </a>
        </div>
    </div>
    
    <!-- Re-registered Students Card -->
    <div class="bg-white rounded-lg shadow p-6 flex items-center">
        <div class="p-3 rounded-full bg-gray-100 mr-4">
            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
            </svg>
        </div>
        <div>
            <p class="text-5xl font-bold text-gray-800">{{ $reRegisteredStudents }}</p>
            <p class="text-gray-600 mt-1">Siswa Daftar Ulang</p>
            <a href="#" class="text-xs text-green-500 flex items-center mt-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Lihat
            </a>
        </div>
    </div>
</div>

<!-- Chart Section -->
<div class="bg-white rounded-lg shadow mb-8 p-6">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Grafik PPDB berdasarkan jurusan</h2>
    <div class="h-80 w-full" id="chartContainer">
        <div id="ppdbChart"></div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title mb-0">Statistik Pendaftar PPDB</h5>
                </div>
                <div id="ppdb-statistics"></div>
            </div>
        </div>
    </div>
    <!-- Chart Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var options = {
                series: [{
                    name: 'Pendaftar',
                    data: @json($jurusanCounts)
                }],
                chart: {
                    height: 350,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 10,
                        dataLabels: {
                            position: 'top',
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val) {
                        return val;
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },
                xaxis: {
                    categories: @json($jurusanNames),
                    position: 'bottom',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        fill: {
                            type: 'gradient',
                            gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                            }
                        }
                    },
                    tooltip: {
                        enabled: true,
                    }
                },
                yaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    labels: {
                        show: true,
                        formatter: function (val) {
                            return val;
                        }
                    }
                },
                title: {
                    text: 'Jumlah Pendaftar per Jurusan',
                    floating: false,
                    offsetY: 0,
                    align: 'center',
                    style: {
                        color: '#444'
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#ppdb-statistics"), options);
            chart.render();
        });
    </script>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Data dari controller
    const jurusanNames = @json($jurusanNames);
    const jurusanCounts = @json($jurusanCounts);
    
    // Konfigurasi chart
    const options = {
        series: [{
            name: 'Jumlah Pendaftar',
            data: jurusanCounts
        }],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 5,
                endingShape: 'rounded',
                distributed: true
            },
        },
        colors: ['#54B4D3', '#A66CFF', '#9C27B0', '#F44336', '#FF9800', '#4CAF50'],
        dataLabels: {
            enabled: true,
            formatter: function(val) {
                return val;
            },
            style: {
                fontSize: '12px',
                fontWeight: 'bold',
                colors: ['#fff']
            },
            background: {
                enabled: false
            }
        },
        xaxis: {
            categories: jurusanNames,
            labels: {
                style: {
                    fontSize: '12px'
                }
            },
            title: {
                text: 'Jurusan'
            }
        },
        yaxis: {
            title: {
                text: 'Jumlah Pendaftar'
            },
            min: 0,
            forceNiceScale: true,
            labels: {
                formatter: function(val) {
                    return Math.floor(val);
                }
            }
        },
        grid: {
            borderColor: '#e7e7e7',
            row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
            },
        },
        legend: {
            show: false
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + " Pendaftar";
                }
            }
        }
    };

    const chart = new ApexCharts(document.querySelector("#ppdbChart"), options);
    chart.render();
});
</script>
@endpush 