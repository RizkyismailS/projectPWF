<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
  <!-- logo -->
  <div class="flex-none w-56 flex flex-row items-center">
    <img src="{{ asset('/assets/images/logo/logo-transparent.png') }}" class="w-10 flex-none" />
    <strong class="capitalize ml-1 flex-1">supplynest</strong>
  </div>
  <!-- end logo -->

  <!-- navbar content -->
  <div class="flex flex-1 justify-end items-center">
    <!-- user dropdown container -->
    <div class="relative mr-20">
      <button id="profileDropdownBtn" class="flex items-center gap-2 focus:outline-none">
        <div class="w-8 h-8 overflow-hidden rounded-full">
          <img class="w-full h-full object-cover" src="{{ asset('assets/images/hero/hero-image.jpg') }}" />
        </div>
        <span class="font-semibold text-gray-800">{{ Auth::user()->name ?? 'User ' }}</span>
        <i class="fad fa-chevron-down text-xs text-gray-600"></i>
      </button>

      <!-- dropdown menu -->
      <div id="profileDropdownPopup" class="hidden absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 z-50">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
          <i class="fad fa-user-edit mr-2"></i> Edit Profile
        </a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
          <i class="fad fa-inbox-in mr-2"></i> My Inbox
        </a>
        <div class="border-t border-gray-100"></div>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fad fa-sign-out-alt mr-2"></i> Logout
          </button>
        </form>
      </div>
    </div>
    <!-- end user -->
  </div>
  <!-- end navbar content -->
</div>
<!-- end navbar -->

<!-- ========== Scripts ========== -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const profileBtn = document.getElementById('profileDropdownBtn');
    const dropdownMenu = document.getElementById('profileDropdownPopup');

    if (profileBtn && dropdownMenu) {
      profileBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        dropdownMenu.classList.toggle('hidden');
      });

      document.addEventListener('click', function(e) {
        if (!profileBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
          dropdownMenu.classList.add('hidden');
        }
      });
    }
  });
</script>
