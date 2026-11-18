<div align="center">

# PPDB SMK Negeri 3 Palu

Aplikasi **Penerimaan Peserta Didik Baru (PPDB)** online untuk SMK Negeri 3 Palu, dibangun dengan Laravel 12.

![Laravel 12](https://img.shields.io/badge/Laravel-12-red) ![PHP ^8.2](https://img.shields.io/badge/PHP-%5E8.2-blue) ![MySQL 8](https://img.shields.io/badge/MySQL-8-orange)

> Dibangun oleh [Andi Mardiansa](https://github.com/AndiMardiansa) — Mahasiswa Informatika UAD & Asisten Praktikum Algoritma Pemrograman.

</div>

## Deskripsi

Aplikasi PPDB online yang menangani pendaftaran calon peserta didik baru secara digital:

- Halaman utama (landing page) berisi info jurusan, persyaratan, cara daftar, dan FAQ.
- Pendaftaran online dengan unggah berkas (pas foto, SKL, ijazah, kartu keluarga, akte kelahiran).
- Dashboard siswa: status pendaftaran, biodata, kelengkapan dokumen, daftar ulang.
- Panel admin: dashboard statistik, verifikasi calon siswa, manajemen status, daftar ulang, data siswa diterima, manajemen kelas, dan FAQ.

Teknologi yang digunakan:

- **Backend:** Laravel 12, PHP ^8.2, MySQL 8
- **Frontend:** Blade, Tailwind CSS v3 (CDN) + Alpine.js untuk halaman publik/siswa, Tailwind v2 (CDN) untuk panel admin
- **Auth:** buatan sendiri (tanpa Breeze/Fortify)
- **Testing:** PHPUnit

## Fitur

### Publik / Siswa

| Fitur              | Keterangan                                                  |
| ------------------ | ----------------------------------------------------------- |
| Landing page       | Hero, jurusan, persyaratan, cara daftar, FAQ (data dari DB) |
| Registrasi & Login | Registrasi akun dan login pengguna (tanpa email:dns)        |
| Pendaftaran PPDB   | Formulir data diri + unggah 5 dokumen, pilihan jurusan      |
| Status Pendaftaran | `pending` / `verified` / `rejected`                         |
| Biodata            | Data lengkap + tombol "Lihat" untuk setiap dokumen          |
| Daftar Ulang       | Halaman status daftar ulang siswa                           |
| Profil             | Ubah nama/email/password pengguna                           |

### Admin

| Menu         | Keterangan                                                                            |
| ------------ | ------------------------------------------------------------------------------------- |
| Beranda      | Dashboard statistik + grafik pendaftaran per jurusan dan status                       |
| Calon siswa  | Daftar pendaftar (filter status/jurusan/pencarian), detail dokumen, aksi terima/tolak |
| Status       | Ubah status pendaftaran per siswa                                                     |
| Daftar ulang | Ubah status daftar ulang (`pending` / `paid` / `completed`)                           |
| Siswa        | Daftar siswa yang sudah diterima (status `verified`)                                  |
| Kelas        | CRUD kelas (nama kelas, jurusan, kuota)                                               |
| FAQ          | CRUD FAQ yang tampil di landing page                                                  |

## Persyaratan

- PHP ^8.2
- Composer
- MySQL 8 (atau versi lain yang didukung)
- Node.js (hanya jika memakai Vite; halaman aplikasi memakai CDN Tailwind)

## Instalasi

1. Clone repositori:

    ```bash
    git clone https://github.com/AndiMardiansa/Aplikasi-PPBD.git Aplikasi-PPBD
    cd Aplikasi-PPBD
    ```

2. Install dependensi:

    ```bash
    composer install
    npm install
    ```

3. Salin `.env` dan generate key:

    ```bash
    copy .env.example .env   # Windows
    # atau: cp .env.example .env
    php artisan key:generate
    ```

4. Konfigurasi database pada `.env`:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ppdb_smkn3palu
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Jalankan migrasi dan seeder:

    ```bash
    php artisan migrate --seed
    ```

6. Jalankan server:

    ```bash
    php artisan serve
    ```

    Akses aplikasi di `http://127.0.0.1:8000`.

## Akun Default

Seeder membuat akun admin dan 12 jurusan plus FAQ default:

| Role  | Email             | Password   |
| ----- | ----------------- | ---------- |
| Admin | `admin@gmail.com` | `password` |

> Pengguna biasa dibuat melalui halaman Registrasi. Semua akun baru berperan `user`.

## Struktur Utama

```
app/
├── Http/Controllers/
│   ├── LoginController.php        # Auth (login/register/logout)
│   ├── PPDBController.php         # Flow pendaftaran + dashboard siswa + download dokumen
│   ├── DashboardAdminController.php # Dashboard admin
│   └── Admin/AdminController.php  # Menu admin (calon siswa, status, daftar ulang, siswa, kelas, FAQ)
├── Models/
│   ├── Student.php                # Data pendaftar (store aktif)
│   ├── Jurusan.php
│   ├── User.php
│   ├── Kelas.php                  # Manajemen kelas
│   └── Faq.php                    # FAQ landing page
resources/views/
├── index.blade.php                # Landing page
├── layouts/                       # layout publik, user, admin
├── auth/                          # login & register
├── user/                          # dashboard & profil siswa
├── ppdb/                          # register, biodata, details, calon-siswa, daftar-ulang
├── admin/                         # dashboard, calon-siswa, status, daftar-ulang, siswa, kelas, faq
└── component/                     # bagian landing page (nav, hero, program, faq, dll)
routes/web.php                     # Semua route aplikasi
```

## Catatan Penting

- **Unggahan dokumen** disimpan di `storage/app/public/{pas_foto,surat_lulus,ijazah,kartu_keluarga,akte_kelahiran}` dan **tidak dapat diakses langsung** melalui `/storage/...` (tidak ada symlink `public/storage`). Berkas hanya dapat dilihat melalui route `GET /ppdb/download/{type}/{filename}` (`ppdb.download`, wajib login). Kolom dokumen pada `students` bisa bernilai `NULL` jika upload tidak lengkap.
- **Status pendaftaran** siswa: `pending` / `verified` / `rejected` (bukan `accepted`).
- **Styling** memakai Tailwind CDN; `npm run build` hanya berpengaruh ke halaman `welcome` saja, bukan halaman aplikasi.
- `home.blade.php` dan `database/database.sqlite` merupakan sisa kode/data lama yang tidak dipakai.

## Testing & Style

```bash
php artisan test            # Jalankan test
vendor/bin/pint             # Format/style kode (Laravel Pint)
```

> phpunit.xml tidak menetapkan database terpisah — test memakai database MySQL yang dikonfigurasi di `.env`. Jalankan test terhadap database uji, bukan database produksi.

## Lisensi

Proyek ini dikembangkan oleh Andi Mardiansa untuk keperluan PPDB SMK Negeri 3 Palu.
