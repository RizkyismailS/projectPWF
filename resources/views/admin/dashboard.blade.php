<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link
      rel="shortcut icon"
      href="./assets/images/css/logo/logo-transparent.png"
      type="image/x-icon"
    /> 
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <title>admin Page</title>
</head>
<body class="bg-gray-100">
<!-- start header -->
@include('admin.navbar')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
@include('admin.sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    <div class="grid grid-cols-3 lg:grid-cols-1 gap-5 justify-center mx-auto">
      <!-- congrats -->
      <div class="items-center card p-0 overflow-hidden col-span-2 lg:col-span-1 flex flex-row lg:flex-col">
        <div class="card-body flex flex-row lg:flex-col items-center justify-between">
          <div class="flex flex-col">
            <h1 class="font-extrabold text-lg">Selamat Datang</h1>
            <p class="text-gray-600 text-sm mt-2">You have successfully logged in to the admin dashboard.</p>
          </div>
        </div>
</div>      
    </div>
    <div class="grid grid-cols-5 gap-5 mt-5 lg:grid-cols-2">
</div>
    <!-- end status -->

    <!-- best seller & traffic -->
    <div class="grid grid-cols-2 lg:grid-cols-1 gap-5 mt-5">
      <div class="card">

    <div class="card-body">
        <div class="flex flex-row justify-between items-center">
            <h1 class="font-extrabold text-lg">best sellers</h1>
            <a href="#" class="btn-gray text-sm">view all</a>
        </div>
    
        <table class="table-auto w-full mt-5 text-right">
    
            <thead>
                <tr>
                    <td class="py-4 font-extrabold text-sm text-left">product</td>
                    <td class="py-4 font-extrabold text-sm">price</td>
                    <td class="py-4 font-extrabold text-sm">sold</td>
                    <td class="py-4 font-extrabold text-sm">profit</td>
                </tr>
            </thead>
    
            <tbody>
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="img/sneakers.svg" class="object-cover">
                        </div>
                        Sneakers and Tennis 
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="img/socks.svg" class="object-cover">
                        </div>
                        Crazy Socks & Graphic Socks for Men
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="img/soccer.svg" class="object-cover">
                        </div>
                        Adidas Soccer Ball
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="img/food.svg" class="object-cover">
                        </div>
                        Best Chocolate Chip Cookies
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
            </tbody>
    
        </table>
    
    </div>
</div>
      <!-- Recent Orders Section -->
<div class="card">    
    <div class="card-body">
        <h2 class="font-bold text-lg mb-10">Recent Orders</h2>
        
        <!-- Start a Table -->
        <table class="table-fixed w-full">
            <!-- Table Head -->
            <thead class="text-left">
                <tr>
                    <th class="w-1/4 pb-5 text-sm font-extrabold tracking-wide">Customer</th>
                    <th class="w-1/4 pb-5 text-sm font-extrabold tracking-wide">Product</th>
                    <th class="w-1/4 pb-5 text-sm font-extrabold tracking-wide">Price</th>
                    <th class="w-1/4 pb-5 text-sm font-extrabold tracking-wide">Status</th>
                    <th class="w-1/4 pb-5 text-sm font-extrabold tracking-wide">Gambar Product</th>
                </tr>
            </thead>
            <!-- End Table Head -->

            <!-- Table Body -->
            <tbody class="text-left text-gray-600">
                @foreach ($order as $order)
                <tr>
                    <!-- Customer Name -->
                    <td class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full mt-5">
    <div class="w-8 h-8 overflow-hidden rounded-full">
        <img src="{{ asset('storage/' . ($order->user->profile_picture ?? 'user_profile/default.jpg')) }}" class="object-cover">
    </div>
    <p class="ml-3 name-1">{{ $order->user->name ?? '-' }}</p>
</td>

                    <!-- Product -->
                    <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">
                        {{ $order->product->nama_produk ?? '-' }}
                    </td>
                    <!-- Price -->
                    <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">
                        Rp{{ number_format($order->total_price, 2, ',', '.') }}
                    </td>
                    <!-- Status -->
                    <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">
                        {{ ucfirst($order->status) }}
                    </td>
                    <!-- Product Image -->
                    <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">
                        <img src="{{ asset('assets/images/produk/' . $order->product->gambar_produk) }}" alt="{{ $order->product->nama_produk }}">
                    </td>
                </tr>
                @endforeach
            </tbody>
            <!-- End Table Body -->
        </table>
        <!-- End a Table -->
    </div>
</div>

          
    </div>
    <!-- end best seller & traffic -->
        

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>


<!-- end script -->

</body>
</html>
