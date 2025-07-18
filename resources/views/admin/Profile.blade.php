@include('admin.navbar')
<button onclick="window.location.href='{{ route('admin.dashboard') }}'"
        class="mb-4 rounded-lg bg-gray-200 px-4 py-2 text-gray-700 hover:bg-gray-300">
    ← Back to Dashboard
</button>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-4xl mx-auto col-span-8 overflow-hidden rounded-xl sm:bg-gray-50 sm:px-8 sm:shadow">

    <div class="pt-4">
        <h1 class="py-2 text-2xl font-semibold">Account settings</h1>
    </div>
    <hr class="mt-4 mb-8" />
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="account-form" action="{{ route('update.account') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Profile Picture Section -->
        <div class="mb-8 flex items-center gap-6">
            <div>
@php
    $profileUrl = Auth::user()->profile_picture
        ? (Str::startsWith(Auth::user()->profile_picture, 'profile_pictures/')
            ? asset('storage/' . Auth::user()->profile_picture)
            : asset(Auth::user()->profile_picture))
        : asset('assets/images/user_profile/default.jpg');
    $profileUrl .= '?v=' . time(); // Tambahkan timestamp
@endphp

<img src="{{ $profileUrl }}"
     alt="Profile Picture"
     class="w-24 h-24 rounded-full object-cover border-2 border-gray-300 shadow">

            </div>
            <div>
                <label class="block text-sm text-gray-500 mb-2">Change Profile Picture</label>
                <input type="file" name="profile_picture" accept="image/*"
                       class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="text-xs text-gray-400 mt-1">Max 2MB. Allowed: jpg, jpeg, png, svg.</p>
                @error('profile_picture')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Email Section -->
        <p class="py-2 text-xl font-semibold">Email Address</p>
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <p class="text-gray-600">Your email address is <strong>{{ Auth::user()->email }}</strong></p>
        </div>
        <hr class="mt-4 mb-8" />

        <!-- Personal Info Section -->
        <p class="py-2 text-xl font-semibold">Personal Information</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label class="text-sm text-gray-500">Full Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}" 
                       class="w-full border-2 border-gray-300 rounded-md p-2 focus:border-blue-600">
            </div>
            @if(Auth::user()->type === 'supplier')
            <div>
                <label class="text-sm text-gray-500">Company Name</label>
                <input type="text" name="nama_perusahaan" value="{{ Auth::user()->nama_perusahaan }}" 
                       class="w-full border-2 border-gray-300 rounded-md p-2 focus:border-blue-600">
            </div>
            @endif
            <div>
                <label class="text-sm text-gray-500">Phone Number</label>
                <input type="text" name="phone" value="{{ Auth::user()->phone ?? '' }}" 
                       class="w-full border-2 border-gray-300 rounded-md p-2 focus:border-blue-600">
            </div>
            <div>
                <label class="text-sm text-gray-500">Address</label>
                <input type="text" name="address" value="{{ Auth::user()->address ?? '' }}" 
                       class="w-full border-2 border-gray-300 rounded-md p-2 focus:border-blue-600">
            </div>
            
        </div>
        {{-- Tambahkan hidden input agar field nama_perusahaan tetap terkirim untuk supplier --}}
        @if(Auth::user()->type === 'supplier')
        <input type="hidden" name="type" value="supplier">
        @endif
        <hr class="mt-4 mb-8" />
        
        <!-- Password Section -->
        <p class="py-2 text-xl font-semibold">Password</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-3 mb-4">
            <div class="w-full sm:w-1/3">
                <label class="text-sm text-gray-500">Current Password</label>
                <input type="password" name="current_password" 
                class="w-full border-2 border-gray-300 rounded-md p-2 focus:border-blue-600" 
                placeholder="Leave blank to keep current">
                @error('current_password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full sm:w-1/3">
                <label class="text-sm text-gray-500">New Password</label>
                <input type="password" name="password" 
                class="w-full border-2 border-gray-300 rounded-md p-2 focus:border-blue-600" 
                placeholder="Leave blank to keep current">
                @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full sm:w-1/3">
                <label class="text-sm text-gray-500">Confirm New Password</label>
                <input type="password" name="password_confirmation" 
                       class="w-full border-2 border-gray-300 rounded-md p-2 focus:border-blue-600" 
                       placeholder="Leave blank to keep current">
                       @error('password_confirmation')
                       <span class="text-red-500 text-xs">{{ $message }}</span>
                       @enderror
                    </div>
                </div>
                <button type="submit" class="mb-8 rounded-lg bg-blue-600 px-4 py-2 text-white">Save Changes</button>
                <hr class="mt-4 mb-8" />

        <!-- Delete Account Section -->
    </form>
</div>

<script></script>