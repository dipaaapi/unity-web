<style>
    .row3 {
        background: url('/img/assets/bg unity.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        height: auto;
        width: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        padding: 1em;
        gap: 5%;
    }
    .inner-row3-left {
        color: white;
        text-align: center;
        font-size: 4rem;
        margin: 0 auto;
    }
    @media (max-width: 768px) {
        .row3 {
            display: block;
            background-position: inherit;
            padding: 10%;
        }
        .inner-row3-left {
            color: white;
            text-align: center;
            font-size: 3rem;
            margin: 0 auto;
        }
        .inner-row3-right > img {margin: auto;}
    }
    @media (max-width: 425px) {
        .row3 {
            display: block;
            background-position: inherit;
            padding: 10%;
        }
        .inner-row3-left {
            font-size: 2rem;
        }
        .inner-row3-right > img {
            max-width: 60%;
            height: auto;
            margin: 0 auto;
        }
    }
</style>
<div class="row3">
    <div class="inner-row3-left">
        <p class="uppercase font-black">be a certified</p>
        <img src="{{ asset('/img/assets/associate.png') }}" alt="associate" class="">
        <p class="uppercase font-black">in two months!</p>
    </div>
    <div class="inner-row3-right">
        <img src="{{ asset('/img/assets/unity logo blue.png') }}" alt="unity logo blue" class="">
    </div>
</div>
