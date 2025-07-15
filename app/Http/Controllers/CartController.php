<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   public function index()
{
    $cartItems = Cart::with('product')
        ->where('user_id', Auth::id())
        ->get();

    // Calculate subtotal
    $subtotal = $cartItems->sum(function ($item) {
    return $item->product->harga_produk * $item->quantity;
    $order = Order::where('user_id', Auth::id())
        ->with('orderItems.product')
        ->get();
});


    // Calculate total unique product count
    $cartTotalQuantity = $cartItems->sum('quantity');


    return view('landingPage.keranjang', compact('cartItems', 'subtotal', 'cartTotalQuantity'));
}


    public function add(Request $request, Product $product)
    {
        // Validasi jumlah quantity minimal 1
        $request->validate([
            'variant_id' => 'required|exists:variants,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $quantity = $request->input('quantity');

        // Cek apakah item sudah ada di keranjang user
        $existingCart = Cart::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($existingCart) {
    $existingCart->quantity += $quantity;
    $existingCart->subtotal = $existingCart->product->harga_produk * $existingCart->quantity;
    $existingCart->save();
} else {
    Cart::create([
        'user_id' => Auth::id(),
        'product_id' => $product->id,
        'variant_id' => $request->input('variant_id'),
        'quantity' => $quantity,
        'subtotal' => $product->harga_produk * $quantity,
    ]);
}

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
 public function remove($id)
{
    $cartItem = Cart::findOrFail($id);

    abort_unless($cartItem->user_id === Auth::id(), 403);

    $cartItem->delete();

    return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang.');
}

public function checkout()
{
    $cartItems = Cart::with('product')
        ->where('user_id', Auth::id())
        ->get();
    // Hitung subtotal
    $subtotal = $cartItems->sum(function ($item) {
        return $item->product->harga_produk * $item->quantity;
    });
    $tax = $subtotal * 0.1; 
    $total = $subtotal + $tax;
    return view('landingPage.checkout', compact('cartItems', 'subtotal', 'tax', 'total'));
}

}