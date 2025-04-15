<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = [
        'nama_jurusan',
        'deskripsi',
        'kuota',
    ];

    /**
     * Get the registrations for this jurusan.
     */
    public function registrations()
    {
        return $this->hasMany(PPDBRegistration::class);
    }
}
