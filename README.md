## back-end
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Como instalar e executar em seu sistema local

```bash
git clone https://github.com/guiansoft-dev/teste-credpagp.git
```

```bash
cd backend
```

```bash
composer install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

Adicione a configuração do seu banco de dados no arquivo .env

```bash
php artisan migrate
```

```bash
php artisan serve
```
