# Фриланс проект лендинг
## Требования заказчика:
- Сверстать проект;
- Использовать файл в качестве БД;
- Натянуть админку.
## Были использованы:
- MoonShine;
- Laravel;
- SQLite.
## Требуется:
- PHP 8.2;
## Инструкция для развертывания:
    composer install
    composer dump autoload
    php artisan storage:link
    npm install
    npm run build
    php artisan migrate --seed
