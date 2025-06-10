<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-2xl shadow-md mt-12">
  <h2 class="text-2xl font-bold mb-6">
  {{ isset($product) ? 'Edit Produk' : 'Tambah Produk' }}
</h2>
  <form method="POST" action="{{ isset($product) ? route('produk.update', $product->id) : route('produk.store') }}" enctype="multipart/form-data">
  @csrf
  @if(isset($product))
  @method('PUT')
  @endif
  
  <!-- Nama Produk -->
  <div>
    <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
    <input type="text" name="nama_produk" id="nama_produk" class="w-full border border-gray-300 rounded-lg p-2" value="{{ old('nama_produk', $product->nama_produk ?? '') }}"placeholder="Contoh: Sepatu Sneakers">
  </div>

    <!-- Kode Produk -->
    <div>
      <label for="kode_produk" class="block text-sm font-medium text-gray-700 mb-1">Kode Produk</label>
      <input type="text" name="kode_produk"  class="w-full border border-gray-300 rounded-lg p-2 pb-2" value="{{ old('kode_produk', $product->kode_produk ?? '') }}">
    </div>

    <!-- kategori Produk -->
    <label for="kategori">Kategori</label>
    <select name="kategori_produk" id="kategori" class="w-full border border-gray-300 rounded-lg p-2">
    <option disabled {{ !isset($product) ? 'selected' : '' }}>Pilih kategori</option>
    <option value="makanan" {{ (old('kategori_produk', $product->kategori_produk ?? '') == 'makanan') ? 'selected' : '' }}>Makanan</option>
    <option value="minuman" {{ (old('kategori_produk', $product->kategori_produk ?? '') == 'minuman') ? 'selected' : '' }}>Minuman</option>
    <option value="furniture" {{ (old('kategori_produk', $product->kategori_produk ?? '') == 'furniture') ? 'selected' : '' }}>Furniture</option>
</select>


    <!-- Status Produk -->
    <div>
      <label for="status_produk" class="block text-sm font-medium text-gray-700 mb-1">Status Produk</label>
      <select name="status_produk" id="status_produk" class="w-full border border-gray-300 rounded-lg p-2">
        <option value="baru">Baru</option>
        <option value="hot">Hot</option>
        <option value="recommended">Recommended</option>
      </select>
    </div>

    <!-- Harga Produk -->
    <div>
      <label for="harga_produk" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
      <input type="number" name="harga_produk" id="harga_produk" class="w-full border border-gray-300 rounded-lg p-2 pb-2" value="{{ old('harga_produk', $product->harga_produk ?? '') }}" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Contoh: 150000">
    </div>

    
    <!-- Stok -->
    <div>
      <label for="stok_produk" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
      <input type="number" name="stok_produk" id="stok_produk" value="{{ old('stok_produk', $product->stok_produk ?? '') }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Deskripsi -->
    <div>
      <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
      <textarea name="deskripsi_produk" id="deskripsi_produk" rows="4"  class="w-full border border-gray-300 rounded-lg p-2" placeholder="Tulis deskripsi produk...">{{ old('deskripsi_produk', $product->deskripsi_produk ?? '') }}</textarea>
    </div>

    <!-- Gambar -->
    <div>
  @if(isset($product) && $product->gambar_produk)
    <img src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}" alt="Gambar Produk" class="w-40 h-40 object-cover rounded mb-4">
@endif

  <label for="gambar_produk" class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
  <input type="file" name="gambar_produk" id="gambar_produk" class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
</div>

    <!-- Tombol -->
    <div class="text-right">
      <a href="{{ route('userSetting') }}#daftar-barang" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-400 mr-2">Cancel</a>
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"> {{ isset($product) ? 'Update' : 'Simpan' }}
</button>
    </div>
  </form>
</div>
</body>
</html>