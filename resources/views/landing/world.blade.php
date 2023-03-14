<style>
    .row2 {
        height: auto;
        position: relative;
        display: grid;
        padding: 2rem;
        background-image: linear-gradient(to bottom, #b9c7e2, #ffffff);
    }
    @media (min-width: 1440px){
        .inner-row2 {
            background-color: #af2c3b;
            text-align: center;
            border-radius: 5px;
            padding: 3em;
            width: 50%;
            height: 95%;
            margin: auto;
        }
    }
    @media (min-width: 1024px){
        .inner-row2 {
            background-color: #af2c3b;
            text-align: center;
            border-radius: 5px;
            padding: 1em 0em 5em 0em;
            width: 50%;
            height: 95%;
            margin: auto;
        }
    }
    @media (max-width: 768px) {
        .inner-row2 {
            background-color: #af2c3b;
            text-align: center;
            border-radius: 5px;
            padding: 1em 3em 5em 3em;
            width: 75%;
            height: 95%;
            margin: auto;
        }
    }
    @media (max-width: 425px){
        .row2 {
            height: 500px;
        }
        .inner-row2 {
            width: 100%;
            margin: 0 auto;
            padding: 1em;
        }
    }
</style>
<div class="row2">
    <img src="{{ asset('/img/assets/gameboy.png') }}" alt="game boy" class="h-auto w-[45vw] lg:w-1/3 md:w-1/3 absolute bottom-0 left-0">
    <div class="inner-row2">
        <div class="inner-sub-row2">
            <div class="lg:block md:block flex">
                <div class="w-1/3 lg:w-auto md:w-auto">
                    <img src="{{ asset('/img/assets/unity logo red.png') }}" alt="unity logo red" class="w-full lg:w-auto md:w-auto mx-auto">
                </div>
                <div class="w-2/3 lg:w-auto md:w-auto my-auto">
                    <p class="text-white lg:text-center md:text-center text-left text-2xl font-semibold">Welcome to the</p>
                    <p class="text-white lg:text-center md:text-center text-left text-3xl md:text-5xl font-bold">World of Unity</p>
                </div>\
            </div>
            <div class="md:my-4 my-5 w-10/12 md:w-2/3 mx-auto">
                <p class="text-white text-justify text-sm md:text-lg">Unity is a 2D & 3D game engine that has been around since 2005. Founded and launched by Unity Technologies, and is well known as one of the high-end game engines.</p>
            </div>
            <a href={{ __('/') }} class="uppercase font-bold py-2 px-4 rounded hover:shadow bg-white">enroll now</a>
        </div>
    </div>
    <img src="{{ asset('/img/assets/unity games 1.png') }}" alt="unity games 1" class="h-auto w-[45vw] lg:w-1/3 md:w-1/3 absolute bottom-0 right-0">
</div>
