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
        
        // Validasi input termasuk file
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
            'pas_foto' => 'required|image|mimes:jpeg,png|max:2048',
            'surat_keterangan_lulus' => 'required|mimes:pdf,doc,docx|max:5120',
            'ijazah' => 'required|mimes:pdf,doc,docx|max:5120',
            'kartu_keluarga' => 'required|mimes:pdf,doc,docx|max:5120',
            'akte_kelahiran' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);

        // Upload dan simpan file-file
        $data = $request->all();
        
        if ($request->hasFile('pas_foto')) {
            $data['pas_foto'] = $request->file('pas_foto')->store('pas_foto', 'public');
        }
        if ($request->hasFile('surat_keterangan_lulus')) {
            $data['surat_lulus'] = $request->file('surat_keterangan_lulus')->store('surat_lulus', 'public');
        }
        if ($request->hasFile('ijazah')) {
            $data['ijazah'] = $request->file('ijazah')->store('ijazah', 'public');
        }
        if ($request->hasFile('kartu_keluarga')) {
            $data['kartu_keluarga'] = $request->file('kartu_keluarga')->store('kartu_keluarga', 'public');
        }
        if ($request->hasFile('akte_kelahiran')) {
            $data['akte_kelahiran'] = $request->file('akte_kelahiran')->store('akte_kelahiran', 'public');
        }

        // Buat registrasi PPDB
        $data['user_id'] = $user->id;
        $data['status'] = 'pending';
        
        PPDBRegistration::create($data);

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