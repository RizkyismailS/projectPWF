<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
    <link rel="shortcut icon" href="assets/images/logo-transparent.png" type="image/x-icon" />    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>

  <body>
    @include('layout.web.navbar')
  <section class="py-30 relative">
        <div class="w-full">
<div class="flex flex-row items-center justify-between w-full">
    <!-- Left menu items -->
    <ul class="flex flex-row items-center gap-4 sm:gap-3 sm:px-6 lg:px-8 mx-auto">
        <!-- Finance -->
        <li class="flex items-center cursor-pointer outline-none group">
            <svg width="24" height="24" ...>...</svg>
            <span class="font-normal text-lg leading-8 text-indigo-600 ml-2 mr-3 transition-all duration-500 group-hover:text-indigo-600">Finance</span>
            <button class="flex aspect-square h-6 rounded-full border border-indigo-600 items-center justify-center font-manrope font-medium text-base text-indigo-600 transition-all duration-500 group-hover:border-indigo-600 group-hover:text-indigo-600">8</button>
        </li>
        <!-- Management -->
        <li class="flex items-center cursor-pointer outline-none group">
            <svg width="24" height="24" ...>...</svg>
           <a href="{{route('createProduct')}}" class="font-normal text-lg leading-8 text-black pl-2 pr-3 transition-all duration-500 group-hover:text-indigo-600">create product</a>
            <span class="w-6 h-6 rounded-full border border-gray-900 flex items-center justify-center font-manrope font-medium text-base text-gray-900 transition-all duration-500 group-hover:border-indigo-600 group-hover:text-indigo-600">3</span>
        </li>
        <!-- Today's Deal -->
        <li class="flex items-center cursor-pointer outline-none group">
            <svg width="24" height="24" ...>...</svg>
            <span class="font-normal text-lg leading-8 text-black pl-2 pr-3 transition-all duration-500 group-hover:text-indigo-600">Today’s deal</span>
            <span class="w-6 h-6 rounded-full border border-gray-900 flex items-center justify-center font-manrope font-medium text-base text-gray-900 transition-all duration-500 group-hover:border-indigo-600 group-hover:text-indigo-600">1</span>
        </li>
    </ul>

    <!-- Right dropdown filter -->
    <div class="relative w-full max-w-sm mr-6">
        <svg class="absolute top-1/2 -translate-y-1/2 left-2 z-50" width="20" height="20" ...></svg>
        <select id="Offer"
            class="h-12 border border-gray-300 text-gray-900 pl-11 text-base font-normal leading-7 rounded-full block w-full  px-4 appearance-none relative focus:outline-none bg-white transition-all duration-500 hover:border-gray-400 hover:bg-gray-50 focus-within:bg-gray-50">
            <option selected>Sort by time(high to low)</option>
            <option value="option 1">option 1</option>
            <option value="option 2">option 2</option>
            <option value="option 3">option 3</option>
            <option value="option 4">option 4</option>
        </select>
        <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16" ...></svg>
    </div>
