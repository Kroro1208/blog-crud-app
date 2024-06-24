## Breeze

`composer require laravel/breeze --dev`
`php artisan breeze:install`
`npm install`

## blade

`php artisan make:component AppWebLayout `
`php artisan make:component AlertMessage`

## BootStrap CDN

`https://getbootstrap.jp/docs/5.3/getting-started/introduction/`

## migrate

`php artisan make:migration create_products_table`
`php artisan make:migration add_is_active_to_products_table --table=products`
`php artisan make:migration add_details_to_products_table`

#### ロールバック

`php artisan migrate:rollback`

#### データベースに適用された最新の 3 つのマイグレーションをロールバック

`php artisan migrate:rollback --step=3`
