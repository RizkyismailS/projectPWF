<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <div class="mx-4 min-h-screen max-w-screen-xl sm:mx-8 xl:mx-auto">
        <h1 class="border-b py-6 text-4xl font-semibold">Settings</h1>

        <div class="grid grid-cols-1 sm:grid-cols-10 gap-4 pt-3">
            <!-- Sidebar menu -->
            <div class="col-span-2 p-4">
                <ul>
                    @auth
                    <li id="menu-account" data-menu="account" class="mt-5 cursor-pointer border-l-4 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">account</li>
                    @if (Auth::user()->type === 'client')
                    <li id="keranjang" data-menu="keranjang" class="mt-5 cursor-pointer border-l-4 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Keranjang</li>
                    <li id="detail-order" data-menu="detail" class="mt-5 cursor-pointer border-l-4 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Order Detail</li>
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
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                    </svg>
                    <p class="text-lg">Memuat konten, mohon tunggu...</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@php
$orderId = optional(Auth::user()->orders()->latest()->first())->id ?? null;
@endphp

<script>
document.addEventListener('DOMContentLoaded', () => {
    const mainContent = document.getElementById('main-content');
    const menuButtons = document.querySelectorAll('[data-menu]');
    const userOrderId = @json($orderId ?? null);

    function setActive(btn) {
        menuButtons.forEach(el =>
            el.classList.remove('border-l-blue-700', 'text-blue-700')
        );
        // Pastikan btn adalah elemen yang ada di menuButtons
        if (btn && btn.classList) {
            btn.classList.add('border-l-blue-700', 'text-blue-700');
        }
    }
function initAccountValidation() {
    const form = document.getElementById('account-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Hanya CSRF token yang perlu
        },
        body: formData // Kirim FormData langsung
    })
    .then(async res => {
        let data;
        const text = await res.text(); // Baca respons sebagai teks terlebih dahulu
        try {
            data = JSON.parse(text); // Coba parse teks sebagai JSON
        } catch (err) {
            alert('Terjadi kesalahan pada server.\n\n' + text);
            return;
        }

        if (!res.ok) {
            if (data && data.errors) {
                let allErrors = '';
                for (const field in data.errors) {
                    allErrors += `${data.errors[field].join(', ')}\n`;
                }
                alert(allErrors);
            } else if (data && data.message) {
                alert(data.message);
            }
            return;
        }
        if (data?.success) {
            alert('Data akun berhasil diperbarui');
        }
    })
    .catch(err => {
        console.error(err);
        alert('Terjadi kesalahan saat mengirim data');
    });
});

}
    function loadPartial(url, btn, hash, extra = {}) {
        // Ganti :id di url dengan id yang diberikan (misal orderId)
        if (url.includes(':id')) {
            const id = extra.id || userOrderId;
            url = url.replace(':id', id ? id : '');
        }
        fetch(url)
            .then(res => res.text())
            .then(html => {
                mainContent.innerHTML = html;
                setActive(btn);
                history.replaceState(null, '', hash);

                // Inisialisasi validasi form account jika hash adalah #account
                if (hash === '#account') {
                    initAccountValidation();
                }
            })
            .catch(err => console.error(err));
    }

    const routes = {
        'account': "{{ route('setting.account.partial') }}",
        'daftar-barang': "{{ route('supplier.showProduct.partial') }}",
        'daftar-pesanan': "{{ route('supplier.daftarPesanan.partial') }}",
        'detail': "{{ route('landingPage.orderDetail.partial', ['id' => ':id']) }}",
    };

    menuButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const key = btn.dataset.menu;
            if (key === 'detail') {
                if (!userOrderId) {
                    mainContent.innerHTML = '<div class="flex flex-col items-center justify-center py-20 text-gray-400"><svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"></path></svg><p class="text-lg">Belum ada pesanan.</p></div>';
                    // Tetap set active pada tombol detail
                    setActive(btn);
                    return;
                }
                loadPartial(routes[key], btn, '#' + key, { id: userOrderId });
            } else {
                loadPartial(routes[key], btn, '#' + key);
            }
        });
    });

    const initialHash = window.location.hash.substring(1) || 'account';
    const firstBtn = document.querySelector(`[data-menu="${initialHash}"]`) ||
                     document.querySelector('[data-menu="account"]');
    if (firstBtn) {
        setActive(firstBtn);
        firstBtn.click();
    }
});

// Fungsi pencarian produk
let debounceTimer;
function searchProducts(query) {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
        const input = document.getElementById('simple-search');
        const cursorPosition = input.selectionStart;
        const inputValue = input.value;

        const url = `{{ route('supplier.showProduct.partial') }}?search=${query}`;

        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.getElementById('main-content').innerHTML = html;
                const newInput = document.getElementById('simple-search');
                if (newInput) {
                    newInput.value = inputValue;
                    newInput.focus();
                    newInput.setSelectionRange(cursorPosition, cursorPosition);
                }

                window.openModal = function(id) {
                    const modal = document.getElementById('modal-' + id);
                    if (modal) modal.classList.remove('hidden');
                };
                window.closeModal = function(id) {
                    const modal = document.getElementById('modal-' + id);
                    if (modal) modal.classList.add('hidden');
                };
            })
            .catch(error => console.error('Error:', error));
    }, 300);
}

// Fungsi pencarian order
function searchOrders(query) {
    const url = `{{ route('order.index') }}?search=${query}`;
    fetch(url)
        .then(response => response.text())
        .then(html => {
            document.getElementById('main-content').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
}

// Validasi order
function validateOrder(orderId) {
    const modal = document.getElementById('modal-' + orderId);
    if (modal) {
        modal.classList.remove('hidden');
        // Cek elemen sebelum akses .value
        const statusBadge = document.querySelector(`tr[data-order-id="${orderId}"] .status-badge`);
        const statusInput = document.getElementById(`validation-status-${orderId}`);
        if (statusBadge && statusInput) {
            statusInput.value = statusBadge.textContent.trim().toLowerCase();
        }
    }
}

function closeModal(orderId) {
    const modal = document.getElementById('modal-' + orderId);
    if (modal) modal.classList.add('hidden');
}

function submitValidation(orderId) {
    // Cek elemen sebelum akses .value
    const statusInput = document.getElementById(`validation-status-${orderId}`);
    const notesInput = document.getElementById(`validation-notes-${orderId}`);
    const status = statusInput ? statusInput.value : '';
    const notes = notesInput ? notesInput.value : '';

    fetch(`/orders/${orderId}/validate`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ status: status, notes: notes })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Order validated successfully!');
            closeModal(orderId);
            window.location.reload();
        } else {
            alert('Validation failed: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred during validation');
    });
}
function cancelOrder(orderId) {
    if (!confirm('Are you sure you want to cancel this order?')) return;
    fetch(`/orders/${orderId}/cancel`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({})
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Order canceled successfully!');
            window.location.reload();
        } else {
            alert('Failed to cancel order: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred during cancellation.');
    });
}


</script>

</body>
</html>
</script>

</body>
</html>
