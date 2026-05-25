<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PengirimanController;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $total = \App\Models\Pengiriman::count();
        $pending = \App\Models\Pengiriman::where('status', 'pending')->count();
        $transit = \App\Models\Pengiriman::whereIn('status', ['processing', 'shipped'])->count();
        $delivered = \App\Models\Pengiriman::where('status', 'delivered')->count();
        $recent = \App\Models\Pengiriman::orderBy('created_at', 'desc')->take(5)->get();
        return view('dashboard', compact('total', 'pending', 'transit', 'delivered', 'recent'));
    })->name('dashboard');

    Route::get('/pengiriman', [PengirimanController::class, 'index'])->name('pengiriman.index');
    Route::get('/pengiriman/create', [PengirimanController::class, 'create'])->name('pengiriman.create');
    Route::post('/pengiriman', [PengirimanController::class, 'store'])->name('pengiriman.store');
    Route::get('/pengiriman/{id}/edit', [PengirimanController::class, 'edit'])->name('pengiriman.edit');
    Route::patch('/pengiriman/{id}', [PengirimanController::class, 'update'])->name('pengiriman.update');

    Route::get('/rekap', [PengirimanController::class, 'rekap'])->name('rekap');
});
