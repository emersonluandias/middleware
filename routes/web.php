<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PrimeiroMiddleware;
use Illuminate\Routing\Controllers\Middleware;

Route::get('/usuarios','App\Http\Controllers\UsuarioControlador@index')
->middleware(PrimeiroMiddleware::class);