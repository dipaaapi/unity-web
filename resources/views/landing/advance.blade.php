<style>
    .row5 {
        display: flex;
        background-color: #55ddff;
    }
    .inner-row5-left {
        color: #444444;
        text-align: left;
        width: 80%;
        padding: 5%;
    }
    .inner-row5-left > p:nth-child(1) {
        font-size: 2.5em;
        text-transform: capitalize;
        font-weight: 900;
        color: black;
    }
    .inner-row5-right > img {
        height: 100%;
    }
    .inner-row5-left {
        color: #444444;
        text-align: left;
        width: 75%;
    }
    .inner-row5-left > a {
        width: 40%;
        display: block;
        text-align: center;
    }
    ul {
        list-style-type: square;
        list-style-position: inside;
        width: 80%;
        margin-bottom: 3vh;
    }
    @media (max-width: 1440px) {
        .inner-row5-left > p:nth-child(1) {font-size: 3.5rem;}
        ul > li {
            font-size: 2.5rem;
            text-transform: capitalize;
        }
    }
    @media (max-width: 1024px) {
        .inner-row5-left > p:nth-child(1) {
            font-size: 2.5rem;
            text-transform: capitalize;
            font-weight: bold;
            color: #1c1c1c;
        }
        ul > li {
            font-size: 1.6rem;
            font-weight: bold;
        }
    }
    @media (max-width: 768px) {
        .row5 {
            display: block;
        }
        .inner-row5-left {
            width: 75%;
            margin: auto;
        }
    }
    @media (max-width: 425px) {
        .inner-row5-right {
            padding-top: 5%;
        }
        .inner-row5-left {
            width: 100%;
        }
        .inner-row5-left > p:nth-child(1) {
            font-size: 3rem;
            text-align: center;
        }
        ul {
            width: 80%;
            margin: 0 auto;
        }
        .inner-row5-left > ul > li {
            font-size: 1rem;
        }
        .inner-row5-left > a {
            margin:  10px auto;
        }
    }
</style>
<div class="h-100 row5">
    <div class="inner-row5-left">
        <p class="">advance course</p>
        <ul class="mb-5">
            <li class="">advance game development course</li>
        </ul>
        <div class="text-center">
            <a href={{ __('/') }} class="uppercase font-bold py-2 px-4 text-white rounded hover:shadow bg-[#af2c3b]">enroll now</a>
        </div>
    </div>
    <div class="inner-row5-right content-end col-span-2">
        <img src="{{ asset('/img/assets/unity course 1.png') }}" alt="unity course 1" class="h-auto">
    </div>
</div>
