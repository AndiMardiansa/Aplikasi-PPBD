<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Student;
use App\Models\User;

class DashboardAdminController extends Controller
{
    //
    public function dashboard()
    {
        // Hitung total pengguna dan siswa (satu query COUNT masing-masing)
        $totalUsers = User::count();
        $registeredStudents = Student::count();

        // Hitung jumlah siswa per status (pending/verified/rejected) dalam satu query
        $statusCounts = Student::query()
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status')
            ->map(fn ($n) => (int) $n);

        $acceptedStudents = $statusCounts['verified'] ?? 0;
        $rejectedStudents = $statusCounts['rejected'] ?? 0;

        // Nama jurusan + jumlah pendaftar per jurusan dalam satu query (left join)
        $jurusanStats = Jurusan::query()
            ->leftJoin('students', 'students.jurusan_id', '=', 'jurusans.id')
            ->selectRaw('jurusans.id, jurusans.nama_jurusan, COUNT(students.id) as total')
            ->groupBy('jurusans.id', 'jurusans.nama_jurusan')
            ->orderBy('jurusans.id')
            ->get();

        $jurusanNames = $jurusanStats->pluck('nama_jurusan')->toArray();
        $jurusanCounts = $jurusanStats->pluck('total')->map(fn ($n) => (int) $n)->toArray();

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
