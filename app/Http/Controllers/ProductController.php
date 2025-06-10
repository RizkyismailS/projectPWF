<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProductPartial(Request $request)
    {
        $query = Product::query();

        if ($request->has('search') && $request->search != '') {
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

    public function createProduct()
    {
        return view('supplier.createProduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|max:20',
            'kategori_produk' => 'required|max:20',
            'kode_produk' => 'required|max:20',
            'stok_produk' => 'required|integer',
            'harga_produk' => 'required|integer',
            'deskripsi_produk' => 'required|max:255',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status_produk' => 'required'
        ]);

        $file = $request->file('gambar_produk');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/images/produk'), $filename);

        // Simpan ke DB
        Product::create([
            'nama_produk' => $request->nama_produk,
            'kategori_produk' => $request->kategori_produk,
            'kode_produk' => $request->kode_produk,
            'stok_produk' => $request->stok_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar_produk' => $filename,
            'status_produk' => $request->status_produk,
            'discount' => 0
        ]);
        return redirect()
            ->to(route('userSetting') . '#daftar-barang')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function detail()
    {
        return view('supplier.detail');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('supplier.createProduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
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

        return redirect()->to(route('userSetting'). '#daftar-barang')->with('success', 'Produk berhasil diperbarui');
    }
    public function ProductPage(Request $request)
        {
            $product = Product::query();
            if ($request->has('category') && $request->category != '') {
                $category = $request->category;
                $product->where('kategori_produk', $category);
            }
            $products = $product->paginate(12);
            $categories = Product::distinct()->pluck('kategori_produk');
            return view('landingPage/product', compact('products', 'categories'));
        }
        
    }