<nav 
class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-300 -translate-x-full lg:relative z-10 h-screen w-80 bg-indigo-900 text-white p-3"
:class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0':open === false}">
    <div class="flex justify-between">
        <span class="font-bold text-2xl sm:text-3xl p-2">Sidebar</span>
        <button 
        class="text-white p-2 focus:outline-none focus:bg-indigo-800 hover:bg-indigo-800 rounded-md lg:hidden"
        @click="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255,255,255);transform: ;msFilter:;"><path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path></svg>
        </button>
    </div>
    <ul class="mt-8">
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-indigo-800 rounded-md">Dashboard</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-indigo-800 rounded-md">Users</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-indigo-800 rounded-md">Analytics</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-indigo-800 rounded-md">Products</a>
        </li>
    </ul>
</nav>