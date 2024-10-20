<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah produk, kategori, dan pengguna
        $productCount = Product::count();
        $categoryCount = Category::count();
        $brandCount = Brand::count();

        return view('admin.index', compact('productCount', 'categoryCount', 'brandCount'));
    }
}
