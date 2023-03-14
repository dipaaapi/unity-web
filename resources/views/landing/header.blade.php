<style>
    .list-lg {
        display: flex;
        width: 60%;
        place-content: end;
        gap: 3%;
    }
    .list-sm {display: none;}
    .nav-sm {
        background-color: white;
        color: #16337f;
        position: absolute;
        top: 20vh;
        right: 0;
        display: grid;
    }
    .nav-lg > a {
        color: rgb(78, 78, 78);
        font-weight: 600;
        text-transform: uppercase;
        padding: 0 2%;
    }
    .nav-lg > a:nth-child(4) {
        color: white;
        font-weight: 600;
        font-weight: 600;
        text-transform: uppercase;
        padding: 0 2%;
    }
    .nav-lg > a:hover {text-decoration: underline;}
    @media (max-width: 768px) {
        .list-lg {display: none;}
        .list-sm {display: inherit;}
    }
    @media (max-width: 425px) {
        .list-lg {display: none;}
        .list-sm {display: inherit;}
    }
</style>

<img src="{{ asset('/img/assets/logo_bg.png') }}" alt="logo bg" class="absolute top-0 left-0 h-20 -z-10">
<nav class="container p-3 flex items-center relative h-20">
    <div class="container mx-auto flex justify-between">
        <a href="#" class="text-blue-500 font-bold text-xl">
            <img src="{{ asset('/img/assets/web unity v2 copy.png') }}" alt="logo" class="w-52">
        </a>
        <div class="nav-lg place-self-end list-lg">
            <a href="#" class="">home</a>
            <a href="#" class="">about us</a>
            <a href="#" class="">about unity</a>
            <a href="#" class="bg-[#af2c3b]">our courses</a>
            <a href="#" class="">careers</a>
            <a href="#" class="">contact us</a>
        </div>
        <div x-data="{ open: false }" class="mt-2 list-sm">
            <button x-on:click="open = ! open">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path class="text-[#16337f]" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>

            <div x-show.important="open" class="nav-sm w-1/3">
                <a href="#" class="my-2 px-2 hover:underline uppercase font-semibold">home</a>
                <a href="#" class="my-2 px-2 hover:underline uppercase font-semibold">about us</a>
                <a href="#" class="my-2 px-2 hover:underline uppercase font-semibold">about unity</a>
                <a href="#" class="p-2 uppercase font-semibold bg-[#af2c3b] text-white hover:underline">our courses</a>
                <a href="#" class="my-2 px-2 hover:underline uppercase font-semibold">careers</a>
                <a href="#" class="my-2 px-2 hover:underline uppercase font-semibold">contact us</a>
            </div>
        </div>
    </div>
</nav>
