<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Jurusan::create([
            'nama_jurusan' => 'Teknik Pemesinan',
            'deskripsi' => 'Mempelajari cara mengoperasikan dan memprogram mesin-mesin produksi seperti mesin bubut, frais, dan CNC. Cocok untuk siswa yang tertarik pada dunia manufaktur dan produksi logam.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Kendaraan Ringan',
            'deskripsi' => 'Fokus pada perawatan, perbaikan, dan diagnosa kerusakan kendaraan bermotor roda empat seperti mobil. Siswa akan memahami sistem mesin, kelistrikan, dan suspensi mobil.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Sepeda Motor',
            'deskripsi' => 'Mengajarkan keterampilan perbaikan dan perawatan sepeda motor. Siswa akan memahami sistem mesin, transmisi, rem, dan sistem kelistrikan motor.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Pengelasan',
            'deskripsi' => 'Mempelajari berbagai jenis proses pengelasan logam, seperti SMAW, GTAW, dan GMAW. Jurusan ini sangat dibutuhkan di industri konstruksi dan manufaktur.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Audio Video',
            'deskripsi' => 'Fokus pada instalasi dan perbaikan perangkat audio dan video, serta pemrograman dan pengoperasian sistem multimedia dan broadcasting.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Elektronika Industri',
            'deskripsi' => 'Mengajarkan tentang sistem kendali otomatis, PLC, sensor, dan aktuator dalam dunia industri. Cocok untuk siswa yang ingin bekerja di bidang otomasi industri.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Instalasi Tenaga Listrik',
            'deskripsi' => 'Membekali siswa dengan kemampuan instalasi listrik rumah, gedung, hingga industri. Siswa juga akan mempelajari sistem pengamanan dan pengendalian listrik.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Geomatika',
            'deskripsi' => 'Mengajarkan keterampilan dalam pemetaan, survei, dan pengukuran tanah menggunakan teknologi seperti GPS, drone, dan perangkat lunak pemetaan.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Konstruksi Perumahan',
            'deskripsi' => 'Fokus pada perencanaan, pembangunan, dan renovasi bangunan serta perumahan. Termasuk juga pemahaman tentang struktur bangunan dan bahan konstruksi.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Desain Permodelan dan Informasi Bangunan',
            'deskripsi' => 'Menggabungkan teknik menggambar bangunan secara manual dan digital menggunakan software seperti AutoCAD dan Revit untuk menghasilkan model bangunan yang informatif.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            'deskripsi' => 'Mempelajari pembuatan aplikasi dan perangkat lunak berbasis desktop, web, maupun mobile. Cocok untuk siswa yang ingin menjadi programmer atau developer.',
            'kuota' => 100
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Komputer Jaringan',
            'deskripsi' => 'Mengajarkan keterampilan instalasi, konfigurasi, dan perawatan jaringan komputer serta perangkat keras dan lunaknya. Cocok untuk yang tertarik pada dunia IT dan jaringan.',
            'kuota' => 100
        ]);  
    }
}
