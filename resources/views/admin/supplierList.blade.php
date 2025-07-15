<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href="./assets/images/css/logo/logo-transparent.png" type="image/x-icon" /> 
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <title>Admin Page</title>
</head>
<body class="bg-gray-100">

<!-- Start Header -->
@include('admin.navbar')

<!-- Start Wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
@include('admin.sidebar')

  <!-- Start Content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    <h2 class="font-bold text-lg mb-10">Recent Suppliers</h2>
<table class="table-fixed w-full">
    <thead class="text-left">
        <tr>
            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Name</th>
            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Company Name</th>
            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Email</th>
            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Phone</th>
            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Address</th>
            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Profile Picture</th>
        </tr>
    </thead>
    <tbody class="text-left text-black">
        @foreach($suppliers as $supplier)
        <tr>
            <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider">
                <p class="name-1 text-black">{{ $supplier->name }}</p>                    
            </td>
            <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider">{{ $supplier->nama_perusahaan }}</td>
            <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider">{{ $supplier->email }}</td>
            <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider">{{ $supplier->phone }}</td>
            <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider">{{ $supplier->address }}</td>
            <td class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">
                <div class="overflow-hidden rounded-full w-8 h-8">
                    <img src="{{ asset('storage/' . ($supplier->profile_picture ?? 'assets/images/user_profile/default.jpg')) }}" class="w-full h-full" style="border: none;">
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    <!-- End a Table -->
  </div>
  <!-- End Content -->
</div>
<!-- End Wrapper -->

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
<script>
  // Pop-up Dropdown JS
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('profileDropdownBtn');
    const popup = document.getElementById('profileDropdownPopup');
    if (!btn || !popup) return;

    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      const rect = btn.getBoundingClientRect();
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
<!-- End Script -->

</body>
</html>
