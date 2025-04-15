<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\PPDBRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PPDBController extends Controller
{
    /**
     * Display the user dashboard.
     */
    public function dashboard()
    {
        $user = Auth::user();
        $registration = PPDBRegistration::with('jurusan')->where('user_id', $user->id)->first();
        $hasRegistered = $registration ? true : false;
        
        return view('user.dashboard', [
            'hasRegistered' => $hasRegistered,
            'registration' => $registration
        ]);
    }
    
    /**
     * Check if a user has registered for PPDB.
     */
    public function checkUserRegistration($userId)
    {
        $registration = PPDBRegistration::where('user_id', $userId)->first();
        return $registration ? true : false;
    }
    
    /**
     * Show the PPDB registration form.
     */
    public function showRegistrationForm()
    {
        $user = Auth::user();
        
        // Check if user has already registered
        if ($this->checkUserRegistration($user->id)) {
            return redirect()->route('ppdb.details')
                ->with('info', 'Anda sudah terdaftar sebagai Calon Peserta Didik Baru.');
        }
        
        $jurusans = Jurusan::all();
        
        return view('ppdb.register', [
            'jurusans' => $jurusans
        ]);
    }
    
    /**
     * Process the PPDB registration.
     */
    public function register(Request $request)
    {
        $user = Auth::user();
        
        // Check if user has already registered
        if ($this->checkUserRegistration($user->id)) {
            return redirect()->route('ppdb.details')
                ->with('info', 'Anda sudah terdaftar sebagai Calon Peserta Didik Baru.');
        }
        
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:ppdb_registrations,nisn',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:15',
            'asal_sekolah' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:100',
            'pekerjaan_ibu' => 'required|string|max:100',
            'jurusan_id' => 'required|exists:jurusans,id',
        ]);
        
        // Create PPDB registration
        PPDBRegistration::create([
            'user_id' => $user->id,
            'nama_lengkap' => $request->nama_lengkap,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'asal_sekolah' => $request->asal_sekolah,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'jurusan_id' => $request->jurusan_id,
            'status' => 'pending',
        ]);
        
        return redirect()->route('home')
            ->with('success', 'Pendaftaran PPDB berhasil dilakukan. Status pendaftaran Anda sedang dalam proses verifikasi.');
    }
    
    /**
     * Show the PPDB registration details.
     */
    public function showRegistration()
    {
        $user = Auth::user();
        $registration = PPDBRegistration::with('jurusan')->where('user_id', $user->id)->first();
        
        if (!$registration) {
            return redirect()->route('register.ppdb')
                ->with('warning', 'Anda belum melakukan pendaftaran PPDB.');
        }
        
        return view('ppdb.details', [
            'registration' => $registration
        ]);
    }
} 