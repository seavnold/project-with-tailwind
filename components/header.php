<div class="relative z-0 lg:flex-grow">
    <header class="h-[75px] bg-green-700 border-solid border border-green-700 lg:border-l-white border-b-white text-white">
        <div class="flex items-center justify-between h-full">
            <div class="flex items-center h-full ml-3">
                <button 
                class="focus:outline-none focus:bg-green-900 hover:bg-green-900 rounded-md lg:hidden p-1"
                @click="open = true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-8 w-8 bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                <span class="text-2xl sm:text-3xl font-bold px-3">
                    MyProject
                </span>
            </div>
            <div class="flex items-center justify-end h-full w-52">
                <div class="mobile:hidden tablet:flex laptop:flex desktop:flex large-screen:flex justify-center items-end flex-col h-full w-7/10 pl-2 bg-green-800">
                    <span class="font-medium text-end lowercase large-screen:text-lg truncate w-full">arnoldsulana.seaversity@gmail.com</span>
                    <span class="uppercase text-xs">admin</span>
                </div>
                <div class="flex justify-center items-center h-full w-3/10 text-4xl bg-green-800">
                    <i class='bx bxs-user-circle'></i>
                </div>
            </div>
        </div>
    </header>
</div>