<?php

use dcat/page\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('page', Controllers\PageController::class.'@index');