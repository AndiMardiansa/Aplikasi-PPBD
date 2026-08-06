<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            'Kapan pendaftaran PPDB dibuka?' => 'Pendaftaran PPDB dibuka pada bulan Juni-Juli setiap tahunnya. Untuk jadwal spesifik akan diumumkan melalui website resmi sekolah.',
            'Apa saja persyaratan yang dibutuhkan untuk mendaftar?' => 'Persyaratan utama meliputi: Ijazah/SKL SMP, Akta Kelahiran, Kartu Keluarga, Pas foto terbaru, dan dokumen pendukung lainnya sesuai jalur pendaftaran yang dipilih.',
            'Bagaimana cara melakukan pendaftaran online?' => 'Pendaftaran dapat dilakukan melalui website PPDB Online dengan mengisi formulir dan mengunggah dokumen yang diperlukan. Panduan lengkap dapat dilihat di menu "Cara Daftar".',
            'Apa saja jalur penerimaan yang tersedia?' => 'Tersedia beberapa jalur penerimaan: Jalur Prestasi Akademik, Jalur Prestasi Non-Akademik, Jalur Afirmasi, dan Jalur Zonasi. Setiap jalur memiliki persyaratan khusus.',
            'Bagaimana sistem seleksi dilakukan?' => 'Seleksi dilakukan berdasarkan kriteria masing-masing jalur pendaftaran. Untuk jalur prestasi akademik, nilai rapor dan ujian menjadi pertimbangan utama. Pengumuman hasil seleksi akan disampaikan melalui website.',
        ];

        foreach ($faqs as $question => $answer) {
            Faq::firstOrCreate(['question' => $question], [
                'answer' => $answer,
                'is_active' => true,
            ]);
        }
    }
}
