<a href="{{ route('userSetting') }}" class="inline-flex items-center mb-4 px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg font-semibold transition">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
    BACK
</a>
@vite(['resources/css/app.css' , 'resources/js/app.js'])
<section class="bg-gray-50 w-full sm:p-5 sm:rounded-lg">
    <div class="w-full flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div class="w-full md:w-1/2">
          <div class="flex items-center gap-2">
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd" />
            </svg>
        </div>
        <input type="text" id="simple-search"
               oninput="searchProducts(this.value)"
               value="{{ request('search') }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
               placeholder="Search produk...">
    </div>
</div>



        </div>
        <div class="w-full md:w-auto flex items-center justify-end">
            <a href="{{ route('produk.create') }}" class="border-2 p-3 flex items-center justify-center text-black bg-blue-300 hover:bg-gray-300 focus:ring-4 focus:ring-primary-300 font-medium rounded-full text-sm px-4 py-2">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add product
            </a>
        </div>
    </div>
</section>

                
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-4 py-3">Product Name</th>
                <th class="px-4 py-3">Category</th>
                <th class="px-4 py-3">Product Code</th>
                <th class="px-4 py-3">Stock</th>
                <th class="px-4 py-3">Price</th>
                <th class="px-4 py-3">Description</th>
                <th class="px-4 py-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="border-b dark:border-gray-700 text-black font-semibold">
                <td class="px-4 py-3">{{ $product->nama_produk }}</td>
                <td class="px-4 py-3">{{ $product->kategori_produk }}</td>
                <td class="px-4 py-3">{{ $product->kode_produk }}</td>
                <td class="px-4 py-3">{{ $product->stok_produk }}</td>
                <td class="px-4 py-3">Rp{{ number_format($product->harga_produk, 0, ',', '.') }}</td>
                <td class="px-4 py-3">{{ $product->deskripsi_produk }}</td>
                <td class="px-4 py-3">
<div class="flex justify-center gap-2">
    <button onclick="openModal('{{ $product->id }}')" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
        Detail
    </button>
    <a href="{{ route('produk.edit', $product->id) }}" class="bg-yellow-400 text-black text-sm px-3 py-1 rounded hover:bg-yellow-500">
        Edit
    </a>

    <form action="{{ route('produk.toggleStatus', $product->id) }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="px-2 py-1 text-white rounded 
        {{ $product->produk_state === 'nonaktif' ? 'bg-green-600 hover:bg-green-700' : 'bg-red-600 hover:bg-red-700' }}">
        {{ $product->produk_state === 'nonaktif' ? 'Aktifkan' : 'Nonaktifkan' }}
    </button>
</form>
</div>


            <!-- Modal -->
<div id="modal-{{ $product->id }}" 
     class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm hidden">
    <div class="relative bg-white w-full max-w-md p-6 rounded-2xl shadow-2xl mx-4 animate-fade-in">

        <!-- Header -->
        <div class="text-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Detail Produk</h2>
            <div class="w-16 h-1 mx-auto bg-blue-500 rounded my-2"></div>
        </div>

        <!-- Gambar Produk -->
        <img src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}" 
             alt="Gambar Produk" 
             class="w-40 h-40 object-cover border-4 border-blue-500 mx-auto mb-4 shadow-md">

        <!-- Info Produk -->
        <div class="text-gray-700 space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="font-medium">Nama</span>
                <span>{{ $product->nama_produk }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Kode</span>
                <span>{{ $product->kode_produk }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Kategori</span>
                <span>{{ $product->kategori_produk }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Harga</span>
                <span>Rp{{ number_format($product->harga_produk, 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Stok</span>
                <span>{{ $product->stok_produk }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Status</span>
                <span>{{ ucfirst($product->status_produk) }}</span>
            </div>
            <div>
                <p class="font-medium mb-1">Deskripsi:</p>
                <p class="text-justify text-gray-600 leading-relaxed">{{ $product->deskripsi_produk }}</p>
            </div>
        </div>

        <!-- Tombol Tutup -->
        <div class="mt-6 text-center">
            <button onclick="closeModal('{{ $product->id }}')" 
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Tutup
            </button>
        </div>
    </div>
</div>
            @endforeach
            </tbody>
                </table>
            </div>
            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
        Showing
        <span class="font-semibold text-gray-500">{{ $products->firstItem() }}-{{ $products->lastItem() }}</span>
        of
        <span class="font-semibold text-gray-500">{{ $products->total() }}</span>
    </span>
<ul class="inline-flex items-stretch -space-x-px">
    {{-- Previous Page --}}
    <li>
        <a href="{{ $products->previousPageUrl() ? $products->previousPageUrl().'#daftar-barang' : '#' }}"
           class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
           @if (!$products->onFirstPage()) rel="prev" @endif>
            <span class="sr-only">Previous</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
    </li>

    {{-- Page Numbers --}}
    @for ($page = 1; $page <= $products->lastPage(); $page++)
        @if ($page == $products->currentPage())
            <li>
                <a href="#" aria-current="page"
                   class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                    {{ $page }}
                </a>
            </li>
        @elseif ($page == 1 || $page == $products->lastPage() || abs($page - $products->currentPage()) <= 1)
            <li>
                <a href="{{ $products->url($page) }}#daftar-barang"
                   class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    {{ $page }}
                </a>
            </li>
        @elseif ($page == $products->currentPage() - 2 || $page == $products->currentPage() + 2)
            <li>
                <span class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    ...
                </span>
            </li>
        @endif
    @endfor

    {{-- Next Page --}}
    <li>
        <a href="{{ $products->nextPageUrl() ? $products->nextPageUrl().'#daftar-barang' : '#' }}"
           class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
           @if ($products->hasMorePages()) rel="next" @endif>
            <span class="sr-only">Next</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
    </li>
</ul>
</nav>
        </div>
    </div>
    </section>



</body>




