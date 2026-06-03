# auth-demo menggunakan laravel authentication dan breeze

oleh: Dede Bintang Gafendi - 2411533010

Proyek ini dibuat sebagai implementasi dari materi **Laravel Authentication & Breeze** pada mata kuliah Pemrograman Web. Fitur yang tersedia meliputi login, register, logout, reset password, manajemen profil, serta halaman admin berbasis kustomisasi role.

---

## Tech Stack

- **PHP** 8.2+
- **Laravel** 12.x / 11.x
- **Laravel Breeze** (Blade stack)
- **MySQL / MariaDB** (via XAMPP)
- **Tailwind CSS** (via Breeze)
- **Node.js & NPM**

---

## Persyaratan Sistem

Pastikan PC kamu sudah menginstal:

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL
- Git

---

## Langkah Menjalankan Project

### 1. Clone Repository

```bash
git clone [https://github.com/DD-Bin/laravel_auth.git](https://github.com/DD-Bin/laravel_auth.git)
cd laravel_auth
```
### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Salin File Environment

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

Langkah ini wajib karena tanpa app key, session dan enkripsi tidak akan berfungsi dengan benar.

### 5. Konfigurasi Database

Buka file `.env` lalu sesuaikan konfigurasi database berikut:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel1
DB_USERNAME=root
DB_PASSWORD=
```

Buat database baru di MySQL dengan nama:

```sql
laravel1
```

### 6. Jalankan Migrasi Database

```bash
php artisan migrate
```

Perintah ini akan membuat seluruh tabel yang dibutuhkan oleh sistem authentication Laravel.

### 7. Install Frontend Dependencies

```bash
npm install
npm run dev
```

Gunakan `npm run dev` selama proses development agar fitur hot-reload dari Vite dapat berjalan.

### 8. Jalankan Development Server

```bash
php artisan serve
```

Aplikasi dapat diakses melalui:

```text
http://localhost:8000
```

atau

```text
http://127.0.0.1:8000
```

---

## Membuat Akun Admin

Setelah melakukan registrasi akun biasa, ubah role akun tersebut menjadi admin menggunakan Laravel Tinker.

Jalankan:

```bash
php artisan tinker
```

Kemudian ketik:

```php
\App\Models\User::where('email', 'emailkamu@gmail.com')->update([
    'role' => 'admin'
]);

exit
```

Ganti `emailkamu@gmail.com` dengan email akun yang ingin dijadikan admin.

Setelah berhasil, akses halaman admin melalui:

```text
http://localhost:8000/admin
```

atau

```text
http://127.0.0.1:8000/admin
```

---

## Fitur yang Tersedia

| Fitur | Route |
|---------|---------|
| Halaman Utama | `/` |
| Register | `/register` |
| Login | `/login` |
| Dashboard | `/dashboard` |
| Edit Profil | `/profile` |
| Lupa Password | `/forgot-password` |
| Halaman Admin | `/admin` *(khusus role admin)* |

---

## Struktur Authentication

Project ini menggunakan Laravel Breeze sebagai dasar sistem autentikasi sehingga sudah mendukung:

- Registrasi pengguna
- Login dan Logout
- Remember Me Session
- Middleware Authentication
- Middleware Guest
- Edit Profil
- Update Password
- Reset Password melalui Email
- Proteksi Route dengan Middleware
- Role-based Access Control (Admin)

---

## Akun yang Digunakan Saat Demo

### Admin

```text
Email    : admin@example.com
Password : password
```

### User

```text
Email    : user@example.com
Password : password
```


