# Website Pengumuman Open Recruitment FOSTI UMS

Website ini digunakan untuk meilhat peserta Open Recruitment FOSTI UMS yang lolos seleksi dan diterima sebagai anggota baru FOSTI UMS.

## How to use
1. Install depedency using composer
```sh
composer install
```
2. Copy .env.example to .env
```sh
cp .env.example .env
```
3. Edit .env file on configuration database
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=oprec-announcement
DB_USERNAME=root
DB_PASSWORD=
```
4. Generate application key
```sh
php artisan key:generate
```
5. Run database migration
```sh
php artisan migrate
```
\
***Enjoyy ...***
