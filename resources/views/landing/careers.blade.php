<style>
    .row6 {
        display: flex;
        background-color: #12338c;
        align-items: center;
        padding: 0;
        margin: 0;
    }
    .inner-row6-right {margin-right: 5rem;}
    .inner-row6-right > p:nth-child(1) {
        margin: 0;
        font-size: 4rem;
        color: white;
        font-weight: bold;
        text-align: center;
        text-transform: capitalize;
    }
    .inner-row6-right > p:nth-child(2) {
        margin: 0;
        font-size: 3rem;
        color: white;
        font-weight: 500;
        text-align: center;
        text-transform: capitalize;
    }
    .pcareers {
        width: 50%;
        text-align: center;
        margin: 3% auto;
    }
    .inner-row6-right > .pcareers > p {
        margin: 0;
        font-size: 1.5rem;
        color: white;
        font-weight: 300;
        text-align: center;
    }
    .inner-row6-right > a {
        margin: 0 auto;
        width: 30%;
        text-align: center;
        display: block;
    }
    @media (max-width: 425px) {
        .row6 {
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            justify-content: center;
        }
        .inner-row6-right {
            margin-right: 0;
        }
        .pcareers {
            width: 65%;
            text-align: center;
            margin: 7% auto;
        }
        .inner-row6-right > .pcareers > p {
            margin: 0;
            font-size: 1rem;
            color: aliceblue;
            font-weight: 300;
            text-align: center;
        }
        .inner-row6-right > a {
            margin: 0 auto;
            width: 50%;
            text-align: center;
            display: block;
        }
    }
</style>
<div class="row6">
    <div class="inner-row6-left">
        <img src="{{ __('/img/assets/career for unity.png') }}" alt="careeer for unity" class="">
    </div>
    <div class="inner-row6-right">
        <p class="">careers</p>
        <p class="">with Unity</p>
        <div class="pcareers">
            <p class="">learn about the vast opportunities that Unity has to offer and discover what suits you best.</p>
        </div>
        <a href={{ __('/') }} class="capitalize font-bold py-2 px-4 text-[#3a3939] rounded hover:shadow bg-white">discover more</a>
    </div>
</div>