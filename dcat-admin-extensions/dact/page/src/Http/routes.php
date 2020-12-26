<?php

use Dcat/Page\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('page', Controllers\PageController::class.'@index');