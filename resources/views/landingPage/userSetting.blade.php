<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet" />
    
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
        <div class="grid grid-cols-8 pt-3 sm:grid-cols-10">
            <div class="relative my-4 w-56 sm:hidden">
                <input class="peer hidden" type="checkbox" name="select-1" id="select-1" />
                <label for="select-1" class="flex w-full cursor-pointer select-none rounded-lg border p-2 px-3 text-sm text-gray-700 ring-blue-700 peer-checked:ring">Accounts </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute right-0 top-3 ml-auto mr-5 h-4 text-slate-700 transition peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
                <ul class="max-h-0 select-none flex-col overflow-hidden rounded-b-lg shadow-md transition-all duration-300 peer-checked:max-h-56 peer-checked:py-3">
                    <li class="cursor-pointer px-3 py-2 text-sm text-slate-600 hover:bg-blue-700 hover:text-white">Accounts</li>
                    <li class="cursor-pointer px-3 py-2 text-sm text-slate-600 hover:bg-blue-700 hover:text-white">Others</li>
                </ul>
            </div>

            <div class="col-span-2 hidden sm:block">
                <ul>
                    <li id="menu-account" data-menu="account" class="mt-5 cursor-pointer border-l-2 border-l-blue-700 px-2 py-2 font-semibold text-blue-700 transition hover:border-l-blue-700 hover:text-blue-700">Accounts</li>
                    <li class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Users</li>
                    <li class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Profile</li>
                    <li id="menu-daftar-barang" data-menu="daftar-barang" class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Daftar Barang</li>
                    <li class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Notifications</li>
                    <li class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Integrations</li>
                </ul>
            </div>
            <div class="col-span-6 sm:col-span-8" id="main-content">
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