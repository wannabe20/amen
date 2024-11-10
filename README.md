# E-shop se zbraněmi

Tento projekt je jednoduchý e-shop se zbraněmi vytvořený pomocí frameworku Laravel. Umožňuje spravovat kategorie a produkty (zbraně) a zahrnuje základní funkcionalitu pro přidávání, prohlížení a správu těchto položek.

## Požadavky

Před spuštěním projektu se ujistěte, že máte nainstalované následující:

- PHP (verze 8.1 nebo novější)
- Composer
- MySQL nebo jiný databázový server

## Instalace

1. **Klonování repozitáře**

   Nejprve si zkopírujte repozitář do vašeho místního počítače:

   ```
   git clone https://github.com/kalibear99/laravel_projekt_skupina_uz_vazne.git
   ```
Nainstalujte závislosti
Přejděte do složky projektu a nainstalujte všechny závislosti pomocí Composeru a npm:  (bez npm se nenainstaluje Vite) 

```
cd eshop_zbrane
composer install
npm install
```
Konfigurace prostředí

Zkopírujte soubor .env.example do .env pomocí příkazového řádku:

```
copy .env.example .env
```
Ujistěte se, že máte správně nastavené připojení k databázi (v souboru .env upravte hodnoty DB_DATABASE, DB_USERNAME a DB_PASSWORD podle vaší lokální MySQL databáze).
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Zapneme Xampp-control-panel a zapneme MySQL //databáze v projektu běží na MySQL

Generování aplikačního klíče

Spusťte následující příkaz pro generování aplikačního klíče:

```
php artisan key:generate
```
Migrace databáze

Spusťte migrace pro vytvoření potřebných tabulek v databázi:

```
php artisan migrate
```
Načtení počátečních dat

Pokud chcete naplnit databázi počátečními daty (kategorie a zbraně), spusťte následující příkaz:

```
php artisan db:seed --class=GunStoreSeeder
```
Spuštění serveru

Poté spusťte vestavěný server Laravelu příkazem:
Jeden napište do jednoho terminálu a druhý do dalšího
```
npm run dev
php artisan serve
```
Aplikaci nyní můžete navštívit na adrese 127.0.0.1:8000

Created by: Lukáš Prchlík, Darien Kalist, Šimon Čada, Simon Melichar, David Krupík




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
