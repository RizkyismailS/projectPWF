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
            <span class="text-2xl font-bold mr-2 text-gray-600">Rp{{ number_format($product->harga_produk, 0, ',', '.') }}</span>
            <span class="text-gray-700 line-through">Rp{{ number_format($product->harga_produk + 50000, 0, ',', '.') }}</span>
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
          <h3 class="text-lg font-semibold mb-2 text-gray-500">Deskripsi :</h3>
          <p class="text-gray-700 mb-6">{{ $product->deskripsi_produk }}</p>

          <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2 text-gray-500">Variants:</h3>
            <div class="flex flex-wrap gap-2">
                <form id="addToCartForm" action="{{ route('cart.add', $product->id) }}" method="POST" class="flex flex-col gap-4 w-full">
                    @csrf
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($product->variant as $variant)
                            <button type="button"
                                class="variant-btn px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm text-gray-800 hover:bg-indigo-100 hover:border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition"
                                data-variant-id="{{ $variant->id }}">
                                {{ $variant->name }}
                            </button>
                        @endforeach
                    </div>
                    <input type="hidden" name="variant_id" id="variant_id" value="">
                    <span id="variantError" class="text-red-500 text-xs hidden">Varian wajib dipilih.</span>
                    <div class="mt-4">
                        <label class="block text-gray-700 font-semibold mb-1">Stok Tersedia:</label>
                        <div class="flex items-center space-x-2">
                            <span class="text-lg font-medium text-gray-500">{{ $product->stok_produk }}</span>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1"
                            class="w-12 text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black">
                    </div>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Add to Cart
                    </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function changeImage(src) {
      document.getElementById('mainImage').src = src;
    }

    // Event listener untuk input quantity
    const qtyInput = document.getElementById('quantity');
    if (qtyInput) {
      qtyInput.addEventListener('input', function () {
        document.getElementById('formQuantity') && (document.getElementById('formQuantity').value = this.value);
      });
    }

    // Validasi wajib pilih varian sebelum submit & button select
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('addToCartForm');
        const variantBtns = document.querySelectorAll('.variant-btn');
        const variantInput = document.getElementById('variant_id');
        const variantError = document.getElementById('variantError');

        variantBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Unselect semua button KECUALI tombol yang diklik
                variantBtns.forEach(b => {
                    if (b !== btn) {
                        b.classList.remove('bg-indigo-100', 'border-indigo-400', 'p-2');
                    }
                });
                // Select button ini (tetap highlight jika diklik ulang)
                btn.classList.add('bg-indigo-100', 'border-indigo-400', 'p-2');
                // Set value hidden input
                variantInput.value = btn.getAttribute('data-variant-id');
                // Hilangkan error jika ada
                variantError.classList.add('hidden');
            });
        });

        if (form && variantInput) {
            form.addEventListener('submit', function(e) {
                if (!variantInput.value) {
                    e.preventDefault();
                    variantError.classList.remove('hidden');
                    // Highlight semua button merah
                    variantBtns.forEach(b => b.classList.add('border-red-500'));
                    variantBtns[0]?.focus();
                } else {
                    variantError.classList.add('hidden');
                    variantBtns.forEach(b => b.classList.remove('border-red-500'));
                }
            });
        }
    });
  </script>
</body>
</html>
