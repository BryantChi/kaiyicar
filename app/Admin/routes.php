<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('AboutUs', 'AboutUsInfoController');
    $router->resource('Authenticate', 'AuthenticateInfoController');
    $router->resource('CatalogCar', 'CatalogCarInfoController');
    $router->resource('CarType', 'CarTypeInfoController');
    $router->resource('CarModel', 'CarModelInfoController');
    $router->resource('CarOptional', 'CarOptionalInfoController');

});
