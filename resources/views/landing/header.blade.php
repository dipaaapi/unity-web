<img src="{{ asset('/img/assets/logo_bg.png') }}" alt="logo bg" class="absolute top-0 left-0 h-20 -z-10">
<nav class="container p-3 flex items-center relative h-20">
    <div class="container mx-auto flex justify-between">
        <a href="#" class="text-blue-500 font-bold text-xl">
            <img src="{{ asset('/img/assets/web unity v2 copy.png') }}" alt="logo" class="w-52">
        </a>
        <div class="hidden md:block place-self-end">
            <a href="#" class="hover:underline text-gray-600 px-4 uppercase font-semibold">home</a>
            <a href="#" class="hover:underline text-gray-600 px-4 uppercase font-semibold">about us</a>
            <a href="#" class="hover:underline text-gray-600 px-4 uppercase font-semibold">about unity</a>
            <a href="#" class="text-white p-2 uppercase font-semibold bg-[#af2c3b] hover:underline">our courses</a>
            <a href="#" class="hover:underline text-gray-600 px-4 uppercase font-semibold">careers</a>
            <a href="#" class="hover:underline text-gray-600 px-4 uppercase font-semibold">contact us</a>
        </div>
        <div x-data="{ open: false }" class="md:hidden mt-2">
            <button x-on:click="open = ! open">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
            
            <div x-show.important="open" class="nav-mini w-1/2 bg-[#16337f] text-white z-30">
                <a href="#" class="hover:underline uppercase font-semibold">home</a>
                <a href="#" class="hover:underline uppercase font-semibold">about us</a>
                <a href="#" class="hover:underline uppercase font-semibold">about unity</a>
                <a href="#" class="p-2 uppercase font-semibold bg-[#af2c3b] hover:underline">our courses</a>
                <a href="#" class="hover:underline uppercase font-semibold">careers</a>
                <a href="#" class="hover:underline uppercase font-semibold">contact us</a>
            </div>
        </div>
    </div>
</nav>
