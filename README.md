# Praktikum 1 – PHP Framework (CodeIgniter 4)

## Mata Kuliah
Pemrograman Web 2

## Nama
Nadia Permata Putri

## NIM
312310432

## Kelas
TI.23.C2


---

## 🛠 Persiapan dan Instalasi

1. Aktifkan ekstensi PHP di `php.ini`:
   - `php-json`, `php-mysqlnd`, `php-xml`, `php-intl`
2. Unduh CodeIgniter 4 dari https://codeigniter.com
3. Ekstrak ke `htdocs/lab11_ci/ci4`
4. Ubah file `env` menjadi `.env`, lalu ubah:
   ```env
   CI_ENVIRONMENT = development
   ```
5. Jalankan server lokal dengan perintah:
   ```bash
   php spark serve
   ```
6. Akses melalui browser: `http://localhost:8080`

---


## 🌐 Hasil Uji Coba di Localhost

Setelah menjalankan server dengan `php spark serve`, berikut adalah hasil tampilan dari masing-masing halaman:

### ✅ Halaman Home
- 📍 URL: `/`
- Menampilkan halaman default bawaan dari CodeIgniter (`Home::index()`).

### ✅ Halaman About
- 📍 URL: `/about`
- Menampilkan informasi "Tentang Kami".
- Menggunakan layout lengkap dengan `header`, `navigasi`, `konten`, `sidebar`, dan `footer`.

### ✅ Halaman Contact
- 📍 URL: `/contact`
- Menampilkan informasi kontak perusahaan atau pengelola situs.

### ✅ Halaman FAQs
- 📍 URL: `/faqs`
- Menampilkan daftar pertanyaan umum (Frequently Asked Questions).

### ✅ Halaman Artikel
- 📍 URL: `/artikel`
- Menampilkan konten daftar artikel (dummy content).

### ✅ Halaman Term of Services
- 📍 URL: `/page/tos`
- Menampilkan syarat dan ketentuan layanan.

---

### 🧱 Struktur Tampilan Layout



```

Layout ini dibangun menggunakan:
- Template: `header.php` dan `footer.php`
- CSS eksternal: `public/style.css`

---

### 🧠 Kesimpulan

- Semua halaman berhasil ditampilkan sesuai dengan routing yang dibuat.
- Struktur MVC berhasil diterapkan dengan benar.
- Layout dan tampilan halaman rapi serta konsisten.
- Aplikasi berjalan baik di `localhost` menggunakan CodeIgniter 4.
