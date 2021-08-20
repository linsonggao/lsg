# lsg
config/app.php下新增

Lsg\Exception\PackageApiExceptionServiceProvider::class
'ApiException' => Lsg\Exception\ApiException::class



composer require lsgapi/exception
php artisan vendor:publish

项目中使用

throw new \ApiException(400);