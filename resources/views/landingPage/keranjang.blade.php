@include('layout.web.navbar')

<section class="py-24 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
        <h2 class="title font-manrope font-bold text-4xl leading-10 mb-8 text-center text-black">Shopping Cart</h2>

        @if($cartItems->isEmpty())
            <p class="text-center text-gray-500">Your cart is empty.</p>
        @else
            @foreach($cartItems->groupBy(function($item) {
                // Gabungkan berdasarkan product_id dan variant_id agar tiap kombinasi produk+varian tampil sendiri
                return $item->product_id . '-' . ($item->variant_id ?? '0');
            }) as $groupKey => $items)
                @php
                    $cartItem = $items->first();
                    $product = $cartItem->product;
                    $variant = $cartItem->variant ?? null;
                    $totalQuantity = $items->sum('quantity');
                    $totalPrice = $product->harga_produk * $totalQuantity;
                @endphp
                <a href="{{ route('produk.detail', $product->id) }}">
                    <div class="rounded-3xl border-2 border-gray-200 p-4 lg:p-8 grid grid-cols-12 mb-8 max-lg:max-w-lg max-lg:mx-auto gap-y-4">
                        <div class="col-span-12 lg:col-span-2 img box">
                            <img src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}" alt="{{ $product->nama_produk }}" class="max-lg:w-full lg:w-[180px] rounded-lg object-cover">
                        </div>
                        <div class="col-span-12 lg:col-span-10 detail w-full lg:pl-3">
                            <div class="flex items-center justify-between w-full mb-4">
                                <h5 class="font-manrope font-bold text-2xl leading-9 text-gray-900">{{ $product->nama_produk }}</h5>
                                <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-full group flex items-center justify-center focus-within:outline-red-500">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="fill-red-50 transition-all duration-500 group-hover:fill-red-400" cx="17" cy="17" r="17" />
                                            <path class="stroke-red-500 transition-all duration-500 group-hover:stroke-white" d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997H12.4673V18.8886C12.4673 20.6695 12.4673 21.5599 13.0206 22.1131C13.5738 22.6664 14.4642 22.6664 16.2451 22.6664H17.7562C19.5371 22.6664 20.4275 22.6664 20.9807 22.1131C21.534 21.5599 21.534 20.6695 21.534 18.8886V13.5997Z" stroke="#EF4444" stroke-width="1.6" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <p class="font-normal text-base leading-7 text-gray-500 mb-2">{{ $product->deskripsi_produk }}</p>
                            {{-- Tampilkan varian yang dipilih --}}
                            @if($variant)
                                <div class="mb-2 flex items-center gap-2">
                                    <span class="text-xs font-semibold text-gray-600 bg-gray-200 px-2 py-1 rounded">
                                        Varian: {{ $variant->name }}
                                    </span>
                                    @if($variant->images->first())
                                        <img src="{{ asset('assets/images/variant/' . $variant->images->first()->image_path) }}" alt="Varian" class="w-8 h-8 object-cover rounded">
                                    @endif
                                </div>
                            @endif
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <input type="text" id="number" class="border border-gray-200 rounded-full w-10 aspect-square outline-none text-gray-900 font-semibold text-sm py-1.5 px-3 bg-gray-100 text-center" value="{{ $totalQuantity }}" readonly>
                                </div>
                                <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right">Rp{{ number_format($totalPrice, 2) }}</h6>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

            <div class="flex flex-col md:flex-row items-center md:items-center justify-between lg:px-6 pb-6 border-b border-gray-200 max-lg:max-w-lg max-lg:mx-auto">
                <h5 class="text-gray-900 font-manrope font-semibold text-2xl leading-9 w-full max-md:text-center max-md:mb-4">Subtotal</h5>
                <div class="flex items-center justify-between gap-5 ">
                    <button class="rounded-full py-2.5 px-3 bg-indigo-50 text-indigo-600 font-semibold text-xs text-center whitespace-nowrap transition-all duration-500 hover:bg-indigo-100">Promo Code?</button>
                    <h6 class="font-manrope font-bold text-3xl lead-10 text-indigo-600">Rp{{ number_format($subtotal, 2) }}</h6>
                </div>
            </div>
            <div class="max-lg:max-w-lg max-lg:mx-auto">
                <p class="font-normal text-base leading-7 text-gray-500 text-center mb-5 mt-6">Shipping taxes, and discounts calculated at checkout</p>
                <button onclick="window.location.href='{{ route('checkout') }}'" class="rounded-full py-4 px-6 bg-indigo-600 text-white font-semibold text-lg w-full text-center transition-all duration-500 hover:bg-indigo-700">Checkout</button>
            </div>
        @endif
    </div>
</section>