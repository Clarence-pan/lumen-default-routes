# Default Routes For Laravel/Lumen

![build status](https://travis-ci.org/Clarence-pan/lumen-default-routes.svg)

With this library, you can easily add "module/controller/action" style routes for Lumen.

# Install

Suggest install it via composer:

```sh
composer require clarence/laravel-default-routes
```

Then, register the `DefaultRouteProvider`. For lumen, please register `\Clarence\LaravelDefaultRoutes\DefaultRouteProvider::class` in `bootstrap/app.php`.

```php
// bootstrap/app.php

$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);

//...

$app->group(['namespace' => 'App\Http\Controllers'], function ($app) {
    require __DIR__.'/../app/Http/routes/main_routes.php';
});

$app->register(Clarence\LaravelDefaultRoutes\DefaultRouteProvider::class); // add: register default routes below registered all your own routes

```
 
 
# Routes Maps

`foo/bar` will be mapped to `\App\Http\Controllers\FooController@doGetBar` by default. 

Note:

1. `\App\Http\Controllers\` is the namespace prefix of the controller. It can be configurated as `laravel-default-routes.controller-prefix`.
2. In `FooController`, `Controller` is the class name suffix. It can be configurated as `laravel-default-routes.controller-suffix`.
3. `doGetBar` is the actual method to be executed. It is `do` + `<HTTP_METHOD>` + `<action>`. And it should be a `public` method. Otherwise a `404` or `405` HTTP error will be thrown. 
4. If `\App\Http\Controllers\FooController@doGetBar` cannot be found, `\App\Http\Controllers\Foo\BarController@doGetIndex` will be tried.


