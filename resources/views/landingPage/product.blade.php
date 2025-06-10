<!doctype html>
<html lang="en">
<head>
    <!-- ... -->
</head>
<body>
    @include('layout.web.navbar')
    <section class="bg-gray-50 py-6">
        <div class="max-w-[4900px] px-4 sm:px-6 lg:px-8">
            {{-- Menu Filter Horizontal --}}
            <div class="flex flex-wrap items-center gap-4 mb-6 bg-white p-4 rounded-xl shadow sticky top-20 ml-[125px] md:ml-[370px]">
                <div class="flex items-center gap-2">
                    <svg width="24" height="24"></svg>
                    <span class="font-normal text-lg leading-8 text-indigo-600">KATEGORI</span>
                    <span class="text-blue-600 font-semibold text-lg">: {{ request('category', 'Semua') }}</span>
                </div>
                <div class="relative ml-auto items-center">
                    <select id="categoryFilter"
                        class="h-12 border border-gray-300 text-gray-900 text-base font-normal leading-7 rounded-full block w-full pl-4 pr-10 appearance-none bg-white items-center"
                        onchange="window.location.href = '?category=' + this.value">
                    <option value="" {{ request('category') == '' ? 'selected' : '' }}>Semua Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                    </select>
                    <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50 pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 11L3 6H13L8 11Z" fill="#000"/>
                  </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Sidebar Filter -->
                <div class="hidden md:block md:col-span-1">
                    @include('layout.web.sidebarProduct')
                </div>
                {{-- main product --}}
                <div class="md:col-span-3">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Sidebar Filter (hanya tampil di desktop) -->
                        <!-- Main Product -->
                        <div class="md:col-span-3">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                                @foreach($products as $product)
                                    <!-- Produk  -->
                                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                                        <img class="h-45 w-full object-cover object-center" src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}" alt="{{ $product->nama_produk }}" />
                                        <div class="p-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="mb-5 inline-block rounded bg-blue-500 px-4 py-1 text-center text-xs font-medium text-white" >{{ ucfirst($product->status_produk) }}
                                                </span>
                                            </div>
                                            <h3 class="text-md font-semibold text-gray-800 truncate mb-1">
                                                {{ $product->nama_produk }}
                                            </h3>
                                            <div class="text-gray-700 space-y-2 text-sm">
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
                                            </div>
                                            <p class="text-gray-700 font-bold mb-1">
                                                Rp {{ number_format($product->harga_produk, 0, ',', '.') }} <span class="text-sm font-normal text-gray-500">/ pack</span>
                                            </p>
                                            <div class="flex items-center text-sm text-yellow-500 mb-3">
                                                <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
                                                <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
                                                <i class="far fa-star mr-2"></i>
                                                {{-- <span class="text-gray-600">34 ulasan</span> --}}
                                            </div>
                                            <a href="#" class="inline-block mt-2 text-sm text-blue-600 hover:underline font-medium">
                                                Lihat Selengkapnya →
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-8 flex justify-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.web.footer')
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
