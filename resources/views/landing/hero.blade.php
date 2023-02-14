<style>
    .row1 {
        height: auto;
        background-color: #16337f;
        position: relative !important;
    }

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
</style>

<div class="row1 p-3">
    <div class="inner-row1">
        <p class="text-white font-semibold md:text-3xl text-xs">"The province of Camarines Sur envisioned as the pioneer in establishing the first IT hub managed and owned by the provincial government. Spearheading this plan through focusing on game development, a booming industry in the era."</p>
        <p class="text-white font-black uppercase md:text-5xl text-sm md:mt-5 mt-0 ml-5">gov. luigi villafuerte</p>
    </div>
    <div class="text-container">
        <img src="{{ asset('/img/assets/text container.png') }}" alt="text container" class="img-responsive">
    </div>
    <img src="{{ asset('/img/assets/gov luigi.png') }}" alt="gov" class="">
</div>