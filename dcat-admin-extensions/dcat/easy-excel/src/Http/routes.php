<?php

use Dcat\EasyExcel\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('easy-excel', Controllers\EasyExcelController::class.'@index');