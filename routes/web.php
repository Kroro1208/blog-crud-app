<?php

use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('products', function () {
    return Product::get();
});

Route::get('products-create', function () {
    return Product::create([
        'name' => 'man pant style',
        'description' => 'man pant description',
        'small_description' => 'man pant small desc',
        'original_price' => 1500,
        'price' => 850,
        'stock' => 50,
        'is_active' => 1
    ]);
});

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
