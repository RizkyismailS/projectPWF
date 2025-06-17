<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Navbar</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Alpine.js for dropdowns -->
</head>
<body class="antialiased text-gray-100">

<!-- =================== Navbar Start =================== -->
<header class="fixed inset-x-0 top-0 z-50 bg-blue-300 backdrop-blur-lg shadow-sm dark:bg-blue-800/80">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <nav class="flex h-20 items-center justify-between">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
        <img src="{{ asset('assets/images/logo/logo-transparent.png') }}" alt="Logo" class="w-20 h-20 object-contain" />
      </a>

      <!-- Desktop Menu -->
      <ul class="hidden lg:flex gap-8 font-medium items-center h-full">
        <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
        <li><a href="/#about" class="text-white">About</a></li>
        <li><a href="{{ route('product') }}" class="text-white">Product</a></li>
        <li><a href="/#team" class="text-white">Team</a></li>
        <li><a href="/#contact" class="text-white">Contact</a></li>
        <li><a href="/#blog" class="text-white">Blog</a></li>
      </ul>

        @auth
      <!-- Client Tools: Cart + Profile -->
@if(Auth::user()->type == 'client')
<div class="flex items-center gap-4">
    <!-- Cart Icon (Link to Cart Page) -->
    <a href="{{route('cart')}}" class="relative group">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke-width="1.5" stroke="currentColor"
             class="h-6 w-6 text-white group-hover:text-yellow-300 transition">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218
                    c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0
                    11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
        <span
            class="absolute -top-1.5 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-red-600 text-xs text-white">
            {{ $cartCount ?? 0 }}
        </span>
      </a>
      @endif

    <!-- Profile Dropdown Button -->
    <div class="relative">
        <button id="profileDropdownBtn" type="button" class="flex items-center gap-2 focus:outline-none">
            <img src="{{ Auth::user()->profile_picture ?? asset('assets/images/user_profile/default.jpg') }}"
                 alt="Profile" class="w-10 h-10 rounded-full border" />
            <span class="font-semibold hidden md:inline text-white">{{ Auth::user()->name }}</span>
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>
</div>


<!-- Pop-up Dropdown (portal style, not affected by parent layout) -->
<div id="profileDropdownPopup" class="absolute z-[9999] hidden min-w-[12rem] rounded-md shadow-lg  bg-blue-900 ring-1 ring-black/5"
     style="top: 80px; left: 0;">
  <a href="{{ route('userSetting') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-700">Setting</a>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-slate-700">Logout</button>
  </form>
</div>

         @else
        <div class="flex items-center gap-2">
          <a href="{{ route('login') }}" class="text-white hover:text-primary-600">Sign In</a>
          <a href="{{ route('register') }}" class="px-4 py-2 rounded-md text-white bg-blue-600 hover:bg-white hover:text-red-600">Sign Up</a>
        </div>
        @endauth
      </div>

      <!-- Mobile Hamburger -->
      <button id="mobileToggle" class="lg:hidden flex items-center focus:outline-none">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </nav>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="lg:hidden hidden border-t bg-white dark:bg-slate-900">
    <ul class="flex flex-col gap-1 p-4 font-medium">
      <li><a href="{{ route('home') }}" class="block py-2 hover:text-primary-600">Home</a></li>
      <li><a href="/#about" class="block py-2 hover:text-primary-600">About</a></li>
      <li><a href="{{ route('product') }}" class="block py-2 hover:text-primary-600">Product</a></li>
      <li><a href="/#team" class="block py-2 hover:text-primary-600">Team</a></li>
      <li><a href="/#contact" class="block py-2 hover:text-primary-600">Contact</a></li>
      <li><a href="/#blog" class="block py-2 hover:text-primary-600">Blog</a></li>
    </ul>
    <div class="border-t p-4 flex flex-col gap-2">
      @auth
      <a href="{{ route('userSetting') }}" class="block py-2 hover:text-primary-600">Setting</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full text-left py-2 hover:text-primary-600">Logout</button>
      </form>
      @else
      <a href="{{ route('login') }}" class="block py-2 hover:text-primary-600">Sign In</a>
      <a href="{{ route('register') }}" class="block py-2 hover:text-primary-600">Sign Up</a>
      @endauth
    </div>
  </div>
</header>
<!-- =================== Navbar End =================== -->

<main class="pt-20">
  <!-- Page content goes here -->
</main>

<!-- ========== Scripts ========== -->
<script>
  // Pop-up Dropdown JS
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('profileDropdownBtn');
    const popup = document.getElementById('profileDropdownPopup');
    if (!btn || !popup) return;

    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      // Get button position
      const rect = btn.getBoundingClientRect();
      // Set popup position (fixed relative to viewport)
      popup.style.top = (rect.bottom + 8) + 'px';
      popup.style.left = rect.left + 'px';
      popup.classList.toggle('hidden');
    });

    document.addEventListener('click', function (e) {
      if (!popup.classList.contains('hidden') && !popup.contains(e.target) && !btn.contains(e.target)) {
        popup.classList.add('hidden');
      }
    });
  });
</script>
</body>
</html>