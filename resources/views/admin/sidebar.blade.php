<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <!-- sidebar content -->
    <div class="flex flex-col">
        <!-- sidebar toggle -->
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Menu</p>

        <!-- Dashboard Link -->
        <a href="{{route('admin.dashboard')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-tachometer-alt text-xs mr-2"></i>
            Dashboard
        </a>
        <!-- end link -->

        <!-- Daftar Supplier Link -->
        <a href="{{route('supplier.list')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-users text-xs mr-2"></i>
            Daftar Supplier
        </a>
        <!-- end link -->

        <!-- Daftar Client Link -->
        <a href="{{route('customer.list')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-friends text-xs mr-2"></i>
            Daftar Client
        </a>
        <!-- end link -->
    </div>
    <!-- end sidebar content -->
</div>
<!-- end sidebar -->
