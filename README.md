
# Membuat sebuah migrasi 
## Masuk dulu ke dockernya biar gak panjang printah di terminal  
```bash 
    docker exec -it penjadwalan_laravel bash
```
## Buat migrasi 
```bash 
    php artisan make:migration create_companies_table
```
## Kalo gak masuk bisa pake printah ini 
```bash 
    docker compose exec app php artisan make:migration create_companies_table
```
## Cara migrate databases
```bash 
   php artisan migrate 
```
## Tutor membuat sebuah model bang pake domain base 
```bash 
    php artisan make:model Domains/Auth/Models/AuthModel
```
## Tutor membuat sebuah controller bang pake domain base
```bash 
    php artisan make:controller AuthController 
```
ini dibuat seperti ini tanpa path gara gara larevel kocak langsung otomatis di http di taruh anying, nanti pindahin secara manual abistu ubah namespacenya.

## Tutor membuat sebuah route bang pake domain base
- kalo router buat manual ajah nantik daftarnya tinggal masukin di routes web.php

## ini pake liat log errornya
```bash
   docker compose exec php tail -f storage/logs/laravel.log
 
```