</div>

            <svg class="my-7 w-full" xmlns="http://www.w3.org/2000/svg" width="1216" height="2" viewBox="0 0 1216 2"
                fill="none">
                <path d="M0 1H1216" stroke="#E5E7EB" />
            </svg>
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-3 w-full max-md:max-w-md">

                    <div class="box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">
                        <h6 class="font-medium text-base leading-7 text-black mb-5">Your Workspace</h6>
                        <div class="flex items-center mb-5 gap-1">
                            <div class="relative w-full">
                                <select id="FROM"
                                    class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                    <option selected>Min</option>
                                    <option value="option 1">option 1</option>
                                    <option value="option 2">option 2</option>
                                    <option value="option 3">option 3</option>
                                    <option value="option 4">option 4</option>
                                </select>
                                <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="px-1 font-normal text-sm leading-6 text-gray-600">to</p>
                            <div class="relative w-full">
                                <select id="FROM"
                                    class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                    <option selected>Max</option>
                                    <option value="option 1">option 1</option>
                                    <option value="option 2">option 2</option>
                                    <option value="option 3">option 3</option>
                                    <option value="option 4">option 4</option>
                                </select>
                                <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-600 w-full">Zip
                            Code</label>
                        <div class="relative w-full mb-8">
                            <select id="FROM"
                                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                <option selected>Write code</option>
                                <option value="option 1">option 1</option>
                                <option value="option 2">option 2</option>
                                <option value="option 3">option 3</option>
                                <option value="option 4">option 4</option>
                            </select>
                            <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <button
                            class="w-full py-2.5 flex items-center justify-center gap-2 rounded-full bg-indigo-600 text-white font-semibold text-xs shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-200  ">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.4987 13.9997L13.1654 12.6663M13.832 7.33301C13.832 10.6467 11.1457 13.333 7.83203 13.333C4.51832 13.333 1.83203 10.6467 1.83203 7.33301C1.83203 4.0193 4.51832 1.33301 7.83203 1.33301C11.1457 1.33301 13.832 4.0193 13.832 7.33301Z"
                                    stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Search
                        </button>
                    </div>

                    <div class="mt-7 box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">
                        <div class="flex items-center justify-between w-full pb-3 border-b border-gray-200 mb-7">
                            <p class="font-medium text-base leading-7 text-black ">Filter Plans</p>
                            <p
                                class="font-medium text-xs text-gray-500 cursor-pointer transition-all duration-500 hover:text-indigo-600">
                                RESET</p>
                        </div>


                        <div class="w-full mb-7">
                            <div class='accordion-group grid grid-cols-1 gap-5 sm:gap-9'
                                data-accordion="default-accordion">
                                <div class='accordion '
                                    id='category-heading-one'>
                                    <button
                                        class='accordion-toggle group accordion-active:text-indigo-600 inline-flex items-center justify-between leading-8 text-gray-600 w-full transition duration-500 hover:text-indigo-600 active:text-indigo-600'
                                        aria-controls='category-collapse-one'>
                                        <h5 class="font-medium text-sm text-gray-900">
                                            Availability
                                        </h5>
                                        <svg class='text-gray-900 transition duration-500 group-hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:rotate-180'
                                            width='22' height='22' viewBox='0 0 22 22' fill='none'
                                            xmlns='http://www.w3.org/2000/svg'>
                                            <path
                                                d='M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25'
                                                stroke='currentColor' stroke-width='1.6' stroke-linecap='round'
                                                stroke-linejoin='round'></path>
                                        </svg>

                                    </button>
                                    <div id='category-collapse-one'
                                        class='accordion-content w-full px-0 overflow-hidden pr-4 max-h-0 '
                                        aria-labelledby='category-heading-one'>
                                        
                                        <div class="box flex flex-col gap-2 mt-5">
                                           
                                            <div class="flex items-center mb-2">
                                                <input id="checkbox-option-1" type="checkbox" value="" class="checkbox-white w-5 h-5 appearance-none border border-gray-500  rounded mr-1 hover:border-indigo-100 hover:bg-indigo-600 checked:bg-no-repeat checked:bg-center checked:border-indigo-100 checked:bg-indigo-600 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                                <label for="checkbox-option-1" class="ml-1 font-normal text-xs cursor-pointer  text-gray-600">option-1</label>
                                                </div>
                                                <div class="flex items-center mb-2">
                                                    <input id="checkbox-option-2" type="checkbox" value="" class="checkbox-white w-5 h-5 appearance-none border border-gray-500  rounded mr-1 hover:border-indigo-100 hover:bg-indigo-600 checked:bg-no-repeat checked:bg-center checked:border-indigo-600 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                                    <label for="checkbox-option-2" class="ml-1 font-normal text-xs cursor-pointer  text-gray-600">option-2</label>
                                                    </div>
                                                    <div class="flex items-center mb-2">
                                                        <input id="checkbox-option-3" type="checkbox" value="" class="checkbox-white w-5 h-5 appearance-none border border-gray-500  rounded mr-1 hover:border-indigo-600 hover:bg-indigo-600 checked:bg-no-repeat checked:bg-center checked:border-indigo-600 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                                        <label for="checkbox-option-3" class="ml-1 font-normal text-xs cursor-pointer  text-gray-600">option-3</label>
                                                        </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="Offer" class="font-medium text-sm leading-6 text-gray-600 mb-1">Offer</label>
                        <div class="relative w-full mb-7">
                            <select id="Offer"
                                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                <option selected>5% off upi discount</option>
                                <option value="option 1">option 1</option>
                                <option value="option 2">option 2</option>
                                <option value="option 3">option 3</option>
                                <option value="option 4">option 4</option>
                            </select>
                            <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="font-medium text-sm leading-6 text-black mb-3">Discount</p>
                        <div class="box flex flex-col gap-2">
                            <div class="flex items-center">
                                <input id="checkbox-default-1" type="checkbox" value="" class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                <label for="checkbox-default-1" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">20% or more</label>
                            </div>
                            <div class="flex items-center">
                                <input id="checkbox-default-2" type="checkbox" value="" class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                <label for="checkbox-default-2" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">30% or more</label>
                            </div>
                            <div class="flex items-center">
                                <input id="checkbox-default-3" type="checkbox" value="" class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                <label for="checkbox-default-3" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">50% or more</label>
                            </div>
                        </div>
                    </div>
                </div>
           <div class="col-span-12 md:col-span-9 px-4 sm:px-6 lg:px-8 max-w-7xl">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- Produk 1 -->
    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition max-w-xs">
      <img
        class="h-44 w-full object-cover object-center"
        src="assets/images/produk/images.jpeg"
        alt="Produk 1"
      />
      <div class="p-4">
        <div class="flex items-center justify-between mb-2">
          <span
            class="mb-12 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
            BARU</span>
          <span class="text-xs text-gray-500"></span>
        </div>
        <h3 class="text-md font-semibold text-gray-800 truncate mb-1">
          Oreo Strawberry Cream
        </h3>
        <p class="text-gray-700 font-bold mb-1">
          Rp 500.000 <span class="text-sm font-normal text-gray-500">/ pack</span>
        </p>
        <div class="flex items-center text-sm text-yellow-500 mb-3">
          <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
          <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
          <i class="far fa-star mr-2"></i>
          <span class="text-gray-600">34 ulasan</span>
        </div>
        <a
          href="/product/"
          class="inline-block mt-2 text-sm text-blue-600 hover:underline font-medium"
        >
          Lihat Selengkapnya →
        </a>
      </div>
    </div>

    <!-- Bisa copy paste div produk di atas untuk produk selanjutnya -->
    <!-- Produk 2 -->
    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition max-w-xs">
      <img
        class="h-44 w-full object-cover object-center"
        src="assets/images/produk/images.jpeg"
        alt="Produk 1"
      />
      <div class="p-4">
        <div class="flex items-center justify-between mb-2">
          <span
            class="mb-12 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
            BARU</span>
          <span class="text-xs text-gray-500"></span>
        </div>
        <h3 class="text-md font-semibold text-gray-800 truncate mb-1">
          Oreo Strawberry Cream
        </h3>
        <p class="text-gray-700 font-bold mb-1">
          Rp 500.000 <span class="text-sm font-normal text-gray-500">/ pack</span>
        </p>
        <div class="flex items-center text-sm text-yellow-500 mb-3">
          <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
          <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
          <i class="far fa-star mr-2"></i>
          <span class="text-gray-600">34 ulasan</span>
        </div>
        <a
          href="/product/"
          class="inline-block mt-2 text-sm text-blue-600 hover:underline font-medium"
        >
          Lihat Selengkapnya →
        </a>
      </div>
    </div>
    <!-- Produk 3 -->
    <!-- Produk 1 -->
    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition max-w-xs">
      <img
        class="h-44 w-full object-cover object-center"
        src="assets/images/produk/images.jpeg"
        alt="Produk 1"
      />
      <div class="p-4">
        <div class="flex items-center justify-between mb-2">
          <span
            class="mb-12 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
            BARU</span>
          <span class="text-xs text-gray-500"></span>
        </div>
        <h3 class="text-md font-semibold text-gray-800 truncate mb-1">
          Oreo Strawberry Cream
        </h3>
        <p class="text-gray-700 font-bold mb-1">
          Rp 500.000 <span class="text-sm font-normal text-gray-500">/ pack</span>
        </p>
        <div class="flex items-center text-sm text-yellow-500 mb-3">
          <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
          <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
          <i class="far fa-star mr-2"></i>
          <span class="text-gray-600">34 ulasan</span>
        </div>
        <a
          href="/product/"
          class="inline-block mt-2 text-sm text-blue-600 hover:underline font-medium"
        >
          Lihat Selengkapnya →
        </a>
      </div>
    </div>
  </div>
</div>

</div>
    </section>
                                            

    <script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  </body>
</html>



               