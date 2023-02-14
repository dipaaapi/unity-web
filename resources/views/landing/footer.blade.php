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
    .media > a > svg {
        border-radius: 50%;
        margin: 0 .5vw;
        width: 2vw;
        fill: white;
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
        .media > a > svg {
            width: 10vw;
            margin: 0 2vw;
        }
    }
</style>
<div class="rowfooter">
    <div class="contact">
        <p class="mr-1 flex items-center"><img src="{{ asset('/img/assets/phone icon.png') }}" alt="phone icon" class="pr-2"> 0908-123-4567</p>
        <p class="mr-1 flex items-center"><img src="{{ asset('/img/assets/email.png') }}" alt="email" class="pr-2"> unitycamsur@gmail.com</p>
    </div>
    <div class="media">
        <a href="" class="hover:shadow-outline shadow-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="hover:shadow-lg" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
        </a>
        <a href="" class="hover:shadow-outline shadow-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="hover:shadow-lg" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/></svg>
        </a>
        <a href="" class="hover:shadow-outline shadow-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="hover:shadow-lg" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z"/></svg>
        </a>
    </div>
</div>