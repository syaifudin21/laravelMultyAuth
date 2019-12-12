Cara mengclone data

1. "git clone https://github.com/syaifudin21/laravelMultyAuth.git"
2. "cd laravelMultyAuth"
3. "composer install"
4. diplikat ".env.example" dengan nama ".env"
5. "php artisan key:generate"
6. sesuaikan koneksi database di ".env" 
7. "php artisan migrate"
8. "php artisan db:seed --class=UsersLoginSeeder"
9. Login siswa [ username => siswa , password => 121212 ]
10. Login siswa [ username => guru , password => 121212 ]
11. menjalan program " php -S localhost:8000 -t public/ "