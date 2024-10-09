<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/auth/login', [AuthController::class, 'login']);
Route::get('/', [DashboardController::class, 'index']);


require_once __DIR__ . '/actions/auth.php';
