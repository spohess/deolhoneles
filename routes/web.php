<?php

declare(strict_types=1);

use App\Http\Controllers\Loaders\DeputadosLoadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
