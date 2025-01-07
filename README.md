#### Previews
![Beranda](./previews/beranda.png)

![Beranda](./previews/Smart-Governance.png.png)


### Requirement
1. Web server (Apache, Nginx dll), Mysql. Pakai Xampp / Laragon udah sepaket
2. Composer
3. Nodejs
4. PHP version >= 8.2

### Cara Install ke Lokal Development
1. Clone Repo ini
2. Install dependency Laravel menggunakan composer :
   ```
   $ composer install
   ```
3. Copy file ``.env.example`` dan paste lalu rename jadi ``.env``
4. Buat database pada phpmyadmin anda dengan nama ``db_smartcity``
5. Lakukan Migrasi (tahap 1) :
    ```
    $ php artisan migrate --seed
    ```
6. Lakukan penginstalan NPM 
    ```
    $ npm install
    ```
9. Jalankan server aplikasi :
    ```
    $ php artisan serve

    $npm run dev
    ```
10. Login menggunakan kredensial yang sudah dibuat. (Lihat di file DatabaseSeeder.php)
