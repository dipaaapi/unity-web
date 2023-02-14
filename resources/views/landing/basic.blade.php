<style>
    .row4 {
        display: flex;
        padding: 5%;
        margin: 0;
        gap: 5%;
        background-color: #dcecff;
    }
    .inner-row4-left {
        width: 60%;
        display: flex;
        align-content: center;
    }
    .inner-row4-left > img {
        border-radius: 25px;
        text-shadow: 0 0 10% rgb(51, 51, 51);
    }
    .inner-row4-right {
        color: black;
        text-align: left;
        width: auto;
    }
    .inner-row4-right > p:nth-child(1) {
        font-size: 4rem;
        text-transform: capitalize;
        font-weight: bold;
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
        <livewire:button class="bg-white" text="Enroll Now"/>
    </div>
</div>