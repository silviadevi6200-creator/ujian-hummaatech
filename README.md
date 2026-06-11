# Sistem Manajemen Rental Kamera

Project Ujikom Laravel - Sistem Manajemen Rental Kamera

## Deskripsi

Sistem Manajemen Rental Kamera adalah aplikasi berbasis Laravel yang digunakan untuk mengelola proses penyewaan kamera dan perlengkapan fotografi.

Fitur utama:

* Login Admin
* Kelola Kategori Alat
* Kelola Data Alat
* Kelola Data Pelanggan
* Kelola Data Peminjaman
* Kelola Data Pengembalian
* Dashboard Statistik

---

## Teknologi

* Laravel 12
* PHP 8
* MySQL
* Bootstrap 5
* Blade Template

---

## Database

### Tabel Users

* id
* name
* email
* password
* role

### Tabel Kategori Alat

* id
* nama_kategori
* keterangan

### Tabel Alat

* id
* kategori_id
* nama_alat
* merk
* stok
* harga_sewa
* kondisi

### Tabel Pelanggan

* id
* nama
* alamat
* no_hp
* email

### Tabel Peminjaman

* id
* pelanggan_id
* alat_id
* tanggal_pinjam
* tanggal_kembali
* jumlah_hari
* status

### Tabel Pengembalian

* id
* peminjaman_id
* tanggal_pengembalian
* denda
* keterangan

---

## Akun Login

Email:
[admin@gmail.com](mailto:admin@gmail.com)

Password:
admin123

---

## Cara Menjalankan

1. Clone repository
2. Jalankan composer install
3. Copy file .env
4. Buat database MySQL
5. Jalankan migration

php artisan migrate

6. Jalankan server

php artisan serve

---

## Developer

Nama : Silvia Devi

Project : Ujikom Laravel Sistem Manajemen Rental Kamera
