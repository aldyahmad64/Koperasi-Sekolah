<p align="center"><a href="https://koperasi.hardiyanti.site" target="_blank"><img src="/public/storage/img/web/faficon.png" width="200" alt="Laravel Logo"></a></p>

# Koperasi Sekolah

## Deskripsi

Koperasi Sekolah adalah aplikasi berbasis web yang dikembangkan menggunakan **Laravel 11** dan **Filament 3**. Aplikasi ini dirancang untuk mempermudah pengelolaan koperasi sekolah, mencakup pencatatan anggota, simpanan, pinjaman, angsuran, serta laporan keuangan koperasi dan anggota.

## Fitur Utama

### 1. Manajemen Anggota

-   Registrasi anggota koperasi.
-   Pengelolaan data anggota (edit, hapus, lihat detail).
-   Klasifikasi anggota berdasarkan status dan kategori tertentu.

### 2. Simpanan

-   Pencatatan transaksi simpanan anggota.
-   Cetak nota bukti simpanan.
-   Laporan saldo simpanan per anggota.

### 3. Pinjaman

-   Pengajuan pinjaman oleh anggota.
-   Persetujuan atau penolakan pinjaman.
-   Cetak nota bukti pinjaman.
-   Pencatatan jadwal angsuran otomatis.

### 4. Angsuran

-   Pencatatan pembayaran angsuran pinjaman.
-   Perhitungan bunga dan sisa pinjaman secara otomatis.
-   Cetak nota bukti angsuran.

### 5. Laporan Keuangan

-   Laporan SHU (Sisa Hasil Usaha) koperasi.
-   Laporan SHU per anggota.
-   Rekapitulasi transaksi simpanan dan pinjaman.
-   Laporan kas dan neraca keuangan koperasi.

## Teknologi yang Digunakan

-   **Backend:** Laravel 11
-   **Frontend:** Filament 3
-   **Database:** MySQL / PostgreSQL
-   **Autentikasi:** Laravel Sanctum
-   **PDF Generator:** Laravel DomPDF / SnappyPDF
-   **Chart & Laporan:** Laravel Excel, Chart.js

## Instalasi

1. Clone repository ini:
    ```sh
    git clone https://github.com/aldyahmad64/Koperasi-Sekolah.git
    cd Koperasi-Sekolah
    ```
2. Install dependensi Laravel:
    ```sh
    composer install
    ```
3. Copy file `.env` dan konfigurasi database:
    ```sh
    cp .env.example .env
    ```
4. Generate key aplikasi:
    ```sh
    php artisan key:generate
    ```
5. Jalankan migrasi dan seeder:
    ```sh
    php artisan migrate --seed
    ```
6. Jalankan server aplikasi:
    ```sh
    php artisan serve
    ```

## Akun Default

-   **Superadmin:**
    -   Email: `superadmin@admin.com`
    -   Password: `superadmin`

## Penggunaan

1. **Login** sebagai admin untuk mengelola koperasi.
2. Tambahkan anggota baru melalui menu **Manajemen Anggota**.
3. Lakukan transaksi simpanan dan pinjaman melalui menu **Simpanan** dan **Pinjaman**.
4. Kelola angsuran dan cetak nota pembayaran melalui menu **Angsuran**.
5. Cek laporan keuangan melalui menu **Laporan**.

## Lisensi

Aplikasi ini dirilis di bawah lisensi **MIT**.

---

**Dibuat dengan menggunakan Laravel 11 & Filament 3**
