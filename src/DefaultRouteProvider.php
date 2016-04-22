<?php

namespace Clarence\LumenDefaultRoutes;

use Illuminate\Support\ServiceProvider;

class DefaultRouteProvider extends ServiceProvider
{
    public function boot()
    {
        $router = app();

        $router->group([], function ($router) {
            $routes = [
                ['/{controller}',                   DefaultRouteController::class.'@runControllerAction'],
                ['/{controller}/{action}',          DefaultRouteController::class.'@runControllerAction'],
                ['/{module}/{controller}/{action}', DefaultRouteController::class.'@runModuleControllerAction'],
            ];

            foreach ($routes as $route) {
                foreach (['get', 'post', 'delete', 'put', 'patch'] as $method) {
                    call_user_func_array([$router, $method], $route);
                }
            }
        });
    }

    public function register()
    {
    }
}
