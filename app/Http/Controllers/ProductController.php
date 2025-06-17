<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
            'status_produk' => 'required',
            'variant.*.name' => 'required|string|max:50',
            'variant.*.images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'kode_produk.unique' => 'Kode produk sudah terdaftar.',
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
            'status_produk' => $request->status_produk,
            'discount' => 0,
        ]);

        // Simpan variant dan gambarnya jika ada
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
            'status_produk' => 'required',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'kode_produk.unique' => 'Kode produk sudah terdaftar.',
        ]);

        // Update gambar jika ada
        if ($request->hasFile('gambar_produk')) {
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
            'status_produk' => $request->status_produk,
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
        }

        $products = $query->paginate(10);
        return view('supplier.showProduct', compact('products'));
    }

    public function detail()
    {
        return view('supplier.detail');
    }

    public function edit($id)
    {
        $product = Product::with('variant.images')->findOrFail($id);
        return view('supplier.createProduct', compact('product'));
    }

    public function ProductPage(Request $request)
    {
        $product = Product::query();

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
        $cartItems = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('carts.*', 'products.nama_produk', 'products.harga_produk')
            ->where('carts.user_id', Auth::id())
            ->get();

        return view('landingPage.cart', compact('cartItems'));
    }
}
