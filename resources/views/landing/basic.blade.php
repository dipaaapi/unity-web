<style>
    .row4 {
        display: grid;
        height: 80vh;
        background-color: #dcecff;
    }
    .course2 {
        width: 80%;
        display: block;
        margin: auto 0 auto auto;
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
        margin: 0 auto;
        padding: 0 5%;
    }
    .inner-row4-right > ul > li {
        font-size: 2rem;
        text-transform: capitalize;
        font-weight: 700;
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
    @media (max-width: 768px) {
        .row4 {
            display: block;
            padding: 5%;
            height: auto;
        }
        .course2 {margin: 0 auto;}
        .inner-row4-right {
            width: 75vw;
            margin: 0 auto;
            text-align: left;
        }
        .inner-row4-right > p:nth-child(1) {
            font-size: 3.5rem;
            text-transform: capitalize;
            font-weight: bolder;
            color: #1c1c1c;
            text-align: center;
        }
        .inner-row4-right > a {margin: auto;}
    }
    @media (max-width: 425px) {
        .row4 {
            display: block;
            height: auto;
            padding: 5%;
        }
        .inner-row4-left {
            width: 100%;
        }
        .inner-row4-right > p:nth-child(1) {
            font-size: 3rem;
            text-transform: capitalize;
            font-weight: bolder;
            color: #1c1c1c;
            text-align: center;
        }
        ul {
            width: 80%;
            margin: 0 auto;
        }
        .inner-row4-right {
            width: 90vw;
            margin: 0 auto;
            text-align: left;
        }
        .inner-row4-right > ul > li {
            font-size: 1rem;
        }
        .inner-row4-right > a {
            margin:  10px auto;
        }
    }
</style>
<div class="row4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 content-center">
    <div class="course2">
        <img src="{{ asset('/img/assets/unity course 2.jpg') }}" alt="unity course 2" class="rounded-lg shadow-xl">
    </div>
    <div class="inner-row4-right w-full">
        <p class="">basic courses</p>
        <ul class="">
            <li class="">beginner course: c#</li>
            <li class="">basic game development course</li>
        </ul>
        <a href={{ __('/') }} class="uppercase font-bold py-2 px-4 text-white rounded hover:shadow bg-[#af2c3b]">enroll now</a>
    </div>
</div>
