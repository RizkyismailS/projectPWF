<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
    @include('layout.web.navbar')
    <div class="min-w-screen bg-gray-50 py-5">
        <section class="bg-white py-2 shadow-sm">
            <div class="mx-4 max-w-screen-xl sm:mx-8 xl:mx-auto">
                <nav aria-label="breadcrumb" class="my-2">
                    <ul class="flex flex-wrap items-center space-x-2 text-base font-medium">
                        <li>
                            <a href="{{ route('home') }}" class="flex items-center text-gray-800 hover:text-blue-700">
                                <svg class="h-5 w-5 mr-1 fill-gray-500" aria-hidden="true" viewBox="0 0 20 20">
                                    <path d="M10 2L2 8h2v8a2 2 0 002 2h8a2 2 0 002-2V8h2l-8-6z"/>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <svg class="h-4 w-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </li>
                        <li>
                            <a href="{{ route('cart') }}" class="text-gray-800 hover:text-blue-700">Cart</a>
                        </li>
                        <li>
                            <svg class="h-4 w-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </li>
                        <li>
                            <a href="#" class="text-gray-800 hover:text-blue-700">Checkout</a>
                        </li>
                    </ul>
                </nav>

                <div class="w-full bg-white border-t border-b border-gray-200 px-5 text-gray-800">
                    <div class="w-full">
                        <div class="-mx-3 md:flex items-start">
                            <div class="px-3 md:w-7/12 lg:pr-10">
                                @foreach($cartItems as $item)
                                    <div class="w-full mx-auto text-gray-800 font-light mb-6 border-b border-gray-200 pb-6">
                                        <div class="w-full flex items-center">
                                            <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border border-gray-200">
                                                <img src="{{ asset('assets/images/produk/' . $item->product->gambar_produk) }}" alt="">
                                            </div>
                                            <div class="flex-grow pl-3">
                                                <h6 class="font-semibold uppercase text-gray-600">{{ $item->product->nama_produk }}</h6>
                                                <p class="text-black font-semibold">x {{ $item->quantity }}</p>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-600 text-xl">Rp{{ number_format($item->product->harga_produk * $item->quantity, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
                                    <div class="w-full flex mb-3 items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Subtotal</span>
                                        </div>
                                        <div class="pl-3">
                                            <span class="font-semibold">Rp{{ number_format($subtotal, 2) }}</span>
                                        </div>
                                    </div>
                                    <div class="w-full flex items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Pajak</span>
                                        </div>
                                        <div class="pl-3">
                                            <span class="font-semibold">Rp{{ number_format($tax, 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
                                    <div class="w-full flex items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Total</span>
                                        </div>
                                        <div class="pl-3">
                                            <span class="font-semibold text-gray-400 text-sm"></span> <span class="font-semibold">Rp{{ number_format($total, 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 md:w-5/12">
                                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                                    <div class="w-full flex mb-3 items-center">
                                        <div class="w-32">
                                            <span class="text-gray-600 font-semibold">Contact</span>
                                        </div>
                                        <div class="flex-grow pl-3">
                                            <span>{{ Auth::user()->name }}</span>
                                        </div>
                                    </div>
                                    <div class="w-full flex items-center">
                                        <div class="w-32">
                                            <span class="text-gray-600 font-semibold">Address</span>
                                        </div>
                                        <div class="flex-grow pl-3">
                                            <span>{{ Auth::user()->address }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                                    <div class="w-full p-3 border-b border-gray-200">
                                        <div class="mb-5">
                                            <label for="type1" class="flex items-center cursor-pointer">
                                                <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type1" checked>
                                                <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-6 ml-3">
                                            </label>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Name on card</label>
                                                <div>
                                                    <input id="name_on_card" class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="John Smith" type="text"/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Card number</label>
                                                <div>
                                                    <input id="card_number" class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="0000 0000 0000 0000" type="text"/>
                                                </div>
                                            </div>
                                            <div class="mb-3 -mx-2 flex items-end">
                                                <div class="px-2 w-1/4">
                                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Expiration date</label>
                                                    <div>
                                                        <select id="exp_month" class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                                            <option value="01">01 - January</option>
                                                            <option value="02">02 - February</option>
                                                            <option value="03">03 - March</option>
                                                            <option value="04">04 - April</option>
                                                            <option value="05">05 - May</option>
                                                            <option value="06">06 - June</option>
                                                            <option value="07">07 - July</option>
                                                            <option value="08">08 - August</option>
                                                            <option value="09">09 - September</option>
                                                            <option value="10">10 - October</option>
                                                            <option value="11">11 - November</option>
                                                            <option value="12">12 - December</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="px-2 w-1/4">
                                                    <select id="exp_year" class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                    </select>
                                                </div>
                                                <div class="px-2 w-1/4">
                                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Security code</label>
                                                    <div>
                                                        <input class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="000" type="text"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full p-3">
                                        <label for="type2" class="flex items-center cursor-pointer">
                                            <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type2">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" width="80" class="ml-3"/>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                <input type="hidden" id="product_id" value="{{ $cartItems[0]->product_id ?? '' }}">
                                <input type="hidden" id="quantity" value="{{ $cartItems[0]->quantity ?? '' }}">
                                    <button id="payNowButton" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
       document.addEventListener('DOMContentLoaded', function() {
    const payButton = document.getElementById('payNowButton');
    
    if (!payButton) return; // Stop jika tombol tidak ada

    payButton.addEventListener('click', function() {
        // Ambil nilai input (dengan fallback jika elemen tidak ada)
        const productId = document.getElementById('product_id')?.value || null;
        const quantity = document.getElementById('quantity')?.value || null;
        const nameOnCard = document.getElementById('name_on_card')?.value;
        const cardNumber = document.getElementById('card_number')?.value;
        const expMonth = document.getElementById('exp_month')?.value;
        const expYear = document.getElementById('exp_year')?.value;

        if (!nameOnCard || !cardNumber) {
            alert("Harap isi nama dan nomor kartu!");
            return;
        }

        const expirationDate = `${expMonth}/${expYear}`;

        fetch("{{ url('/order') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                product_id: productId, // Bisa dihapus jika tidak digunakan
                quantity: quantity,    // Bisa dihapus jika tidak digunakan
                name_on_card: nameOnCard,
                card_number: cardNumber,
                expiration_date: expirationDate
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                // Redirect ke userSetting dan langsung buka Order Detail
                window.location.href = '/userSetting#detail';
            } else {
                alert('Pembayaran gagal: ' + (data.message || 'Silakan coba lagi.'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan jaringan.');
        });
    });
});

    </script>
</body>
</html>
