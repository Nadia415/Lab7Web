# Praktikum 1: PHP Framework (CodeIgniter 4)

**Nama**: Nadia Permata Putri\
**NIM**: 312310432\
**Kelas**: TI-[isi jika ada]

---

## Tujuan

1. Memahami konsep dasar Framework.
2. Memahami konsep dasar MVC (Model-View-Controller).
3. Mampu membuat program sederhana menggunakan CodeIgniter 4.

---

## Langkah-Langkah Praktikum

### 1. Persiapan Awal

- Aktifkan ekstensi PHP melalui `php.ini` seperti: `php-json`, `php-mysqlnd`, `php-xml`, `php-intl`.
- Simpan dan restart Apache.

### 2. Instalasi CodeIgniter 4 (Manual)

- Unduh dari [codeigniter.com](https://codeigniter.com/download)
- Ekstrak dan rename folder ke `ci4`
- Akses via: `http://localhost/lab11_ci/ci4/public`

### 3. Menjalankan CLI

- Akses terminal dan jalankan perintah:
  ```bash
  php spark
  ```
- Digunakan untuk membuat file, menjalankan server, dll.

### 4. Mengaktifkan Debugging Mode

- Rename file `env` menjadi `.env`
- Set konfigurasi `CI_ENVIRONMENT = development`

### 5. Struktur Direktori CodeIgniter 4

- Fokus folder:
  - `app/` → tempat membuat aplikasi
  - `public/` → menyimpan file akses publik (css, js, gambar)

### 6. Konsep MVC di CodeIgniter 4

- **Model**: mengelola data
- **View**: menampilkan tampilan UI
- **Controller**: menghubungkan model dan view

### 7. Routing dan Controller

- Tambah route baru di `app/Config/Routes.php`
  ```php
  $routes->get('/about', 'Page::about');
  ```
- Jalankan `php spark routes` untuk cek route

### 8. Membuat Controller Page

- Buat file `Page.php` dalam `app/Controllers`
- Tambahkan method seperti `about()`, `contact()`, `faqs()`

### 9. Auto Routing

- Aktifkan jika ingin mengakses controller/method tanpa mendefinisikan route.

### 10. Membuat View

- Buat file view seperti `about.php` pada folder `app/Views`
- Gunakan `return view('about')` pada method controller

### 11. Membuat Layout Web

- Buat `template/header.php` dan `template/footer.php`
- Gunakan `<?= $this->include('template/header') ?>` dan `footer()` dalam view utama

---

## Dokumentasi Hasil
1. Tampilan Halaman About

![about](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/About.png?raw=true)

2. tampilan halaman Pagetos
![page.tos](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/Page%20tos.png?raw=true)



---

## 🔚 Kesimpulan

Pada praktikum ini, kita telah mempelajari struktur dasar CodeIgniter 4, penggunaan MVC, pembuatan route dan controller, serta cara membuat layout web dengan view. Praktikum ini merupakan dasar penting sebelum membangun aplikasi web dinamis.


---
# Praktikum 2: CRUD Artikel dengan CodeIgniter 4
## Langkah Singkat
- Membuat model `ArtikelModel`
- Membuat controller `Artikel`
- Membuat view `index.php`, `detail.php`, dan `admin_index.php`
- Menambahkan field `created_at` untuk tanggal artikel
## Tujuan

1. Memahami konsep dasar Model dan proses CRUD (Create, Read, Update, Delete).
2. Mengimplementasikan CRUD menggunakan MVC pada CodeIgniter 4.
3. Menampilkan, menambah, mengedit, dan menghapus data artikel dari database.

---

## Hasil CRUD Artikel

### 1. Tampilan Daftar Artikel  
![Tampilan Daftar Artikel](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/Artikel%20pertama.png?raw=true)  
**Penjelasan**: Gambar ini menunjukkan tampilan daftar semua artikel yang telah disimpan di database. Halaman ini diakses oleh pengguna umum dan dihasilkan oleh method `index()` pada controller `Artikel`. Data artikel ditarik menggunakan model `ArtikelModel::findAll()` dan ditampilkan melalui view `artikel/index.php`.

---

### 2. Tampilan Detail Artikel  
![Tampilan Detail Artikel](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/Detail.png?raw=true)  
**Penjelasan**: Tampilan detail artikel ini muncul saat pengguna mengklik judul artikel pada halaman daftar. Konten lengkap artikel ditampilkan berdasarkan `slug`. Halaman ini diatur oleh method `view($slug)` pada controller `Artikel` dan menggunakan view `artikel/detail.php`.

---

### 3. Tampilan Admin Index  
![Tampilan Admin Index](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/adminartikel.png?raw=true)  
**Penjelasan**: Halaman ini adalah tampilan khusus untuk admin yang menampilkan daftar artikel dalam bentuk tabel. Dilengkapi dengan tombol untuk mengedit (`Edit`) dan menghapus (`Hapus`) artikel. Halaman ini dibuat melalui method `admin_index()` pada controller `Artikel` dan menggunakan view `artikel/admin_index.php`.

---

### 4. Form Tambah Artikel  
![Form Artikel](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/add.png?raw=true)
**Penjelasan**: Ini adalah form input untuk menambahkan artikel baru ke sistem. Form ini memproses input `judul` dan `isi` dari user. Setelah validasi berhasil, data akan disimpan ke database menggunakan method `add()` pada controller `Artikel`, dan ditangani oleh view `artikel/form_add.php`.

---

### 5. Form Edit Artikel  
![Form Artikel](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/edit.png?raw=true)  
**Penjelasan**: Form ini digunakan oleh admin untuk memperbarui artikel yang sudah ada. Data lama ditampilkan terlebih dahulu, lalu bisa diperbarui dan dikirim kembali. Method `edit($id)` pada controller `Artikel` menangani proses ini, dan form ditampilkan menggunakan view `artikel/form_edit.php`.

---
# Praktikum 3: View Layout dan View Cell


---

## Tujuan

1. Memahami konsep View Layout di CodeIgniter 4.
2. Menggunakan View Layout untuk membuat template tampilan.
3. Memahami dan mengimplementasikan View Cell.
4. Menggunakan View Cell untuk menampilkan komponen secara modular.

---

## Langkah-Langkah Praktikum

### 3. Membuat View Konten Halaman

Buat file view seperti `home.php`\
Gunakan `extend()` dan `section()` agar isi halaman ditampilkan ke layout:

```php
<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- Konten di sini -->
<?= $this->endSection() ?>
```

---

### 4. Membuat Cell ArtikelTerkini

Buat file `app/Cells/ArtikelTerkini.php`\
Tambahkan method `render()` yang mengambil data dari `ArtikelModel`

---

### 5. Membuat View untuk Cell

Buat file `app/Views/components/artikel_terkini.php`\
Tambahkan list artikel terbaru:

```php
<ul>
<?php foreach ($artikel as $row): ?>
<li><a href="<?= base_url('/artikel/' . $row['slug']) ?>"><?= $row['judul'] ?></a></li>
<?php endforeach; ?>
</ul>
```

---

### 6. Uji Coba di Browser

Jalankan aplikasi di browser via [http://localhost:8080](http://localhost:8080)\
Pastikan layout tampil dengan konten dan artikel terkini di sidebar

---

### Tampilan Layout Utama
![cell](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/cells.png?raw=true)

**Penjelasan**: Layout ini memuat struktur dasar HTML termasuk bagian `content` yang akan diisi oleh view lain, serta pemanggilan sidebar dinamis dengan `view_cell()`.

---
# Praktikum 4: Framework Lanjutan (Modul Login)

---

## Langkah-Langkah Praktikum

### 1. Membuat Tabel User
Membuat tabel `user` di database menggunakan query SQL untuk menyimpan data pengguna, termasuk `username`, `useremail`, dan `userpassword`.

### 2. Membuat Model UserModel
Buat file `UserModel.php` di folder `app/Models` untuk menangani interaksi antara aplikasi dengan tabel `user`. Model ini akan digunakan untuk proses login dan pengelolaan user.

### 3. Membuat Controller User
Buat file `User.php` di folder `app/Controllers` untuk mengatur logika login, logout, dan pengecekan user yang masuk. Fungsi `login()` digunakan untuk validasi dan autentikasi user.

### 4. Membuat View Login
Buat tampilan login di `app/Views/user/login.php` yang berisi form input email dan password. Tambahkan juga alert untuk menampilkan pesan kesalahan jika login gagal.

### 5. Membuat Seeder User
Buat `UserSeeder` untuk menambahkan data user default ke dalam tabel `user`. Jalankan seeder ini menggunakan perintah `php spark db:seed UserSeeder` agar data bisa digunakan saat testing login.

### 6. Menambahkan Filter Auth
Buat file `Auth.php` di folder `app/Filters` untuk membatasi akses ke halaman admin. Jika user belum login, maka akan diarahkan ke halaman login. Tambahkan filter ini ke konfigurasi di `app/Config/Filters.php`.

---

## Dokumentasi Hasil

### 1. Tampilan Form Login  
![Login Form](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/login.png?raw=true)  
[http://localhost:8080/user/login](http://localhost:8080/user/login)  
**Penjelasan**: Gambar ini menunjukkan tampilan form login yang terdiri dari input email dan password. Jika data yang dimasukkan benar, maka pengguna dapat masuk ke halaman admin. Jika salah, akan muncul pesan error.

---

### 2. Akses Admin Tanpa Login  
![Redirect ke Login](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/id_kategory.png?raw=true)  
[http://localhost:8080/admin/artikel](http://localhost:8080/admin/artikel)  
**Penjelasan**: Jika pengguna belum login dan mencoba mengakses halaman admin, maka sistem akan otomatis mengarahkan ke halaman login berkat filter `auth`. Ini memastikan hanya user yang telah terautentikasi yang dapat mengakses halaman admin.

---

## Kesimpulan

Modul ini menjelaskan proses pembuatan sistem login dasar menggunakan CodeIgniter 4. Dengan form login, autentikasi user, dan filter akses, aplikasi dapat menjaga keamanan halaman admin dari pengguna yang belum login.

---

# Praktikum 5: Pagination dan Pencarian

---

## Tujuan

1. Memahami konsep dasar Pagination.
2. Memahami konsep dasar Pencarian.
3. Membuat fitur Paging dan Pencarian menggunakan CodeIgniter 4.

---

## 🔧 Langkah-Langkah Praktikum

### 1. Menambahkan Fitur Pagination
- Buka controller `Artikel.php`.
- Pada method `admin_index()`, tambahkan fungsi `$model->paginate(10)` untuk membatasi jumlah data yang ditampilkan per halaman.
- Tambahkan juga `$model->pager` untuk mengaktifkan pagination.

### 2. Menampilkan Link Pagination di View
- Buka file `app/Views/artikel/admin_index.php`.
- Tambahkan kode `<?= $pager->links(); ?>` di bawah tabel untuk menampilkan navigasi halaman.

### 3. Mengisi Data Artikel Lebih Banyak
- Tambahkan lebih banyak data artikel agar pagination bisa terlihat jelas saat diuji di browser.

### 4. Menambahkan Fitur Pencarian
- Di controller `Artikel.php`, pada method `admin_index()`, ambil input dari URL `?q=...` dan gunakan `$model->like('judul', $q)` untuk filter pencarian berdasarkan judul artikel.

### 5. Menambahkan Form Pencarian di View
- Tambahkan form pencarian di atas tabel pada `admin_index.php`.
- Tambahkan juga `<?= $pager->only(['q'])->links(); ?>` agar hasil pencarian bisa tetap dipagination-kan.

---

## Dokumentasi Hasil

### 1. Tampilan Pagination  
![Tampilan Pagination](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/page.png?raw=true)  
**Penjelasan**: Tampilan ini menunjukkan data artikel dibatasi 10 per halaman, dan navigasi halaman ditampilkan di bawah tabel menggunakan `paginate()` dan `pager->links()`.

---

### 2. Tampilan Fitur Pencarian  
![Tampilan Pencarian](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/cari.png?raw=true)  
**Penjelasan**: Pengguna dapat mencari artikel berdasarkan judul. Hasil pencarian tetap dipagination-kan agar tidak menampilkan semua data sekaligus.

---

## Kesimpulan

Pada praktikum ini, kita berhasil menerapkan fitur pagination dan pencarian dengan memanfaatkan library bawaan CodeIgniter 4. Hal ini membuat aplikasi lebih efisien dan ramah pengguna dalam mengelola data yang besar.

---
# Praktikum 6: Upload File Gambar

---

## Tujuan

1. Mahasiswa mampu memahami konsep dasar File Upload.
2. Mahasiswa mampu membuat fitur upload gambar menggunakan Framework CodeIgniter 4.

---

## 🔧 Langkah-Langkah Praktikum

### 1. Menambahkan Fitur Upload Gambar ke Artikel
- Tambahkan pengambilan file gambar menggunakan `$this->request->getFile('gambar')` di controller `Artikel.php`.
- File gambar disimpan ke folder `public/gambar` menggunakan fungsi `move()`.
- Nama file kemudian disimpan ke dalam database melalui field `gambar`.

### 2. Memodifikasi Form Tambah Artikel
- Tambahkan elemen input `type="file"` untuk upload gambar di view `form_add.php`.
- Pastikan form menggunakan atribut `enctype="multipart/form-data"` agar upload berjalan dengan benar.

---

## 📷 Dokumentasi Hasil

### 1. Form Upload Gambar  
![Upload Form](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/add1.png?raw=true)  
**Penjelasan**: Tampilan form tambah artikel yang sudah dilengkapi input untuk upload gambar.

---


## 🔚 Kesimpulan

Praktikum ini menambahkan fitur upload gambar ke dalam sistem artikel. Dengan ini, setiap artikel dapat menyertakan gambar yang diunggah oleh admin, meningkatkan kualitas dan daya tarik konten yang ditampilkan.

---

# Praktikum 7: Relasi Tabel dan Query Builder

---

## Tujuan

1. Memahami konsep relasi antar tabel dalam database.
2. Mengimplementasikan relasi One-to-Many.
3. Menggunakan Query Builder untuk join tabel.
4. Menampilkan data dari tabel yang berelasi.

---

## Langkah-Langkah Praktikum

### 1. Membuat Tabel Kategori
Buat tabel `kategori` dengan field: `id_kategori`, `nama_kategori`, dan `slug_kategori`. Tabel ini digunakan untuk menyimpan daftar kategori artikel.

### 2. Menambahkan Relasi ke Tabel Artikel
Tambahkan kolom `id_kategori` di tabel `artikel` sebagai foreign key agar setiap artikel dapat terhubung ke salah satu kategori.

### 3. Membuat Model KategoriModel
Model ini digunakan untuk mengambil data dari tabel `kategori` dan digunakan saat menampilkan, menambah, dan mengedit artikel.

### 4. Memodifikasi ArtikelModel
Tambahkan method `getArtikelDenganKategori()` untuk mengambil artikel beserta nama kategori menggunakan join.

### 5. Memodifikasi Controller Artikel
- Pada method `index()` dan `admin_index()`, tampilkan artikel beserta nama kategorinya.
- Tambahkan dropdown kategori saat menambah dan mengedit artikel.
- Tambahkan fitur pencarian berdasarkan kategori dan judul.

### 6. Memodifikasi View
- Di `index.php`, tampilkan nama kategori pada setiap artikel.
- Di `admin_index.php`, tambahkan dropdown filter kategori.
- Di `form_add.php` dan `form_edit.php`, tambahkan pilihan kategori agar admin bisa memilih saat mengisi artikel.

### 7. Testing
Lakukan uji coba untuk:
- Menampilkan artikel beserta kategori.
- Menambahkan artikel dengan kategori.
- Mengedit dan menghapus artikel.

---

## Dokumentasi Hasil

### 1. Tampilan Artikel dan Kategori di Halaman Utama  
![Tampilan Index Artikel](https://github.com/Nadia415/Lab7Web/blob/main/Praktimum%20web/id_kategory.png?raw=true)  
**Penjelasan**: Artikel ditampilkan bersama dengan nama kategori yang berelasi, Admin dapat memfilter artikel berdasarkan kategori. Setiap baris menampilkan judul, isi, status, dan kategori.

---

### 3. Form Tambah Artikel dengan Dropdown Kategori  
![Form Tambah Artikel](screenshots/form-tambah-kategori.png)  
**Penjelasan**: Saat menambah artikel, admin dapat memilih kategori dari dropdown yang berisi semua kategori dari database.

---

### 4. Form Edit Artikel dengan Dropdown Kategori  
![Form Edit Artikel](screenshots/form-edit-kategori.png)  
**Penjelasan**: Form edit artikel memuat data artikel yang sedang diedit, termasuk kategori yang dapat diubah melalui dropdown.

---

## 🔚 Kesimpulan

Pada praktikum ini, kita berhasil menerapkan relasi one-to-many antar tabel dengan menggunakan foreign key `id_kategori`. Selain itu, kita menampilkan data relasi melalui Query Builder join dan berhasil menambahkan fitur filter dan pengelolaan kategori dalam artikel.

---


