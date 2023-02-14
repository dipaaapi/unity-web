<style>
    .rowfooter {
        background-color: #af2c3b;
        display: flex;
        padding: 1%;
        justify-content: space-between;
        color: white;
    }
    .media, .contact {
        display: flex;
    }
    .media > a > img {
        border-radius: 50%;
        padding: 0 1vh;
    }
    @media (max-width: 425px) {
        .rowfooter {
            display: flex;
            width: auto;
            margin: 0 auto;
            flex-direction: column;
            align-items: center;
        }
        .contact {
            display: block;
        }
        .media > a, .contact > p {
            margin: 5% 0;
        }
    }
</style>
<div class="rowfooter">
    <div class="contact">
        <p class="mr-1 flex items-center"><img src="{{ asset('/img/assets/phone icon.png') }}" alt="phone icon" class="pr-2"> 0908-123-4567</p>
        <p class="mr-1 flex items-center"><img src="{{ asset('/img/assets/email.png') }}" alt="email" class="pr-2"> unitycamsur@gmail.com</p>
    </div>
    <div class="media">
        <a href="" class="">
            <img src="{{ asset('/img/assets/facebook.png') }}" alt="facebook" class="hover:shadow-lg">
        </a>
        <a href="" class="">
            <img src="{{ asset('/img/assets/twitter.png') }}" alt="twitter" class="hover:shadow-lg">
        </a>
        <a href="" class="">
            <img src="{{ asset('/img/assets/youtube.png') }}" alt="youtube" class="hover:shadow-lg">
        </a>
    </div>
</div>