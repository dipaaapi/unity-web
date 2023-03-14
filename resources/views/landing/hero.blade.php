{{-- <style>
    .text-container > img {
        position: absolute;
        z-index: 1;
        top: 25%;
        left: 10vw;
        width: 50%;
    }

    .inner-row1 {
        position: absolute;
        top: 20%;
        bottom: 20%;
        left: 12.5%;
        z-index: 2;
        width: 50%;
        height: 60%;
    }

    .row1 > img {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 50%;
    }

    @media (min-width: 1900px)
    {
        .row1 {
            height: 90vh;
        }
        .inner-row1 {
            top: 25%;
            bottom: 25%;
            left: 15%;
            width: 40%;
            height: 50%;
        }
        .text-container > img {
            width: 79vw;
            top: 10vh;
            left: 0vw;
        }
        .row1 > img {
            width: 50%;
        }
    }

    @media (min-width: 1024px)
    {
        .row1 {
            height: 60vh;
        }
        .text-container > img {
            width: 80%;
            height: 90%;
            top: 5%;
            bottom: 5%;
            left: 0;
        }
        .row1 > img {
            width: 46%;
        }
    }

    @media (max-width: 425px)
    {
        .row1 {
            height: 450px;
        }
        .inner-row1 {
            top: 7.5%;
            left: 20.5%;
            width: 59%;
        }
        .text-container > img {
            width: 90%;
            height: 40%;
            top: 0%;
            bottom: 0;
            left: 8%;
        }
        .row1 > img {
            width: 100%;
        }
    }
</style> --}}
<style>
    .row1 {
        width: 100%;
        height: 90vh;
        background-color: #16337f;
        position: relative;
    }
    .textContainer {
        background: url('/img/assets/text container.png');
        background-position: center;
        background-size: cover;
        padding: 2rem;
        width: 100%;
        height: 100%;
    }
    .imgContainer {
        display: none;
    }
    .gov {
        position: absolute;
        bottom: 0;
        right: 0;
    }
    @media (max-width: 425px) {
        .row1 {height: 75vh;}
        .imgContainer {
            display: block;
        }
    }
    @media (max-width: 768px) {
        .row1 {height: 90vh;}
        .imgContainer {
            display: block;
        }
    }
</style>

<div class="row1">
    <div class="w-[120%] content-center grid">
    </div>
    <img src="{{ asset('/img/assets/text container.png') }}" alt="text container" class="absolute top-10 right-0 left-0 imgContainer">
    <img src="{{ asset('/img/assets/gov luigi.png') }}" alt="gov" class="gov">
</div>
