<main class="bg-color-b">

    <section class="container cards">
        @foreach ($dcData as $item)
             @include('single.card')
        @endforeach
    </section>

    <section class="container  text-center">
        <button class="btn-load">
            <b> LOAD MORE </b>
        </button>
    </section>

    <section class="banner">
        <div class="display-flex">
            <img src="images/buy-comics-digital-comics.png" alt="App"><span>DIGITAL COMICS</span>
        </div>
        <div class="display-flex">
            <img src="images/buy-comics-merchandise.png" alt="App"><span>DIGITAL COMICS</span>
        </div>
        <div class="display-flex">
            <img src="images/buy-comics-shop-locator.png" alt="App"><span>DIGITAL COMICS</span>
        </div>
        <div class="display-flex">
            <img src="images/buy-comics-subscriptions.png" alt="App"><span>DIGITAL COMICS</span>
        </div>
        <div class="display-flex">
            <img class="regulation-img" src="images/buy-dc-power-visa.svg" alt="App"><span>DIGITAL COMICS</span>
        </div>
    </section>


</main>
