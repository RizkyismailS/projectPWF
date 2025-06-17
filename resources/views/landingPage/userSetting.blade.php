<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="">
    <style>
    * {
        font-family: 'Source Sans Pro';
    }
    </style>
</head>
<body>

  @extends('layout.web.tailwind')
  @section('content')
<div class="relative z-10 bg-white min-h-screen">
    @include('layout.web.breadcrumb')
    <!-- End Breadcrumb Section -->

   <div class=" mx-4 min-h-screen max-w-screen-xl sm:mx-8 xl:mx-auto">
        <h1 class="border-b py-6 text-4xl font-semibold">Settings</h1>
        <!-- filepath: c:\laragon\www\projectPWF\resources\views\landingPage\userSetting.blade.php -->
<div class="grid grid-cols-1 sm:grid-cols-10 gap-4 pt-3">
    <!-- Sidebar menu -->
    <div class="col-span-2 p-4">
        <ul>
            @auth
            <li id="menu-account" data-menu="account" class="mt-5 cursor-pointer border-l-4 border-l-blue-700 px-2 py-2 font-semibold text-blue-700 transition hover:border-l-blue-700 hover:text-blue-700">Accounts</li>
            <li id="menu-profile" data-menu="profile" class="mt-5 cursor-pointer border-l-4 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Profile</li>
            @if (Auth::user()->type === 'client')
            <li id="keranjang" data-menu="keranjang" class="mt-5 cursor-pointer border-l-4 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Keranjang</li>
            @endif
            @if (Auth::user()->type === 'supplier')
            <li id="menu-daftar-barang" data-menu="daftar-barang" class="mt-5 cursor-pointer border-l-4 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Daftar Barang</li>
            <li id="menu-daftar-pesanan" data-menu="daftar-pesanan" class="mt-5 cursor-pointer border-l-4 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Daftar Pesanan</li>
            @endif
            @endauth
        </ul>
    </div>

    <!-- Main content -->
    <div class="col-span-8 bg-white p-6" id="main-content">
        <div class="flex items-center justify-center py-20 text-center text-gray-600 flex-col gap-4 animate-pulse">
            <svg class="w-12 h-12 animate-spin text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z">
                </path>
            </svg>
            <p class="text-lg">Memuat konten, mohon tunggu...</p>
        </div>
    </div>
</div>
@endsection
<script>
document.addEventListener('DOMContentLoaded', () => {
    const mainContent = document.getElementById('main-content');
    const menuButtons = document.querySelectorAll('[data-menu]');

    /* helper ───────────────────────────────────────────── */
    function setActive(btn) {
        // hapus highlight lama
        menuButtons.forEach(el =>
            el.classList.remove('border-l-blue-700', 'text-blue-700')
        );
        // highlight baru
        btn.classList.add('border-l-blue-700', 'text-blue-700');
    }

    function loadPartial(url, btn, hash) {
        fetch(url)
            .then(res => res.text())
            .then(html => {
                mainContent.innerHTML = html;
                setActive(btn);
                history.replaceState(null, '', hash);   // ubah URL tanpa reload
            })
            .catch(err => console.error(err));
    }

    /* daftar tombol + URL partial ─────────────────────── */
    const routes = {
        'account'      : "{{ route('setting.account.partial') }}",
        'daftar-barang': "{{ route('supplier.showProduct.partial') }}",
        // tambahkan menu lain di sini jika ada
    };

    /* pasang event click untuk tiap menu ──────────────── */
    menuButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const key = btn.dataset.menu;       // mis. "account"
            loadPartial(routes[key], btn, '#' + key);
        });
    });

    /* on page load ─────────────────────────────────────── */
    const initialHash = window.location.hash.substring(1) || 'account';
    const firstBtn    = document.querySelector(`[data-menu="${initialHash}"]`) ||
                        document.querySelector('[data-menu="account"]');

    firstBtn.click();   
});

function openModal(id) {
    document.getElementById('modal-' + id).classList.remove('hidden');
}

function closeModal(id) {
    document.getElementById('modal-' + id).classList.add('hidden');
}

</script>
</body>
</html>