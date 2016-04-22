<?php


$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);

//$app->singleton(
//    Illuminate\Contracts\Http\Kernel::class,
//    Laravel\Lumen\Http\Kernel::class
//);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    Laravel\Lumen\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Laravel\Lumen\Exceptions\Handler::class
);

// register custom routes
$app->group([], function($app){
    foreach (['get', 'post', 'delete', 'put', 'patch'] as $method) {
        $app->{$method}('/fb/{action}', App\Http\Controllers\FooBarController::class . '@runAction');
    }
});

// register default routes
$app->register(\Clarence\LaravelDefaultRoutes\DefaultRouteProvider::class);

return $app;
