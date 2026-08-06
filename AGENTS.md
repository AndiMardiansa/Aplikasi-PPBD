# AGENTS.md

PPDB SMK Negeri 3 Palu — Laravel 12 (PHP ^8.2, MySQL 8) new-student admission app. Hand-rolled auth (no Breeze/Fortify), Blade views, Indonesian UI text.

## Commands

- Dev: `php artisan serve` (or `composer dev` for serve + queue:listen + pail + vite concurrently). `npm run dev` is only needed for Vite.
- Setup after clone: `composer install && npm install`, copy `.env`, `php artisan key:generate`, `php artisan migrate --seed`.
- Seeding: `php artisan db:seed` creates 12 jurusans + default FAQs + an admin at `admin@gmail.com` / `password`.
- Tests: `php artisan test`. phpunit.xml leaves `DB_CONNECTION`/`DB_DATABASE` commented out, so tests hit the real MySQL database `ppdb_smkn3palu` — run them against a throwaway DB or they will touch live data.
- Lint/style: Laravel Pint (`vendor/bin/pint`), not run automatically.

## Database

- DB is MySQL 8 (`DB_CONNECTION=mysql`), database `ppdb_smkn3palu`, root/no password (Laragon defaults). MySQL server must be running (`C:/laragon/bin/mysql/mysql-8.0.30-winx64`); on this machine it is started manually with `mysqld --defaults-file=.../my.ini`, not via `composer dev`.
- The old SQLite file `database/database.sqlite` still exists as a backup but is no longer used by the app.

## Gotchas (verified, easy to trip on)

- **`role` is not mass-assignable.** `User::$fillable` is only `name/email/password`, but `LoginController::registerpost` and `DatabaseSeeder` pass `role` to `User::create()`. It is silently dropped → the seeded "admin" and every new registration get the DB default `role='user'`. Don't add admin features that depend on role being set this way; fix `$fillable`/`$guarded` first.
- **No role middleware exists.** `home_admin` route has no `auth` middleware; `/admin/dashboard` has `auth` but no admin check. Admin vs user is decided only at login redirect (`LoginController::loginpost`). Gate admin routes explicitly.
- **Two parallel registration stores.** `students` is the ACTIVE store (used by `PPDBController` register flow + `DashboardAdminController`). `ppdb_registrations` is legacy/duplicate (only used by `BiodataController`, which is imported in `routes/web.php` but never routed; `PPDBRegistration` model + `Jurusan::hasMany(PPDBRegistration)` still reference it). Status enums differ: `students` = `pending|verified|rejected`, `ppdb_registrations` = `pending|accepted|rejected`. Write new code against `Student`.
- **Uploads are not web-accessible.** Files are stored in `storage/app/public/{pas_foto,surat_lulus,ijazah,kartu_keluarga,akte_kelahiran}` and served via `PPDBController::downloadDocument` (reads via `storage_path()`). Route: `GET /ppdb/download/{type}/{filename}` (`ppdb.download`, auth-gated) — this is the ONLY way to view uploaded files. There is NO `public/storage` symlink, so `/storage/...` URLs 403/404; never link to `storage/...` in views. `ppdb/biodata.blade.php` "Lihat" buttons use `route('ppdb.download', ...)` with the stored relative path split into `type` + `basename()`. Note: `Student` document columns can be `NULL` (incomplete uploads) — guard with `@if($registration->surat_lulus)` etc., because `route()` throws `UrlGenerationException` for empty params.
- **Login/register validation uses plain `email`** — the `:dns` modifier was removed (it did a DNS lookup on every submit, slowing auth and failing offline). Don't re-add `email:dns`.
- **Styling is Tailwind v3 CDN, not the Vite build.** App views use `https://cdn.tailwindcss.com/3.2.0` + Alpine.js CDN, with custom CSS in `resources/views/component/*-styles.blade.php`. The Tailwind v4 Vite pipeline (`resources/css/app.css`) is wired only to `welcome.blade.php` — `npm run build` does not affect app pages.
- **Sidebars are off-canvas on mobile.** User pages (`layouts/user-menu.blade.php`) slide the sidebar in via an Alpine global store registered in `layouts/dashboard.blade.php` (`Alpine.store('sidebar', { open: false })`); content wrappers use `md:ml-64` and headers have a hamburger that toggles `$store.sidebar.open`. The admin layout (`layouts/admin.blade.php`) uses the same fixed/off-canvas pattern with `toggleAdminSidebar()`. Don't reintroduce fixed `w-64`/`ml-64` without the `md:` prefix.
- Session flash messages are SweetAlert payloads passed as `->with('swal', [...])` arrays.

## Performance notes

- **Jurusan images are pre-compressed.** `public/img/jurusan/*` were resized to 800px/quality-70 (GD) — total dropped from ~25 MB to ~600 KB. Keep new jurusan images small; they're shown at `h-[200px]`.
- **Landing page** (`/` → `index.blade.php` → `component/program.blade.php`) has all 10 `<img>` set to `loading="lazy"` and uses `asset('img/...')` paths. `home.blade.php` (1832 lines) is a duplicate that is NOT routed — dead code.
- **Admin dashboard** (`DashboardAdminController::dashboard`) uses 4 queries: 2 COUNTs, 1 GROUP BY status, 1 LEFT JOIN jurusans↔students. No N+1.
- **`PPDBController::showCalonSiswa`** eager-loads only `jurusan:id,nama_jurusan` and selects only needed columns. `calon-siswa.blade.php` badge uses `verified` (matches `students` enum), not `accepted`.
- **`AppServiceProvider::boot`** calls `Model::preventLazyLoading()` in non-production to catch N+1 queries early.
- **Dead code to avoid trusting:** `home.blade.php` (unrouted), `app/Http/Controllers/Admin/FAQController.php` (references non-existent `App\Models\FAQ`, unrouted — the real FAQ system lives in `Admin\AdminController` with the `App\Models\Faq` model), `app/Http/Controllers/JurusanController.php` (empty methods, unrouted), legacy `ppdb_registrations` store.
- **Admin panel menu** (sidebar in `layouts/admin.blade.php`, Tailwind v2 CDN): Beranda=`admin.dashboard`, Calon siswa=`admin.calon-siswa*`, Status=`admin.status`, Daftar ulang=`admin.daftar-ulang*`, Siswa=`admin.siswa` (only `status=verified`), Kelas=`admin.kelas*` CRUD, FAQ=`admin.faq*` CRUD. All wired via `App\Http\Controllers\Admin\AdminController`. New tables: `faqs` (question/answer/is_active/order), `kelas` (nama_kelas/jurusan_id/kuota), and `students.daftar_ulang` enum `pending|paid|completed`. The landing FAQ section (`component/faq.blade.php`) renders `$faqs` passed by the `/` route (`Faq::where('is_active', true)`), falling back to static items when empty. `layouts/admin.blade.php` shows `session('success'/'error')` flashes in the content area.
- **Landing nav anchors** (`component/nav.blade.php`) point to section IDs on the same page: `#beranda`, `#jurusan`, `#persyaratan`, `#cara-daftar`, `#faq`. The nav uses Alpine (`x-data="{ open: false }"`), NOT the legacy `#mobile-menu`/`#mobile-menu-button` IDs, and the landing page has no `<header>` element. `component/scripts.blade.php` guards those legacy IDs and the sticky-header block with `if (mobileMenuButton && mobileMenu) { ... }` / `if (header) { ... }` — keep those guards, otherwise its `DOMContentLoaded` handler throws and smooth scrolling breaks. Smooth scroll offset is `getBoundingClientRect().top + pageYOffset - 80` (80px = fixed nav height).

