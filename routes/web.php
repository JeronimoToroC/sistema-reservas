<?php

use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/reservas');
Route::resource('reservas', ReservaController::class);
