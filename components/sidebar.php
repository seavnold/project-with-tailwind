<nav class="absolute inset-0 transform large-screen:transform-none large-screen:opacity-100 desktop:transform-none desktop:opacity-100 laptop:transform-none laptop:opacity-100 duration-300 -translate-x-full large-screen:relative desktop:relative laptop:relative z-10 h-screen w-80 bg-green-800 border-solid border large-screen:border-green-800 desktop:border-green-800 laptop:border-green-800 tablet:border-r-white tablet:border-y-green-800 tablet:border-l-green-800 mobile:border-r-white mobile:border-y-green-800 mobile:border-l-green-800 text-white"
:class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0':open === false}">
    <div class="flex items-center justify-between px-3">
        <div class="flex items-center filter grayscale hover:filter-none cursor-pointer">
            <span><img src="../assets/img/sktt1.png" alt="logo" class="object-contain h-logo w-logo"></span>
            <span class="block text-2xl sm:text-3xl font-bold py-[16.8px] px-3">
                Sidebar
            </span>
        </div>
        <button 
        class="text-white p-2 focus:outline-none focus:bg-green-900 hover:bg-green-900 rounded-md laptop:hidden desktop:hidden large-screen:hidden"
        @click="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255,255,255);transform: ;msFilter:;"><path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path></svg>
        </button>
    </div>
    <div class="flex flex-col items-start justify-between h-[calc(100vh_-_73px)] w-full">
        <ul class="menus mt-8 overflow-y-scroll scroll-smooth h-[610px] scrollbar w-full">
            <li>
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="users.php">
                    <i class='bx bxs-user-account'></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-bar-chart-alt-2'></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span>Products</span>
                </a>
            </li>
        </ul>
        <button class="logout">
            <i class='bx bx-log-out'></i>
            <span>Logout</span>
        </button>
    </div>
</nav>