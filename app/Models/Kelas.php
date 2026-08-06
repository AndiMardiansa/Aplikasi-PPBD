<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'nama_kelas',
        'jurusan_id',
        'kuota',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
