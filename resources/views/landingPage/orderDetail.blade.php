@vite(['resources/css/app.css', 'resources/js/app.js'])
<section class="relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
        @if(!$order || $order->status === 'canceled')

            <div id="status-order" class="main-box border border-gray-200 rounded-xl pt-6 max-w-xl max-lg:mx-auto lg:max-w-full flex flex-col items-center justify-center min-h-[300px]">
                <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
                <h2 class="text-2xl font-semibold text-gray-500 mb-2">Belum ada pesanan</h2>
                <p class="text-gray-400 mb-4">Silakan checkout produk terlebih dahulu untuk melihat detail pesanan di sini.</p>
                <a href="{{ route('produk') }}" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Belanja Sekarang</a>
            </div>
        @else
            <div class="main-box border border-gray-200 rounded-xl pt-6 max-w-xl max-lg:mx-auto lg:max-w-full">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between px-6 pb-6 border-b border-gray-200">
                    <div class="data">
                        <p class="font-semibold text-base leading-7 text-black">Order Id: <span class="text-indigo-600 font-medium">{{ $order->order_code }}</span></p>
                        <p class="font-semibold text-base leading-7 text-black mt-4">Order Payment: <span class="text-gray-400 font-medium">{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</span></p>
                    </div>
                </div>
                <div class="w-full px-3 min-[400px]:px-6">
                    <div class="flex flex-col lg:flex-row items-center py-6 border-b border-gray-200 gap-6 w-full">
                        <div class="img-box max-lg:w-full">
                            <img src="{{ asset('assets/images/produk/' . $order->product->gambar_produk) }}" alt="{{ $order->product->nama_produk }}" class="aspect-square w-full lg:max-w-[140px] rounded-xl object-cover">
                        </div>
                        <div class="flex flex-row items-center w-full ">
                            <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
                                <div class="flex items-center">
                                    <div class="">
                                        <h2 class="font-semibold text-xl leading-8 text-black mb-3">{{ $order->product->nama_produk }}</h2>
                                        <p class="font-normal text-lg leading-8 text-gray-500 mb-3">By: {{ $order->product->supplier ? $order->product->supplier->nama_perusahaan : 'Supplier tidak tersedia' }}</p>
                                        <div class="flex items-center ">
                                            <p class="font-medium text-base leading-7 text-black pr-4 mr-4 border-r border-gray-200">jumlah: <span class="text-gray-500">{{ $order->quantity }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-5">
                                    <div class="col-span-5 lg:col-span-1 flex items-center max-lg:mt-3">
                                        <div class="flex gap-3 lg:block">
                                            <p class="font-medium text-sm leading-7 text-black">Price</p>
                                            <p class="lg:mt-4 font-medium text-sm leading-7 text-indigo-600">Rp{{ number_format($order->total_price, 2, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-span-5 lg:col-span-2 flex items-center max-lg:mt-3 ">
                                        <div class="flex gap-3 lg:block">
                                            <p class="font-medium text-sm leading-7 text-black">Status</p>
                                            <p class="font-medium text-sm leading-6 whitespace-nowrap py-0.5 px-3 rounded-full lg:mt-3 bg-emerald-50 text-emerald-600">{{ ucfirst($order->status) }}</p>
                                        </div>
                                    </div>
                                    <div class="col-span-5 lg:col-span-2 flex items-center max-lg:mt-3">
                                        <div class="flex gap-3 lg:block">
                                            <p class="font-medium text-sm whitespace-nowrap leading-6 text-black">Expected Delivery Time</p>
                                            <p class="font-medium text-base whitespace-nowrap leading-7 lg:mt-3 text-emerald-500">23rd March 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full border-t border-gray-200 px-6 flex flex-col lg:flex-row items-center justify-between ">
                    <div class="flex flex-col sm:flex-row items-center max-lg:border-b border-gray-200">
                        <button id="cancelOrderBtn" onclick="cancelOrder({{ $order->id }})" type="button"
                            class="flex outline-0 py-6 sm:pr-6 sm:border-r border-gray-200 whitespace-nowrap gap-2 items-center justify-center font-semibold group text-lg text-black bg-white transition-all duration-500 hover:text-indigo-600">
                            <svg class="stroke-black transition-all duration-500 group-hover:stroke-indigo-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <path d="M5.5 5.5L16.5 16.5M16.5 5.5L5.5 16.5" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                            Cancel Order
                        </button>
                        <p class="font-medium text-lg text-gray-900 pl-6 py-3 max-lg:text-center">Paid using : {{$order->name_on_card}} <span class="text-gray-500"></span></p>
                    </div>
                    <p class="font-semibold text-lg text-black py-6">Total Price: <span class="text-indigo-600">Rp{{ number_format($order->total_price, 2, ',', '.') }}</span></p>
                </div>
            </div>
        @endif
    </div>
</section>
<script>

</script>
