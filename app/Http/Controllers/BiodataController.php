<?php

namespace App\Http\Controllers;

use App\Models\PPDBRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $registration = PPDBRegistration::with('jurusan')
            ->where('user_id', $user->id)
            ->first();

        if (!$registration) {
            return redirect()->route('register.ppdb')
                ->with('info', 'Anda belum melakukan pendaftaran PPDB.');
        }

        return view('ppdb.biodata', [
            'registration' => $registration
        ]);
    }
} 