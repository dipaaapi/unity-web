<style>
    .row5 {
        display: flex;
        padding-left: 5%;
        margin: 0;
        gap: 5%;
        background-color: #55ddff;
        align-items: center;
    }
    .inner-row5-left {
        width: 60%;
        display: block;
        align-content: center;
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
    .inner-row5-left > p:nth-child(1) {
        font-size: 4rem;
        text-transform: capitalize;
        font-weight: bold;
        color: #1c1c1c;
    }
    ul {
        list-style-type: square;
        list-style-position: inside;
        width: 80%;
        margin-bottom: 3vh;
    }
    ul > li {
        font-size: 2.5em;
        text-transform: capitalize;
        font-weight: bold;
    }
    @media (max-width: 425px) {
        .row5 {
            display: block;
            padding-left: 0%;
        }
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
<div class="row5">
    <div class="inner-row5-left">
        <p class="">advance course</p>
        <ul class="">
            <li class="">advance game development course</li>
        </ul>
        <a href={{ __('/') }} class="uppercase font-bold py-2 px-4 text-white rounded hover:shadow bg-[#af2c3b]">enroll now</a>
    </div>
    <div class="inner-row5-right">
        <img src="{{ asset('/img/assets/unity course 1.png') }}" alt="unity course 1" class="">
    </div>
</div>