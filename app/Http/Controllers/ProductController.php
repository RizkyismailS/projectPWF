<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function createProduct()
    {
        return view('supplier.createProduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|max:20',
            'kategori_produk' => 'required|max:20',
            'kode_produk' => 'required|unique:products,kode_produk',
            'stok_produk' => 'required|integer',
            'harga_produk' => 'required|integer',
            'deskripsi_produk' => 'required|max:255',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'variant.*.name' => 'required|string|max:50',
            'variant.*.images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'kode_produk.unique' => 'Kode produk sudah terdaftar.',
            'gambar_produk.required' => 'Harap masukkan gambar produk.',
            'variant.*.name.required' => 'Nama varian wajib diisi.',
            'variant.*.name.string' => 'Nama varian harus berupa teks.',
        ]);

        // Simpan gambar produk utama
        $file = $request->file('gambar_produk');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/images/produk'), $filename);

        // Simpan produk
        $product = Product::create([
            'user_id' => Auth::id(),
            'nama_produk' => $request->nama_produk,
            'kategori_produk' => $request->kategori_produk,
            'kode_produk' => $request->kode_produk,
            'stok_produk' => $request->stok_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar_produk' => $filename,
            'status_produk' => 'baru',
            'discount' => 0,
        ]);

        // Simpan variant dan gambarnya jika ada
        if ($request->has('variant')) {
            foreach ($request->variant as $variantData) {
                // Validasi agar tidak insert varian kosong
                if (empty($variantData['name'])) {
                    continue;
                }
                $variant = $product->variant()->create([
                    'name' => $variantData['name'],
                ]);

                if (isset($variantData['images'])) {
                    foreach ($variantData['images'] as $image) {
                        $variantImageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('assets/images/variant'), $variantImageName);

                        $variant->images()->create([
                            'image_path' => $variantImageName,
                        ]);
                    }
                }
            }
        }

        return redirect()->to(route('userSetting') . '#daftar-barang')
                         ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required|max:20',
            'kategori_produk' => 'required|max:20',
            'kode_produk' => 'required|unique:products,kode_produk,' . $product->id,
            'stok_produk' => 'required|integer',
            'harga_produk' => 'required|integer',
            'deskripsi_produk' => 'required|max:255',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'kode_produk.unique' => 'Kode produk sudah terdaftar.',
        ]);

        // Update gambar jika ada
        if ($request->hasFile('gambar_produk')) {
    // Hapus gambar lama
    $oldImage = public_path('assets/images/produk/' . $product->gambar_produk);
    if (file_exists($oldImage)) {
        unlink($oldImage);
    }

    // Simpan gambar baru
    $file = $request->file('gambar_produk');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('assets/images/produk/'), $filename);
    $product->gambar_produk = $filename;
}


        $product->update([
            'nama_produk' => $request->nama_produk,
            'kategori_produk' => $request->kategori_produk,
            'kode_produk' => $request->kode_produk,
            'stok_produk' => $request->stok_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
        ]);
        // Hapus varian dan gambar lama (jika ingin di-reset sepenuhnya)
$product->variant()->each(function ($variant) {
    $variant->delete();
});

// Simpan ulang varian dari input
if ($request->has('variant')) {
    foreach ($request->variant as $variantData) {
        $variant = $product->variant()->create([
            'name' => $variantData['name'] ?? null,
        ]);

        if (isset($variantData['images'])) {
            foreach ($variantData['images'] as $image) {
                $variantImageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/images/variant'), $variantImageName);

                $variant->images()->create([
                    'image_path' => $variantImageName,
                ]);
            }
        }
    }
}

        return redirect()->to(route('userSetting') . '#daftar-barang')
                         ->with('success', 'Produk berhasil diperbarui!');
    }

    public function showProductPartial(Request $request)
{
    $query = Product::where('user_id', Auth::id());

    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function ($q) use ($search) {
            $q->where('nama_produk', 'like', "%{$search}%")
              ->orWhere('kategori_produk', 'like', "%{$search}%")
              ->orWhere('kode_produk', 'like', "%{$search}%");
        });
    } else {
        $search = null;
    }

    $products = $query->paginate(10);

    return view('supplier.showProduct', compact('products', 'search'));
}

public function daftarPesananPartial(Request $request)
{
    $supplierId = Auth::id();

    $orders = Order::whereHas('product', function ($query) use ($supplierId) {
                        $query->where('user_id', $supplierId);
                    })
                    ->with(['product', 'user']) 
                    ->orderByDesc('created_at')
                    ->paginate(10);

    return view('supplier.daftarPesanan', compact('orders'));
}



    public function edit($id)
    {
        $product = Product::with('variant.images')->findOrFail($id);
        return view('supplier.createProduct', compact('product'));
    }

    public function ProductPage(Request $request)
{
    $product = Product::query()->where('produk_state', 'aktif'); 

    if ($request->filled('category')) {
        $product->where('kategori_produk', $request->category);
    }

    $products = $product->paginate(12);
    $categories = Product::distinct()->pluck('kategori_produk');

    return view('landingPage.product', compact('products', 'categories'));
}


    public function destroy($id)
    {
        $product = Product::where('user_id', Auth::id())->findOrFail($id);
        $product->delete();

        return redirect()->to(route('userSetting') . '#daftar-barang')
                         ->with('success', 'Produk berhasil dihapus');
    }

    public function show($id)
    {
        $product = Product::with('variant.images')->findOrFail($id);
        return view('landingPage.productDetail', compact('product'));
    }

    public function cart()
{
    $userId = Auth::id();

    // Ambil item keranjang user
    $cartItems = Cart::with('product')
                    ->where('user_id', $userId)
                    ->get();

    // Ambil status order dari produk yang ada di keranjang
    $orders = Order::whereIn('product_id', $cartItems->pluck('product_id'))
                        ->pluck('status', 'product_id'); // Hasil: [product_id => status]

    // Hitung subtotal keranjang
    $subtotal = $cartItems->sum(function ($item) {
        return $item->product->harga_produk * $item->quantity;
    });

    return view('landingPage.keranjang', compact('cartItems', 'orders', 'subtotal'));
}

    public function deactivate($id)
{
    $product = Product::findOrFail($id);
    $product->status_produk = 'nonaktif';
    $product->save();

    return redirect()->to(route('userSetting') . '#daftar-barang')->with('success', 'Produk berhasil dinonaktifkan.');
}
public function toggleStatus($id)
{
    $produk = Product::findOrFail($id);

    $produk->produk_state = $produk->produk_state === 'nonaktif' ? 'aktif' : 'nonaktif';
    $produk->save();

    return redirect()->to(route('userSetting') . '#daftar-barang')->with('success', 'Status produk berhasil diubah.');
}
}
