<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\Admin\PesananController;
use Inertia\Inertia;

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('pesanan', [PesananController::class, 'index'])->name('pesanan.index');
    // Tambahkan rute lainnya sesuai kebutuhan.
});

