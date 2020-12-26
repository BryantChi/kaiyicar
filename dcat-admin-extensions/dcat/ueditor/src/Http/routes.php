<?php

use Dcat\Admin\Extension\UEditor\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('ueditor', Controllers\UeditorController::class.'@index');