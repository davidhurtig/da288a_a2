# da288a_a2

### Run/Use
Installera dependencies:
```
composer install
```

Konfigurera sedan en .env fil så applikationen har en anslutning till databasen.

Skapa sedan tabeller i databasen:
```
php artisan migrate
```

Lägg in lite exempeldata i dessa tabeller:
```
php artisan db:seed
```

Starta sedan servern genom:
```
php -S localhost:8000 -t public
```

Följ denna för GUI:
```
https://github.com/Tibbelit/da287a-vt-assignment2-client
```

## Authors
David Hurtig