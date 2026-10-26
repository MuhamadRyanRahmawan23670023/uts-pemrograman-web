# UTS Pemrograman Web — Laravel Blade Layouting

Implementasi dua template HTML (Admin **Studio** dan Landing **Fitness**) menjadi aplikasi Laravel dengan pemisahan layout, controller, dan routing.

## Menjalankan Aplikasi

Prasyarat: PHP >= 8.2 dan Composer.

```bash
git clone <url-repository> uts
cd uts
composer install
cp .env.example .env      # Windows: copy .env.example .env
php artisan key:generate
php artisan serve
```

Buka `http://127.0.0.1:8000`.

Halaman yang tersedia:

- Landing: `/`, `/about`, `/course`, `/blog`, `/feature`, `/contact`
- Admin: `/admin`, `/admin/dashboard`, `/admin/calendar`, `/admin/form-elements`, `/admin/table-plugins`, `/admin/ui-modal-notification`, `/admin/login`

> Aplikasi ini hanya menampilkan halaman statis, jadi tidak perlu membuat database atau menjalankan migration.

## Struktur Layout

| Template | File layout utama | Partial |
|---|---|---|
| Admin | `resources/views/layouts/admin.blade.php` | `layouts/partials/admin/header.blade.php`, `sidebar.blade.php`, `footer.blade.php`, `scripts.blade.php` |
| Landing | `resources/views/layouts/landing.blade.php` | `layouts/partials/landing/header.blade.php`, `footer.blade.php`, `scripts.blade.php` |

Setiap layout memisahkan:

- **Head** — meta, title, CSS (`@stack('styles')`)
- **Header/Menubar** — `@include(...)`
- **Main Content** — `@yield('content')`
- **Footer** — `@include(...)`
- **Scripts** — `@include(...)` + `@stack('scripts')`

Semua halaman individual mengisi `@section('content')` pada layout masing-masing.

## Routing, Controller, dan View

### Admin — `AdminController`

| URL | Method Controller | View |
|---|---|---|
| `/admin` | `index()` | `admin.dashboard` |
| `/admin/dashboard` | `dashboard()` | `admin.dashboard` |
| `/admin/calendar` | `calendar()` | `admin.calendar` |
| `/admin/form-elements` | `formElements()` | `admin.form_elements` |
| `/admin/table-plugins` | `tablePlugins()` | `admin.table_plugins` |
| `/admin/ui-modal-notification` | `uiModal()` | `admin.ui_modal_notification` |
| `/admin/login` | `login()` | `admin.page_login` |

### Landing — `LandingController`

| URL | Method Controller | View |
|---|---|---|
| `/` | `index()` | `landing.index` |
| `/about` | `about()` | `landing.about` |
| `/blog` | `blog()` | `landing.blog` |
| `/contact` | `contact()` | `landing.contact` |
| `/course` | `course()` | `landing.course` |
| `/feature` | `feature()` | `landing.feature` |

## Aset

- Aset admin: `public/admin-assets/` (diakses melalui `asset('admin-assets/...')`)
- Aset landing: `public/landing/` (diakses melalui `asset('landing/...')`)

Direktori aset admin sengaja dinamai `admin-assets` agar tidak bentrok dengan route `/admin`.
