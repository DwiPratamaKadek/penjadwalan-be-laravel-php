
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
##
```bash 
   php artisan migrate 
```