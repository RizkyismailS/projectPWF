<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data produk dari database (contoh)
        $products = Product::all(); // Atau gunakan query yang lebih spesifik

        // Kirim data produk ke view
        return view('landingPage/main', compact('products'));
    }
}
