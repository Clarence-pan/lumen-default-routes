<?php

namespace App\http\Controllers;

use Clarence\LumenDefaultRoutes\DefaultRoute;
use Laravel\Lumen\Routing\Controller;

class FooBarController extends Controller
{
    use DefaultRoute;

    public function doGetIndex()
    {
        return __METHOD__;
    }

    public function doPostIndex()
    {
        return __METHOD__;
    }

    public function doPutIndex()
    {
        return __METHOD__;
    }

    public function doDeleteIndex()
    {
        return __METHOD__;
    }

    public function doGetJoy()
    {
        return __METHOD__;
    }

    public function doPostJoy()
    {
        return __METHOD__;
    }

    public function doPutJoy()
    {
        return __METHOD__;
    }

    public function doDeleteJoy()
    {
        return __METHOD__;
    }

    public function doPatchJoy()
    {
        return __METHOD__;
    }
}
