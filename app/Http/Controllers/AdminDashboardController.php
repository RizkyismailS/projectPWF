<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Order;
use App\Models\Product;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(5)->get(); // 5 produk terbaru
    $orders = Order::latest()->take(5)->get();     // 5 order terbaru
        return view('admin.dashboard', compact('orders', 'products'));
    }

    public function sidebar()
    {
        return view('admin.sidebar');
    }

    public function navbar()
    {
        return view('admin.navbar');
    }
    
    public function customerList()
{
    // Ambil semua pengguna dengan tipe 'client'
    $clients = User::where('type', 'client')->get();
    return view('admin.customerList', compact('clients'));
}

    public function supplierList()
    {
        // Ambil semua pengguna dengan tipe 'supplier'
        $suppliers = User::where('type', 'supplier')->get();
        return view('admin.supplierList', compact('suppliers'));
    }

public function ViewProducts()
{
    // Ambil semua produk
    $products = Product::all();
    return view('admin.RecentProduct', compact('products'));
}
    public function editProfile()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        return view('admin.Profile', compact('user'));
    }
}