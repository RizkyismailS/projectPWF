<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-2xl shadow-md mt-12">
  <h2 class="text-2xl font-bold mb-6">Tambah Produk</h2>
  <form class="space-y-6">
    
    <!-- Nama Produk -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
      <input type="text" name="nama" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contoh: Sepatu Sneakers">
    </div>

    <!-- Kategori -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
      <select name="kategori" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option>Pilih Kategori</option>
        <option>Pakaian</option>
        <option>Elektronik</option>
        <option>Peralatan Rumah</option>
      </select>
    </div>

    <!-- Harga -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
      <input type="number" name="harga" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contoh: 150000">
    </div>

    <!-- Stok -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
      <input type="number" name="stok" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Deskripsi -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
      <textarea name="deskripsi" rows="4" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tulis deskripsi produk..."></textarea>
    </div>

    <!-- Gambar -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
      <input type="file" name="gambar" class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
    </div>

    <!-- Tombol Simpan -->
    <div class="text-right">
      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Simpan</button>
    </div>
  </form>
</div>

</body>
</html>