<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Order;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $clients = User::where('type', 'client')->get();
        $order = Order::with('product', 'user')
            ->where('status', '!=', 'canceled')
            ->latest()
            ->get();
        return view('admin.dashboard', compact('order'));
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
}
