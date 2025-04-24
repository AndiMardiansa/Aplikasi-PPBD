<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Student;
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
        $registeredStudents = Student::count();
        
        // Hitung jumlah siswa yang diterima (status 'verified')
        $acceptedStudents = Student::where('status', 'verified')->count();
        
        // Hitung jumlah siswa yang ditolak (status 'rejected')
        $rejectedStudents = Student::where('status', 'rejected')->count();

        // Ambil semua jurusan
        $jurusans = Jurusan::all();
        
        // Hitung jumlah pendaftar per jurusan untuk grafik
        $registrationsByMajor = Student::select('jurusan_id', DB::raw('count(*) as total'))
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
            'rejectedStudents',
            'jurusanNames',
            'jurusanCounts'
        ));
    }
}
