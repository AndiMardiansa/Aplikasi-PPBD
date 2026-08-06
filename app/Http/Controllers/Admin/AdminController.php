<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function calonSiswa(Request $request)
    {
        $query = Student::with('jurusan:id,nama_jurusan');

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('jurusan_id')) {
            $query->where('jurusan_id', $request->jurusan_id);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                    ->orWhere('nisn', 'like', "%{$search}%")
                    ->orWhere('asal_sekolah', 'like', "%{$search}%");
            });
        }

        $students = $query->orderByDesc('created_at')->paginate(10)->withQueryString();
        $jurusans = Jurusan::orderBy('nama_jurusan')->get();

        $statusCounts = Student::query()
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return view('admin.calon-siswa.index', [
            'students' => $students,
            'jurusans' => $jurusans,
            'statusCounts' => $statusCounts,
            'filters' => $request->only(['status', 'jurusan_id', 'search']),
        ]);
    }

    public function calonSiswaShow(Student $student)
    {
        $student->load('jurusan:id,nama_jurusan', 'user:id,name,email');

        return view('admin.calon-siswa.show', ['student' => $student]);
    }

    public function updateStatus(Request $request, Student $student)
    {
        $request->validate([
            'status' => 'required|in:pending,verified,rejected',
        ], [
            'status.required' => 'Status wajib dipilih',
            'status.in' => 'Status tidak valid',
        ]);

        $student->update(['status' => $request->status]);

        return back()->with('success', "Status \"{$student->nama_lengkap}\" berhasil diperbarui menjadi ".ucfirst($request->status));
    }

    public function status(Request $request)
    {
        $query = Student::with('jurusan:id,nama_jurusan');

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                    ->orWhere('nisn', 'like', "%{$search}%");
            });
        }

        $students = $query->orderByDesc('created_at')->paginate(10)->withQueryString();

        $statusCounts = Student::query()
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return view('admin.status', [
            'students' => $students,
            'statusCounts' => $statusCounts,
            'filters' => $request->only(['status', 'search']),
        ]);
    }

    public function daftarUlang(Request $request)
    {
        $query = Student::with('jurusan:id,nama_jurusan');

        if ($request->filled('daftar_ulang')) {
            $query->where('daftar_ulang', $request->daftar_ulang);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                    ->orWhere('nisn', 'like', "%{$search}%");
            });
        }

        $students = $query->orderByDesc('created_at')->paginate(10)->withQueryString();

        $counts = Student::query()
            ->selectRaw('daftar_ulang, COUNT(*) as total')
            ->groupBy('daftar_ulang')
            ->pluck('total', 'daftar_ulang');

        return view('admin.daftar-ulang', [
            'students' => $students,
            'counts' => $counts,
            'filters' => $request->only(['daftar_ulang', 'search']),
        ]);
    }

    public function updateDaftarUlang(Request $request, Student $student)
    {
        $request->validate([
            'daftar_ulang' => 'required|in:pending,paid,completed',
        ], [
            'daftar_ulang.required' => 'Status wajib dipilih',
            'daftar_ulang.in' => 'Status tidak valid',
        ]);

        $student->update(['daftar_ulang' => $request->daftar_ulang]);

        return back()->with('success', "Status daftar ulang \"{$student->nama_lengkap}\" berhasil diperbarui");
    }

    public function siswa(Request $request)
    {
        $query = Student::with('jurusan:id,nama_jurusan')->where('status', 'verified');

        if ($request->filled('jurusan_id')) {
            $query->where('jurusan_id', $request->jurusan_id);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                    ->orWhere('nisn', 'like', "%{$search}%")
                    ->orWhere('asal_sekolah', 'like', "%{$search}%");
            });
        }

        $students = $query->orderBy('nama_lengkap')->paginate(10)->withQueryString();
        $jurusans = Jurusan::orderBy('nama_jurusan')->get();

        return view('admin.siswa', [
            'students' => $students,
            'jurusans' => $jurusans,
            'filters' => $request->only(['jurusan_id', 'search']),
        ]);
    }

    public function kelasIndex()
    {
        $kelasList = Kelas::with('jurusan:id,nama_jurusan')->orderBy('nama_kelas')->paginate(10);

        return view('admin.kelas.index', ['kelasList' => $kelasList]);
    }

    public function kelasCreate()
    {
        $jurusans = Jurusan::orderBy('nama_jurusan')->get();

        return view('admin.kelas.create', ['jurusans' => $jurusans]);
    }

    public function kelasStore(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'jurusan_id' => 'required|exists:jurusans,id',
            'kuota' => 'nullable|integer|min:1',
        ], [
            'nama_kelas.required' => 'Nama kelas wajib diisi',
            'jurusan_id.required' => 'Jurusan wajib dipilih',
            'jurusan_id.exists' => 'Jurusan tidak valid',
            'kuota.integer' => 'Kuota harus berupa angka',
            'kuota.min' => 'Kuota minimal 1',
        ]);

        Kelas::create($request->only(['nama_kelas', 'jurusan_id', 'kuota']));

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil ditambahkan');
    }

    public function kelasEdit(Kelas $kelas)
    {
        $jurusans = Jurusan::orderBy('nama_jurusan')->get();

        return view('admin.kelas.edit', ['kelas' => $kelas, 'jurusans' => $jurusans]);
    }

    public function kelasUpdate(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'jurusan_id' => 'required|exists:jurusans,id',
            'kuota' => 'nullable|integer|min:1',
        ], [
            'nama_kelas.required' => 'Nama kelas wajib diisi',
            'jurusan_id.required' => 'Jurusan wajib dipilih',
            'jurusan_id.exists' => 'Jurusan tidak valid',
            'kuota.integer' => 'Kuota harus berupa angka',
            'kuota.min' => 'Kuota minimal 1',
        ]);

        $kelas->update($request->only(['nama_kelas', 'jurusan_id', 'kuota']));

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil diperbarui');
    }

    public function kelasDestroy(Kelas $kelas)
    {
        $kelas->delete();

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil dihapus');
    }

    public function faqIndex()
    {
        $faqs = Faq::orderBy('order')->orderBy('id')->paginate(10);

        return view('admin.faq.index', ['faqs' => $faqs]);
    }

    public function faqCreate()
    {
        return view('admin.faq.create');
    }

    public function faqStore(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'order' => 'nullable|integer|min:0',
        ], [
            'question.required' => 'Pertanyaan wajib diisi',
            'answer.required' => 'Jawaban wajib diisi',
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'order' => $request->order ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ berhasil ditambahkan');
    }

    public function faqEdit(Faq $faq)
    {
        return view('admin.faq.edit', ['faq' => $faq]);
    }

    public function faqUpdate(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'order' => 'nullable|integer|min:0',
        ], [
            'question.required' => 'Pertanyaan wajib diisi',
            'answer.required' => 'Jawaban wajib diisi',
        ]);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'order' => $request->order ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ berhasil diperbarui');
    }

    public function faqDestroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faq.index')->with('success', 'FAQ berhasil dihapus');
    }
}
