<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    // Menampilkan daftar order (untuk admin atau user)
    public function index(Request $request)
    {
        $order = Order::with('product', 'user')
    ->where('user_id', Auth::id())
    ->where('status', '!=', 'canceled') // optional: jika pakai status canceled
    ->latest()
    ->first();

        return view('landingPage.orderDetail', compact('order'));
    }

    // Menyimpan pesanan baru
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'name_on_card' => 'required|string|max:255',
            'card_number' => 'required|string|max:16',
            'expiration_date' => 'required|string|max:7', // Format MM/YYYY
        ]);

        $product = Product::findOrFail($request->product_id);
        $totalPrice = $product->harga_produk * $request->quantity;

        // Membuat pesanan baru
        $order = Order::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'status' => 'pending', // Status awal
            'total_price' => $totalPrice,
            'name_on_card' => $request->name_on_card,
            'card_number' => $request->card_number,
            'order_code' => 'ORD-' . strtoupper(Str::random(8)),
            'expiration_date' => $request->expiration_date,
        ]);

        // Hapus semua item keranjang milik user setelah checkout
        \App\Models\Cart::where('user_id', auth::id())->delete();

        return response()->json([
            'success' => true,
            'message' => 'Pesanan berhasil dibuat! Kode pesanan: ' . $order->order_code,
            'order_code' => $order->order_code,
        ]);
    }

    // Menampilkan detail order terakhir user (landing page)
    public function showOrderPartial(Request $request)
    {
        $order = Order::with('product', 'user')
    ->where('user_id', Auth::id())
    ->where('status', '!=', 'canceled') // optional: jika pakai status canceled
    ->latest()
    ->first();


        if (!$order) {
            return redirect()->back()->with('error', 'Order tidak ditemukan.');
        }

        return view('landingPage.orderDetail', compact('order'));
    }

    // Validasi (admin mengubah status jadi completed)
    public function validateOrder(Request $request, Order $order)
    {
        $order->status = $request->status ?? 'completed';
        $order->save();

        return response()->json(['success' => true]);
    }

    // Membatalkan order (hanya jika pending)
    public function cancel($id)
{
    $order = Order::findOrFail($id);

    if ($order->status !== 'pending') {
        return response()->json(['success' => false, 'message' => 'Order cannot be cancelled.']);
    }

    $order->status = 'canceled';
    $order->save();

    return response()->json(['success' => true]);
}


}
