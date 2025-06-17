<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $product->nama_produk }}</title>
</head>
<body>
  @include('layout.web.navbar')
  <div class="bg-gray-100 pb-13">
    <div class="container mx-auto px-4 py-8">
      <div class="flex flex-wrap -mx-4">
        <!-- Product Images -->
<div class="w-full md:w-1/2 px-4 mb-8">
  <div class="w-full h-[400px] bg-white rounded-lg shadow-md flex items-center justify-center overflow-hidden">
    <img src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}" alt="{{ $product->nama_produk }}"
         class="h-full object-cover" id="mainImage">
  </div>

  <!-- Thumbnails -->
  <div class="flex gap-4 py-4 justify-center overflow-x-auto">
    <!-- Thumbnail utama -->
    <img src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}" alt="Thumbnail"
         class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100"
         onclick="changeImage(this.src)">

    <!-- Thumbnails varian -->
    @foreach($product->variant as $variant)
      @foreach($variant->images as $image)
        <img src="{{ asset('assets/images/variant/' . $image->image_path) }}" alt="Thumbnail"
             class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
             onclick="changeImage(this.src)">
      @endforeach
    @endforeach
  </div>
</div>

        <!-- Product Details -->
        <div class="w-full md:w-1/2 px-4">
          <h2 class="text-3xl font-bold mb-2 text-black">{{ $product->nama_produk }}</h2>
          <p class="text-gray-600 mb-4">SKU: {{ $product->kode_produk }}</p>
          <div class="mb-4">
            <span class="text-2xl font-bold mr-2 text-gray-600">${{ number_format($product->harga_produk, 2) }}</span>
            <span class="text-gray-700 line-through">${{ number_format($product->harga_produk + 50, 2) }}</span>
          </div>
          <div class="flex items-center mb-4">
            <!-- Rating Stars -->
            @for($i = 0; $i < 5; $i++)
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
              </svg>
            @endfor
            <span class="ml-2 text-gray-600">4.5 (120 reviews)</span>
          </div>
          <p class="text-gray-700 mb-6">{{ $product->deskripsi_produk }}</p>

          <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Variants:</h3>
            <div class="flex flex-wrap gap-2">
  @foreach($product->variant as $variant)
    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm text-gray-800 hover:bg-indigo-100 hover:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition"
            title="{{ $variant->name }}">
      {{ $variant->name }}
    </button>
  @endforeach
</div>
          </div>
<div class="mt-4">
  <label class="block text-gray-700 font-semibold mb-1">Stok Tersedia:</label>
  <div class="flex items-center space-x-2">
    <span class="text-lg font-medium text-gray-500">{{ $product->stok_produk }}</span>
  </div>
</div>

          <div class="mb-6">
            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1"
                   class="w-12 text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
          </div>

          <div class="flex space-x-4 mb-6">
            <button class="bg-indigo-600 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg>
              Add to Cart
            </button>
            <button class="bg-gray-200 flex gap-2 items-center text-gray-800 px-6 py-2 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
              </svg>
              Wishlist
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      function changeImage(src) {
        document.getElementById('mainImage').src = src;
      }
    </script>
  </div>
</body>
</html>
