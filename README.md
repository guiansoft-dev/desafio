## Desafio Mova
<p align="center"><a href="https://mova.vc/" target="_blank"><img src="https://user-images.githubusercontent.com/59266968/136821898-f85941ac-ccc8-4cf1-adb6-31824d599398.jpeg" width="400"></a></p>

## Como instalar e executar em seu sistema local

```bash
git clone https://github.com/guiansoft-dev/desafio.git
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

No arquivo .env altere de APP_URL=http://localhost para APP_URL=http://localhost:8000 para que não apresente erro ao rodar o test.

```bash
php artisan serve
```
Para rodar o test unitario execute em seu terminal:

```bash
cd backend
```

```bash
vendor/bin/phpunit
```

## Teste usando o insomnia ou Postman:
![Captura de tela de 2021-10-11 13-01-48](https://user-images.githubusercontent.com/59266968/136821013-282bc4a4-f4c3-4388-a88d-c88bbcc08d54.png)


