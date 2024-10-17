<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('admin.index');
});

//product
Route::resource('admin/products', ProductController::class)->names([
    'index' => 'admin.products.index',
    'create' => 'admin.products.create',
    'store' => 'admin.products.store',
    'show' => 'admin.products.show',
    'edit' => 'admin.products.edit',
    'update' => 'admin.products.update',
    'destroy' => 'admin.products.destroy',
]);

//category
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
