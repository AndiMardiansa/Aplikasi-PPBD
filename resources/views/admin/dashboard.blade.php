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
            <a href="{{ route('admin.calon-siswa') }}" class="text-xs text-green-500 flex items-center mt-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Lihat Detail
            </a>
        </div>
    </div>
    
    <!-- Verified Students Card -->
    <div class="bg-white rounded-lg shadow p-6 flex items-center">
        <div class="p-3 rounded-full bg-gray-100 mr-4">
            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <div>
            <p class="text-5xl font-bold text-gray-800">{{ $acceptedStudents }}</p>
            <p class="text-gray-600 mt-1">Siswa Terverifikasi</p>
            <a href="{{ route('admin.siswa') }}" class="text-xs text-green-500 flex items-center mt-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Lihat Detail
            </a>
        </div>
    </div>
    
    <!-- Rejected Students Card -->
    <div class="bg-white rounded-lg shadow p-6 flex items-center">
        <div class="p-3 rounded-full bg-gray-100 mr-4">
            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <div>
            <p class="text-5xl font-bold text-gray-800">{{ $rejectedStudents }}</p>
            <p class="text-gray-600 mt-1">Siswa Ditolak</p>
            <a href="{{ route('admin.status', ['status' => 'rejected']) }}" class="text-xs text-green-500 flex items-center mt-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Lihat Detail
            </a>
        </div>
    </div>
</div>

<!-- Chart Sections -->
<div class="grid grid-cols-1 gap-6 mb-8">
    <!-- Bar Chart -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Grafik Pendaftaran berdasarkan Jurusan</h2>
            {{-- <button onclick="downloadChart('ppdbChart', 'Grafik-Pendaftaran-Jurusan')" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors">
                <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                Download
            </button> --}}
        </div>
        <div class="h-80 w-full" id="ppdbChart"></div>
    </div>

    <!-- Statistics Chart -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Statistik Status Pendaftaran</h2>
            {{-- <button onclick="downloadChart('statisticsChart', 'Statistik-Status-Pendaftaran')" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors">
                <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                Download
            </button> --}}
        </div>
        <div class="h-80 w-full" id="statisticsChart"></div>
    </div>
</div>

@push('scripts')
<script>
    let barChart, pieChart;  // Menyimpan instance chart secara global

    document.addEventListener('DOMContentLoaded', function() {
        // Data untuk grafik pertama (Pendaftaran per Jurusan)
        const jurusanNames = @json($jurusanNames);
        const jurusanCounts = @json($jurusanCounts);
        
        // Data untuk grafik kedua (Status Pendaftaran)
        const statusData = {
            pending: {{ $registeredStudents - $acceptedStudents - $rejectedStudents }},
            verified: {{ $acceptedStudents }},
            rejected: {{ $rejectedStudents }}
        };

        // Konfigurasi grafik pertama
        const barChartOptions = {
            series: [{
                name: 'Jumlah Pendaftar',
                data: jurusanCounts
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: false,
                        zoom: false,
                        zoomin: false,
                        zoomout: false,
                        pan: false,
                        reset: false
                    },
                    export: {
                        csv: {
                            filename: 'Grafik-Pendaftaran-Jurusan',
                            columnDelimiter: ',',
                            headerCategory: 'Jurusan',
                            headerValue: 'Jumlah Pendaftar'
                        },
                        svg: {
                            filename: 'Grafik-Pendaftaran-Jurusan'
                        },
                        png: {
                            filename: 'Grafik-Pendaftaran-Jurusan'
                        }
                    }
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
                }
            },
            xaxis: {
                categories: jurusanNames,
                title: {
                    text: 'Jurusan'
                }
            },
            yaxis: {
                title: {
                    text: 'Jumlah Pendaftar'
                }
            }
        };

        // Konfigurasi grafik kedua
        const pieChartOptions = {
            series: [statusData.pending, statusData.verified, statusData.rejected],
            chart: {
                type: 'pie',
                height: 350,
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: false,
                        zoom: false,
                        zoomin: false,
                        zoomout: false,
                        pan: false,
                        reset: false
                    },
                    export: {
                        csv: {
                            filename: 'Statistik-Status-Pendaftaran',
                            columnDelimiter: ',',
                            headerCategory: 'Status',
                            headerValue: 'Jumlah'
                        },
                        svg: {
                            filename: 'Statistik-Status-Pendaftaran'
                        },
                        png: {
                            filename: 'Statistik-Status-Pendaftaran'
                        }
                    }
                }
            },
            labels: ['Pending', 'Terverifikasi', 'Ditolak'],
            colors: ['#FFA500', '#4CAF50', '#F44336'],
            legend: {
                position: 'bottom'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            dataLabels: {
                enabled: true,
                formatter: function (val, opts) {
                    return opts.w.config.series[opts.seriesIndex];
                }
            }
        };

        barChart = new ApexCharts(document.querySelector("#ppdbChart"), barChartOptions);
        pieChart = new ApexCharts(document.querySelector("#statisticsChart"), pieChartOptions);
        
        barChart.render();
        pieChart.render();
    });

    // Fungsi untuk mengunduh grafik
    function downloadChart(chartId, filename) {
        const chart = chartId === 'ppdbChart' ? barChart : pieChart;
        if (chart) {
            chart.exportToSVG();
        }
    }
</script>
@endpush
@endsection 