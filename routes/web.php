<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::any('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "All Cache is cleared";
});

Route::resource('/', 'IndexController');

Route::resource('/News', 'NewsController');

Route::resource('/about_us', 'AboutUsController');

Route::resource('/authenticate', 'AuthenticateController');

Route::resource('/catalog', 'CatalogController');

Route::resource('/process', 'ProcessController');

Route::resource('/democar', 'DemocarController');

Route::resource('/contactus', 'ContactUsController');

Route::resource('/friendlink', 'FriendlinkController');



