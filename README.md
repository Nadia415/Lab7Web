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
![halaman-about](Praktimum web\About.png)

---

## 📁 Praktikum 2 – Controller, Model, dan View


### 🔨 Langkah Singkat
- Membuat model `ArtikelModel`
- Membuat controller `Artikel`
- Membuat view `index.php`, `detail.php`, dan `admin_index.php`
- Menambahkan field `created_at` untuk tanggal artikel

### 📸 Contoh Halaman Admin
![admin-index](Praktimum web\adminartikel.png)

---

# Praktikum 3 - View Layout dan View Cell  
**Mata Kuliah**: Pemrograman Web 2  
**Universitas Pelita Bangsa**

---
---

## 🛠️ Langkah-Langkah Praktikum

### 1. Membuat Layout Utama (`main.php`)

Mahasiswa membuat file layout utama yang berfungsi sebagai kerangka halaman website.  
Layout ini memuat header, menu navigasi, sidebar, dan footer.

📸 **Screenshot layout utama:**
![Layout Utama](screenshots/layout.png)

---

### 2. Mengubah View agar Menggunakan Layout

View utama seperti `home.php` diubah agar menggunakan layout `main.php` sebagai tampilan dasar.  
Ini dilakukan dengan teknik extend dan section.

📸 **Screenshot view home yang memakai layout:**
![View Home](screenshots/home-view.png)

---

### 3. Membuat View Cell: Artikel Terkini

View Cell digunakan untuk mengambil dan menampilkan data artikel terbaru.  
Komponen ini dapat diletakkan di sidebar atau bagian lain dari layout.

📸 **Screenshot class View Cell `ArtikelTerkini`:**
![Artikel Terkini - Cell](screenshots/view-cell.png)

---

### 4. Menambahkan View Cell ke Layout

View Cell yang dibuat dipanggil di dalam layout sidebar.  
Tujuannya agar artikel terbaru tampil di setiap halaman secara otomatis.

📸 **Screenshot tampilan View Cell di sidebar:**
![Sidebar View Cell](screenshots/sidebar-cell.png)

---

### 5. Membuat View untuk Komponen Artikel

View Cell akan merender view `artikel_terkini.php` yang berisi daftar link artikel.

📸 **Screenshot hasil tampilan komponen artikel:**
![Komponen Artikel](screenshots/artikel-terkini.png)

---

### 6. Menyesuaikan Tampilan Admin

Admin dapat mengelola artikel melalui halaman daftar artikel, tambah, dan edit.

> Karena field `kategori` tidak ada di database, semua pemanggilan `kategori` dihapus.

📸 **Screenshot halaman daftar artikel admin:**
![Admin Index](screenshots/admin-index.png)

📸 **Screenshot form tambah/edit artikel:**
![Form Artikel](screenshots/form-edit.png)

---

## 🧪 Penyelesaian Masalah

### ❌ Error 1: `Undefined array key "kategori"`
**Penyebab**: Field `kategori` tidak tersedia di array data.

**Solusi**: Menghindari akses ke array `kategori`, atau menggunakan operator `??` (sudah tidak digunakan karena kategori dihapus).

---

### ❌ Error 2: `Unknown column 'kategori' in field list`
**Penyebab**: Kolom `kategori` tidak tersedia di tabel `artikel`.

**Solusi**: Semua penggunaan field `kategori` dihapus dari controller, model, dan view.

📸 **Screenshot error dan perbaikannya:**
![Perbaikan Error](screenshots/fix-error.png)

---

## 💬 Jawaban Pertanyaan Praktikum

### 1. **Apa manfaat utama dari View Layout dalam pengembangan aplikasi?**
- Membuat tampilan lebih **konsisten**.
- Memudahkan pengelolaan HTML karena cukup diubah di satu tempat.
- Menyederhanakan proses pengembangan front-end.

---

### 2. **Jelaskan perbedaan antara View Cell dan View biasa.**

| View Biasa     | View Cell                        |
|----------------|----------------------------------|
| Menampilkan halaman penuh | Menampilkan bagian kecil (komponen) |
| Tidak reusable | Dapat digunakan ulang |
| Tidak mengandung logika | Bisa mengandung logika pengambilan data |

---


# Laporan Praktikum 4 - Modul Login (Framework Lanjutan)


📸 **Screenshot Struktur Tabel User**  
![Struktur Tabel User](screenshots/struktur-user.png)

---

### 2. Membuat Model: `UserModel.php`

📸 **Screenshot UserModel**  
![UserModel](screenshots/usermodel.png)

---


📸 **Screenshot Controller User.php**  
![User Controller](screenshots/user-controller.png)

---

### 4. View: `login.php`

`

```php
'auth' => \App\Filters\Auth::class,
```
📸 **Screenshot Konfigurasi Filters.php**  
![Filters Config](screenshots/filters-config.png)

---

### 8. Routing

```php
$routes->get('user/login', 'User::login');
$routes->post('user/login', 'User::login');
$routes->get('user/logout', 'User::logout');
```

📸 **Screenshot Konfigurasi Route**  
![Routes Config](screenshots/routes-config.png)

---

### 9. Proteksi Halaman Admin

```php
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
});
```

📸 **Screenshot Akses Admin**  
![Admin Page](screenshots/admin-page.png)

---

### 10. Uji Coba Login

📸 **Login Berhasil**  
![Login Success](Praktimum web\login.png)  
📸 **Logout dan Redirect**  
![Logout](screenshots/logout.png)


## 💡 Jawaban Pertanyaan

1. **Fungsi Filter**: menyaring akses user agar hanya user yang login yang bisa mengakses halaman admin.
2. **Hash Password**: untuk menjaga keamanan, agar password tidak disimpan dalam bentuk teks biasa.
3. **Logout**: menghancurkan semua session dan mengalihkan ke halaman login.

---

# Laporan Praktikum 6 - Upload & Edit Gambar (CodeIgniter 4)


### 1. 📝 Form Tambah Artikel dengan Upload Gambar  
Form ini digunakan untuk menambahkan artikel baru, termasuk upload gambar. Field `judul`, `isi`, dan `gambar` wajib diisi.

![Form Tambah Artikel](Praktimum web\add1.png)

---

### 2. 📁 Gambar Berhasil Tersimpan di Folder `public/gambar`  
Setelah submit, gambar akan otomatis dipindahkan ke folder `public/gambar/` dengan nama acak.

![Folder Gambar](screenshots/folder_gambar.png)

---

### 3. 🖼️ Gambar Ditampilkan di Halaman Detail Artikel  
Setiap artikel yang memiliki gambar akan menampilkannya secara responsif di halaman detail (`/artikel/slug`). Ukuran gambar dibatasi agar tidak terlalu besar.

![Detail Artikel](screenshots/detail_artikel.png)

---

### 4. ✏️ Tampilan Edit Artikel  
Saat mengedit artikel, gambar lama tetap ditampilkan. Pengguna bisa mengunggah gambar baru untuk mengganti gambar lama.

![Edit Artikel](Praktimum web\edit1.png)



### 5. 🏠 Tampilan Daftar Artikel di Halaman Depan  
Gambar artikel ditampilkan dalam bentuk thumbnail agar halaman terlihat menarik, cepat dimuat, dan tidak terlalu besar.

![Home Artikel](screenshots/home_user.png)

---

### 📌 Penjelasan Tambahan:
- Gambar divalidasi agar hanya `jpg/jpeg/png` dan ukuran maksimal 2MB.
- Gambar yang diganti otomatis menghapus file lama agar tidak menumpuk.
- Tampilan gambar menggunakan `img-fluid` + `max-width` agar tidak melebihi lebar layar.


