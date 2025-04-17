<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDBRegistration extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ppdb_registrations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'no_telepon',
        'asal_sekolah',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'jurusan_id',
        'status',
        'pas_foto',
        'surat_lulus',
        'ijazah',
        'kartu_keluarga',
        'akte_kelahiran'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    /**
     * Get the user that owns the PPDB registration.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the jurusan that the student has applied for.
     */
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    /**
     * Get the status text in Indonesian.
     *
     * @return string
     */
    public function getStatusTextAttribute()
    {
        return match($this->status) {
            'accepted' => 'Diterima',
            'rejected' => 'Ditolak',
            default => 'Menunggu Verifikasi'
        };
    }

    /**
     * Get the gender text in Indonesian.
     *
     * @return string
     */
    public function getJenisKelaminTextAttribute()
    {
        return $this->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
    }
} 