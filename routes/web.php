<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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
Route::resource('admin/categories', CategoryController::class)->names([
    'index' => 'admin.categories.index',
    'create' => 'admin.categories.create',
    'store' => 'admin.categories.store',
    'show' => 'admin.categories.show',
    'edit' => 'admin.categories.edit',
    'update' => 'admin.categories.update',
    'destroy' => 'admin.categories.destroy',
]);


//Brand
Route::resource('admin/brands', BrandController::class)->names([
    'index' => 'admin.brands.index',
    'create' => 'admin.brands.create',
    'store' => 'admin.brands.store',
    'show' => 'admin.brands.show',
    'edit' => 'admin.brands.edit',
    'update' => 'admin.brands.update',
    'destroy' => 'admin.brands.destroy',
]);
