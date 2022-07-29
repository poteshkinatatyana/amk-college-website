composer require laravel/ui
php artisan ui bootstrap --auth
npm install 
npm run prod

composer require laravel/fortify

composer require spatie/laravel-permission
php artisan permission:create-role user
php artisan permission:create-role admin

php artisan migrate 

localhost/login - зарегистрировать ноовго пользователя

В таблице - model_has_roles - в поле role_id - написать значение 2
Перейти на localhost/admin_panel 