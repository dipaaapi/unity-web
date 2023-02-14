<style>
    .row4 {
        display: flex;
        padding: 5%;
        margin: 0;
        gap: 5%;
        background-color: #dcecff;
        align-items: center;
    }
    .inner-row4-left {
        width: 60%;
        display: flex;
        align-content: center;
    }
    .inner-row4-left > img {
        border-radius: 25px;
        box-shadow: 0 0 10px 1px black;
    }
    .inner-row4-right {
        color: #444444;
        text-align: left;
        width: auto;
    }
    .inner-row4-right > a {
        width: 40%;
        display: block;
        text-align: center;
    }
    .inner-row4-right > p:nth-child(1) {
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
        .row4 {
            display: block;
        }
        .inner-row4-left {
            width: 100%;
        }
        .inner-row4-right > p:nth-child(1) {
            font-size: 3rem;
            text-align: center;
        }
        ul {
            width: 80%;
            margin: 0 auto;
        }
        .inner-row4-right > ul > li {
            font-size: 1rem;
        }
        .inner-row4-right > a {
            margin:  10px auto;
        }
    }
</style>
<div class="row4">
    <div class="inner-row4-left">
        <img src="{{ asset('/img/assets/unity course 2.jpg') }}" alt="unity course 2" class="">
    </div>
    <div class="inner-row4-right">
        <p class="">basic courses</p>
        <ul class="">
            <li class="">beginner course: c#</li>
            <li class="">basic game development course</li>
        </ul>
        <a href={{ __('/') }} class="uppercase font-bold py-2 px-4 text-white rounded hover:shadow bg-[#af2c3b]">enroll now</a>
    </div>
</div>