<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\PPDBRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    //
    public function dashboard()
    {
        // Hitung total pengguna
        $totalUsers = User::count();
        
        // Hitung jumlah siswa yang mendaftar
        $registeredStudents = PPDBRegistration::count();
        
        // Hitung jumlah siswa yang diterima (status 'accepted')
        $acceptedStudents = PPDBRegistration::where('status', 'accepted')->count();
        
        // Hitung jumlah siswa yang sudah daftar ulang
        // Catatan: Anda perlu menambahkan kolom 're_registered' ke tabel PPDBRegistration
        // atau membuat tabel baru untuk daftar ulang jika belum ada
        $reRegisteredStudents = PPDBRegistration::where('status', 'accepted')
                                    ->where('re_registered', true)
                                    ->count();

        // Ambil semua jurusan
        $jurusans = Jurusan::all();
        
        // Hitung jumlah pendaftar per jurusan untuk grafik
        $registrationsByMajor = PPDBRegistration::select('jurusan_id', DB::raw('count(*) as total'))
                                    ->groupBy('jurusan_id')
                                    ->pluck('total', 'jurusan_id')
                                    ->toArray();
        
        // Menyiapkan data jurusan untuk chart
        $jurusanNames = $jurusans->pluck('nama_jurusan')->toArray();
        $jurusanCounts = [];
        
        foreach ($jurusans as $jurusan) {
            $jurusanCounts[] = $registrationsByMajor[$jurusan->id] ?? 0;
        }

        return view('admin.dashboard', compact(
            'totalUsers', 
            'registeredStudents', 
            'acceptedStudents', 
            'reRegisteredStudents',
            'jurusanNames',
            'jurusanCounts'
        ));
    }
}
