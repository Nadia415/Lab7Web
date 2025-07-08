# 🌐 Praktikum Pemrograman Web 2 – CodeIgniter 4


## 📁 Praktikum 1 – Pengenalan CI4 dan Routing Dasar

### 🔧 Tujuan
- Memahami struktur direktori CodeIgniter 4
- Membuat route statis dan dinamis
- Menampilkan halaman menggunakan controller dan view

### 🔨 Langkah Singkat
- Membuat controller `Page.php`
- Membuat view untuk `about`, `contact`, `faqs`
- Menambahkan route di `app/Config/Routes.php`

### 📸 Contoh Tampilan
![halaman-about](screenshots/p1_about.png)

---

## 📁 Praktikum 2 – Controller, Model, dan View

### 🔧 Tujuan
- Menggunakan Model untuk akses data artikel
- Menampilkan daftar artikel dan detail artikel
- Membuat tampilan admin dengan Bootstrap

### 🔨 Langkah Singkat
- Membuat model `ArtikelModel`
- Membuat controller `Artikel`
- Membuat view `index.php`, `detail.php`, dan `admin_index.php`
- Menambahkan field `created_at` untuk tanggal artikel

### 📸 Contoh Halaman Admin
![admin-index](screenshots/p2_admin_index.png)

---

## 📁 Praktikum 3 – View Layout dan View Cell

### 🔧 Tujuan
- Menggunakan View Layout agar tampilan konsisten
- Membuat View Cell untuk artikel terkini
- Menampilkan artikel terbaru di sidebar

### 🔨 Langkah Singkat
- Membuat file layout `main.php`
- Menggunakan `extend()` dan `section()` pada view
- Membuat Cell `ArtikelTerkini`
- Menambahkan filter `id_kategori` untuk artikel

### 🛠 Solusi Error
Jika muncul:
> `Unknown column 'kategori' in where clause`  
Maka ubah query menjadi:
```php
$query->where('id_kategori', $kategori);
