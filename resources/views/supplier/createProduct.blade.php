<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Form</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">

<div class="max-w-5xl mx-auto p-6 bg-white rounded-2xl shadow-md mt-4">
  <h2 class="text-2xl font-bold mb-6">
    {{ isset($product) ? 'Edit Produk' : 'Tambah Produk' }}
  </h2>

  <form method="POST" action="{{ isset($product) ? route('produk.update', $product->id) : route('produk.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($product))
      @method('PUT')
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- ===== Kolom Kiri ===== -->
      <div class="space-y-4">

        <!-- Nama Produk -->
        <div>
          <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
          @error('nama_produk')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          <input type="text" name="nama_produk" id="nama_produk" class="w-full border border-gray-300 rounded-lg p-2"
                 value="{{ old('nama_produk', $product->nama_produk ?? '') }}" placeholder="Contoh: Sepatu Sneakers">
        </div>

        <!-- Kode Produk -->
        <div>
          <label for="kode_produk" class="block text-sm font-medium text-gray-700 mb-1">Kode Produk</label>
          @error('kode_produk')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          <input type="number" name="kode_produk" class="w-full border border-gray-300 rounded-lg p-2"
                 value="{{ old('kode_produk', $product->kode_produk ?? '') }}">
        </div>

        <!-- Kategori -->
        <div>
          <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
          @error('kategori_produk')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          <select name="kategori_produk" id="kategori" class="w-full border border-gray-300 rounded-lg p-2">
            <option disabled {{ !isset($product) ? 'selected' : '' }}>Pilih kategori</option>
            <option value="makanan" {{ old('kategori_produk', $product->kategori_produk ?? '') == 'makanan' ? 'selected' : '' }}>Makanan</option>
            <option value="minuman" {{ old('kategori_produk', $product->kategori_produk ?? '') == 'minuman' ? 'selected' : '' }}>Minuman</option>
            <option value="furniture" {{ old('kategori_produk', $product->kategori_produk ?? '') == 'furniture' ? 'selected' : '' }}>Furniture</option>
          </select>
        </div>

        <!-- Harga -->
        <div>
          <label for="harga_produk" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
          @error('harga_produk')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          <input type="number" name="harga_produk" id="harga_produk" class="w-full border border-gray-300 rounded-lg p-2"
                 value="{{ old('harga_produk', $product->harga_produk ?? '') }}">
        </div>

        <!-- Stok -->
        <div>
          <label for="stok_produk" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
          @error('stok_produk')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          <input type="number" name="stok_produk" id="stok_produk" class="w-full border border-gray-300 rounded-lg p-2"
                 value="{{ old('stok_produk', $product->stok_produk ?? '') }}">
        </div>

        <!-- Gambar Produk -->
        <div>
          <label for="gambar_produk" class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
          @error('gambar_produk')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          @if(isset($product) && $product->gambar_produk)
            <img src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}" alt="Gambar Produk"
                 class="w-40 h-40 object-cover rounded mb-4">
          @endif
          <input type="file" name="gambar_produk" id="gambar_produk"
                 class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
        </div>
      </div>

      <!-- ===== Kolom Kanan ===== -->
      <div class="space-y-4">

        <!-- Deskripsi -->
        <div>
          <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
          @error('deskripsi_produk')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          <textarea name="deskripsi_produk" id="deskripsi_produk" rows="7"
                    class="w-full border border-gray-300 rounded-lg p-2"
                    placeholder="Tulis deskripsi produk...">{{ old('deskripsi_produk', $product->deskripsi_produk ?? '') }}</textarea>
        </div>

        <!-- Varian Produk -->
        <div id="variant-section">
          <div class="flex justify-between items-center mb-2">
            <h3 class="text-md font-semibold">Varian Produk</h3>
            <button type="button" onclick="addVariant()" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">+ Tambah</button>
          </div>
          <div id="variants-container" class="space-y-4">
            @if(isset($product) && $product->variant)
              @foreach($product->variant as $i => $variant)
                <div class="bg-gray-100 p-3 rounded relative">
                  <label class="block text-sm font-medium mb-1">Nama Varian <span class="text-red-500">*</span></label>
                  @error("variant.$i.name")
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
                  <input type="text" name="variant[{{ $i }}][name]" value="{{ $variant->name }}"
                         class="w-full mb-2 border border-gray-300 rounded-lg p-2" placeholder="Contoh: Warna Merah" required>

                  <label class="block text-sm font-medium mb-1">Gambar Varian</label>
                  <div class="flex flex-wrap gap-2 mb-2">
                    @foreach($variant->images as $image)
                      <img src="{{ asset('assets/images/variant/' . $image->image_path) }}" alt="" class="w-16 h-16 rounded object-cover">
                    @endforeach
                  </div>
                  <div class="flex items-center">
                    <input type="file" name="variant[{{ $i }}][images][]" multiple
                           class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <button type="button" onclick="this.closest('.bg-gray-100').remove()" class="ml-2 bg-red-500 text-white rounded-full w-7 h-7 flex items-center justify-center hover:bg-red-600" title="Hapus Varian">
                      &times;
                    </button>
                  </div>
                </div>
              @endforeach
              @php $variantIndex = count($product->variant); @endphp
            @else
              @php $variantIndex = 0; @endphp
            @endif
          </div>
          {{-- Error global untuk variant wajib diisi --}}
          @error('variant')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          @error('variant.*.name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>
    </div>
    <!-- Tombol -->
    <div class="text-right mt-6">
      <a href="{{ route('userSetting') }}#daftar-barang" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-400 mr-2">Cancel</a>
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
        {{ isset($product) ? 'Update' : 'Simpan' }}
      </button>
    </div>
  </form>
</div>
<script>
  let variantIndex = {{ $variantIndex ?? 0 }};

  function addVariant() {
    const container = document.getElementById('variants-container');
    const div = document.createElement('div');
    div.classList.add('bg-gray-100', 'p-3', 'rounded', 'relative');

    div.innerHTML = `
      <label class="block text-sm font-medium mb-1">Nama Varian <span class="text-red-500">*</span></label>
      <input type="text" name="variant[${variantIndex}][name]" class="w-full mb-2 border border-gray-300 rounded-lg p-2" placeholder="Contoh: Warna Merah" required>

      <label class="block text-sm font-medium mb-1">Gambar Varian</label>
      <div class="flex items-center">
        <input type="file" name="variant[${variantIndex}][images][]" multiple
               class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        <button type="button" onclick="this.closest('.bg-gray-100').remove()" class="ml-2 bg-red-500 text-white rounded-full w-7 h-7 flex items-center justify-center hover:bg-red-600" title="Hapus Varian">
          &times;
        </button>
      </div>
    `;
    container.appendChild(div);
    variantIndex++;
  }

  // Client-side: Cegah submit jika tidak ada varian atau ada varian tanpa nama
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
      const variantInputs = document.querySelectorAll('[name^="variant["][name$="[name]"]');
      let valid = true;
      if (variantInputs.length === 0) {
        alert('Minimal 1 varian wajib diisi.');
        valid = false;
      }
      variantInputs.forEach(input => {
        if (!input.value.trim()) {
          input.classList.add('border-red-500');
          valid = false;
        } else {
          input.classList.remove('border-red-500');
        }
      });
      if (!valid) e.preventDefault();
    });
  });
</script>
</body>
</html>
