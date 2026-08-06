<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PPDBController extends Controller
{
    /**
     * Display the user dashboard.
     */
    public function dashboard()
    {
        $user = Auth::user();
        $registration = Student::with('jurusan')->where('user_id', $user->id)->first();
        $hasRegistered = $registration ? true : false;
        
        if (!$hasRegistered) {
            session()->flash('swal', [
                'icon' => 'info',
                'title' => 'Selamat Datang!',
                'text' => 'Silakan melakukan pendaftaran sebagai Calon peserta Didik Baru SMK NEGERI 3 PALU.',
                'showCancelButton' => true,
                'confirmButtonText' => 'Daftar Sekarang',
                'cancelButtonText' => 'Nanti',
                'confirmButtonColor' => '#10B981',
                'cancelButtonColor' => '#6B7280',
                'customClass' => [
                    'popup' => 'rounded-xl shadow-2xl',
                    'title' => 'text-xl font-bold text-gray-800',
                    'content' => 'text-gray-600'
                ]
            ]);
        }
        
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
        $registration = Student::where('user_id', $userId)->first();
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
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|size:10|unique:students',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|min:10|max:15',
            'asal_sekolah' => 'required|string|max:255',
            'jurusan_id' => 'required|exists:jurusans,id',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'pas_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'surat_keterangan_lulus' => 'required|mimes:pdf,doc,docx|max:2048',
            'ijazah' => 'required|mimes:pdf,doc,docx|max:2048',
            'kartu_keluarga' => 'required|mimes:pdf,doc,docx|max:2048',
            'akte_kelahiran' => 'required|mimes:pdf|max:2048',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nisn.required' => 'NISN wajib diisi',
            'nisn.size' => 'NISN harus 10 digit',
            'nisn.unique' => 'NISN sudah terdaftar',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih',
            'agama.required' => 'Agama wajib dipilih',
            'alamat.required' => 'Alamat wajib diisi',
            'no_telepon.required' => 'Nomor telepon wajib diisi',
            'no_telepon.min' => 'Nomor telepon minimal 10 digit',
            'no_telepon.max' => 'Nomor telepon maksimal 15 digit',
            'asal_sekolah.required' => 'Asal sekolah wajib diisi',
            'jurusan_id.required' => 'Jurusan wajib dipilih',
            'jurusan_id.exists' => 'Jurusan yang dipilih tidak valid',
            'nama_ayah.required' => 'Nama ayah wajib diisi',
            'nama_ibu.required' => 'Nama ibu wajib diisi',
            'pekerjaan_ayah.required' => 'Pekerjaan ayah wajib diisi',
            'pekerjaan_ibu.required' => 'Pekerjaan ibu wajib diisi',
            'pas_foto.required' => 'Pas foto wajib diunggah',
            'pas_foto.image' => 'File harus berupa gambar',
            'pas_foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
            'pas_foto.max' => 'Ukuran foto maksimal 2MB',
            'surat_keterangan_lulus.required' => 'Surat keterangan lulus wajib diunggah',
            'surat_keterangan_lulus.mimes' => 'Format file harus pdf, doc, atau docx',
            'surat_keterangan_lulus.max' => 'Ukuran file maksimal 2MB',
            'ijazah.required' => 'Ijazah wajib diunggah',
            'ijazah.mimes' => 'Format file harus pdf, doc, atau docx',
            'ijazah.max' => 'Ukuran file maksimal 2MB',
            'kartu_keluarga.required' => 'Kartu keluarga wajib diunggah',
            'kartu_keluarga.mimes' => 'Format file harus pdf, doc, atau docx',
            'kartu_keluarga.max' => 'Ukuran file maksimal 2MB',
            'akte_kelahiran.required' => 'Akte kelahiran wajib diunggah',
            'akte_kelahiran.mimes' => 'Format file harus pdf',
            'akte_kelahiran.max' => 'Ukuran file maksimal 2MB',
        ]);

        try {
            DB::beginTransaction();

            // Handle file uploads
            $pasPhoto = $request->file('pas_foto')->store('pas_foto', 'public');
            $suratLulus = $request->file('surat_keterangan_lulus')->store('surat_lulus', 'public');
            $ijazah = $request->file('ijazah')->store('ijazah', 'public');
            $kartuKeluarga = $request->file('kartu_keluarga')->store('kartu_keluarga', 'public');
            $akteKelahiran = $request->file('akte_kelahiran')->store('akte_kelahiran', 'public');

            // Create student record
            $student = Student::create([
                'user_id' => Auth::id(),
                'nama_lengkap' => $request->nama_lengkap,
                'nisn' => $request->nisn,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'asal_sekolah' => $request->asal_sekolah,
                'jurusan_id' => $request->jurusan_id,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'pas_foto' => $pasPhoto,
                'surat_keterangan_lulus' => $suratLulus,
                'ijazah' => $ijazah,
                'kartu_keluarga' => $kartuKeluarga,
                'akte_kelahiran' => $akteKelahiran,
                'status' => 'pending'
            ]);

            DB::commit();

            return redirect()->route('home')->with('success', 'Pendaftaran PPDB berhasil! Silahkan tunggu verifikasi dari admin.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Terjadi kesalahan saat mendaftar. Silahkan coba lagi.');
        }
    }
    
    /**
     * Show the PPDB registration details.
     */
    public function showRegistration()
    {
        $user = Auth::user();
        $registration = Student::with('jurusan')->where('user_id', $user->id)->first();
        
        if (!$registration) {
            return redirect()->route('register.ppdb')
                ->with('swal', [
                    'icon' => 'info',
                    'title' => 'Pemberitahuan!',
                    'text' => 'Untuk melihat status pendaftaran, Anda harus mendaftar terlebih dahulu sebagai Calon peserta Didik Baru.',
                    'showCancelButton' => true,
                    'confirmButtonText' => 'Daftar Sekarang',
                    'cancelButtonText' => 'Nanti',
                    'confirmButtonColor' => '#10B981',
                    'cancelButtonColor' => '#6B7280',
                    'customClass' => [
                        'popup' => 'rounded-xl shadow-2xl',
                        'title' => 'text-xl font-bold text-gray-800',
                        'content' => 'text-gray-600'
                    ]
                ]);
        }
        
        return view('ppdb.details', [
            'registration' => $registration
        ]);
    }

    public function showCalonSiswa()
    {
        $user = Auth::user();
        $userRegistration = Student::where('user_id', $user->id)->first();

        if (!$userRegistration) {
            $jurusans = Jurusan::all();
            return view('ppdb.register', [
                'jurusans' => $jurusans,
                'swal' => [
                    'icon' => 'info',
                    'title' => 'Pemberitahuan!',
                    'text' => 'Anda belum mendaftar sebagai Calon peserta Didik Baru SMK NEGERI 3 PALU.',
                    'showCancelButton' => true,
                    'confirmButtonText' => 'Daftar Sekarang',
                    'cancelButtonText' => 'Nanti',
                    'confirmButtonColor' => '#10B981',
                    'cancelButtonColor' => '#6B7280',
                    'customClass' => [
                        'popup' => 'rounded-xl shadow-2xl',
                        'title' => 'text-xl font-bold text-gray-800',
                        'content' => 'text-gray-600'
                    ]
                ]
            ]);
        }

        $registrations = Student::with('jurusan:id,nama_jurusan')
            ->select('id', 'nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'asal_sekolah', 'jurusan_id', 'status')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('ppdb.calon-siswa', [
            'registrations' => $registrations
        ]);
    }

    public function showBiodata()
    {
        $user = Auth::user();
        $registration = Student::with('jurusan')->where('user_id', $user->id)->first();
        
        if (!$registration) {
            $jurusans = Jurusan::all();
            return view('ppdb.register', [
                'jurusans' => $jurusans,
                'swal' => [
                    'icon' => 'info',
                    'title' => 'Pemberitahuan!',
                    'text' => 'Untuk melihat biodata, Anda harus mendaftar terlebih dahulu sebagai Calon peserta Didik Baru.',
                    'showCancelButton' => true,
                    'confirmButtonText' => 'Daftar Sekarang',
                    'cancelButtonText' => 'Nanti',
                    'confirmButtonColor' => '#10B981',
                    'cancelButtonColor' => '#6B7280',
                    'customClass' => [
                        'popup' => 'rounded-xl shadow-2xl',
                        'title' => 'text-xl font-bold text-gray-800',
                        'content' => 'text-gray-600'
                    ]
                ]
            ]);
        }
        
        return view('ppdb.biodata', [
            'registration' => $registration
        ]);
    }

    public function showDaftarUlang()
    {
        $user = Auth::user();
        $registration = Student::with('jurusan')->where('user_id', $user->id)->first();
        
        if (!$registration) {
            return redirect()->route('register.ppdb')
                ->with('swal', [
                    'icon' => 'info',
                    'title' => 'Pemberitahuan!',
                    'text' => 'Untuk melakukan daftar ulang, Anda harus mendaftar terlebih dahulu sebagai Calon peserta Didik Baru.',
                    'showCancelButton' => true,
                    'confirmButtonText' => 'Daftar Sekarang',
                    'cancelButtonText' => 'Nanti',
                    'confirmButtonColor' => '#10B981',
                    'cancelButtonColor' => '#6B7280',
                    'customClass' => [
                        'popup' => 'rounded-xl shadow-2xl',
                        'title' => 'text-xl font-bold text-gray-800',
                        'content' => 'text-gray-600'
                    ]
                ]);
        }
        
        return view('ppdb.daftar-ulang', [
            'registration' => $registration
        ]);
    }

    public function downloadDocument($type, $filename)
    {
        $path = storage_path('app/public/' . $type . '/' . $filename);
        
        if (!file_exists($path)) {
            abort(404, 'File tidak ditemukan');
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $contentType = '';
        
        switch(strtolower($extension)) {
            case 'pdf':
                $contentType = 'application/pdf';
                break;
            case 'doc':
            case 'docx':
                $contentType = 'application/msword';
                break;
            case 'jpg':
            case 'jpeg':
                $contentType = 'image/jpeg';
                break;
            case 'png':
                $contentType = 'image/png';
                break;
            default:
                $contentType = 'application/octet-stream';
        }

        return response()->file($path, [
            'Content-Type' => $contentType,
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
} 