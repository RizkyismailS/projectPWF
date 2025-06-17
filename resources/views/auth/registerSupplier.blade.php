<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="bg-gray-300">
        @include('layout.web.navbar')
    <div class="max-w-[1000px] mx-auto border-gray-300 rounded-lg p-8 px-8 bg-white shadow">
        <form method="POST" action="{{ route('registerSupplier') }}" enctype="multipart/form-data" class="space-y-8">
            @csrf
            <div class="grid grid-cols-2 gap-6">
    <!-- Kolom Kiri: Profile Awal -->
    <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
        <p class="mt-1 text-sm/6 text-gray-600">
            This information will be displayed publicly so be careful what you share.
        </p>

        <div class="mt-10 grid grid-cols-1 gap-y-8">
            <div>
                <label for="name" class="block text-sm/6 font-medium text-gray-900">Username</label>
                <div class="mt-2">
                    <input type="text" name="name" id="name"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        required>
                        
                </div>
            </div>
            <!-- Nama Perusahaan -->
            <div>
                <label for="nama_perusahaan" class="block text-sm/6 font-medium text-gray-900">Nama Perusahaan</label>
                <div class="mt-2">
                    <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        required>
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        required>
                        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
                </div>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                <div class="mt-2">
                    <input type="password" name="password" id="password"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        required>
                         
                </div>
            </div>

            <div>
                
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
                <div class="mt-2">
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        required>
                        @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Phone ke bawah -->
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-y-8">
            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm/6 font-medium text-gray-900">Phone</label>
                <div class="mt-2">
                    <input type="text" name="phone" id="phone"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="block text-sm/6 font-medium text-gray-900">Address</label>
                <div class="mt-2">
                    <input type="text" name="address" id="address"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>

<div>
    <label for="profile_picture" class="block text-sm font-medium text-gray-900">Photo</label>
    <div class="mt-2 flex items-center gap-x-3">
        <!-- Preview Icon -->
        <img id="image-preview" src="{{ asset('assets/images/user_profile/default.jpg') }}" class="mt-2 w-32 rounded-md shadow-md" alt="Image Preview" />

        <!-- Tombol Custom -->
        <button type="button" id="custom-upload-btn"
            class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50">
            Choose Photo
        </button>

        <!-- Input file -->
        <input type="file" name="profile_picture" id="upload_profile_picture" accept="image/*" class="hidden">
    </div>
    <p id="file-name-preview" class="mt-2 text-sm text-gray-600"></p>
</div>

<div class="mt-6 flex justify-end gap-x-2">
            <button type="button" class="text-sm font-semibold text-gray-900 hover:bg-gray-400 p-3 rounded-2xl"><a href="{{route('home')}}">Cancel</a></button>
            <button type="submit" class="rounded-2xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus:outline-indigo-600">Save</button>
            <input type="hidden" name="is_supplier" value="1">
        </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const uploadBtn = document.getElementById('custom-upload-btn');
        const fileInput = document.getElementById('upload_profile_picture');
        const fileNamePreview = document.getElementById('file-name-preview');
        const imagePreview = document.getElementById('image-preview');

        uploadBtn.addEventListener('click', function () {
            fileInput.click();
        });

        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                fileNamePreview.textContent = `Selected file: ${fileInput.files[0].name}`;

                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result; // Set src untuk preview gambar
                };
                reader.readAsDataURL(fileInput.files[0]); // Baca file sebagai URL
            } else {
                fileNamePreview.textContent = '';
                imagePreview.src = "{{ asset('assets/images/default-profile.png') }}"; // Kembali ke gambar default
            }
        });
    });
</script>


</body>
</html>