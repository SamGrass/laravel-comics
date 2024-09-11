@php
$useful_links = config('links');
$socials = config('socials');
@endphp

<footer class="">
    <!-- link acquisti -->
    <div class="shop">
        <div class="container shop-container">
            <ul>
                <li>
                    <a href="#!">
                        <div class="image-container">
                            <img src="{{ Vite::asset('/public/img/buy-comics-digital-comics.png') }}" alt="item.text">
                        </div>
                        <div class="shop-text">
                            DIGITAL COMICS
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <div class="image-container">
                            <img src="{{ Vite::asset('/public/img/buy-comics-merchandise.png') }}" alt="item.text">
                        </div>
                        <div class="shop-text">
                            DC MERCHANDISE
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <div class="image-container">
                            <img src="{{ Vite::asset('/public/img/buy-comics-shop-locator.png') }}" alt="item.text">
                        </div>
                        <div class="shop-text">
                            SUBSCRIPTION
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <div class="image-container">
                            <img src="{{ Vite::asset('/public/img/buy-comics-subscriptions.png') }}" alt="item.text">
                        </div>
                        <div class="shop-text">
                            COMIC SHOP LOCATOR
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <div class="image-container">
                            <img src="{{ Vite::asset('/public/img/buy-dc-power-visa.svg') }}" alt="item.text">
                        </div>
                        <div class="shop-text">
                            DC POWER VISA
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- link footer -->
    <div class="useful-links">
        <div class="container flex-column">

            @foreach ($useful_links as $items)
            <div class="link-list">
                <h3>{{ $items['title'] }}</h3>
                <ul>
                    @foreach ($items['links'] as $link)
                    <li>
                        <a href="#!">{{ $link }}</a>
                    </li>

                    @endforeach
                </ul>
            </div>
            @endforeach

        </div>
    </div>
    <!-- socials -->
    <div class="socials">
        <div class="container">
            <!-- sign up sx-->
            <a href="#!" class="btn-sign-up">
                SIGN-UP NOW!
            </a>

            <!-- socials dx-->
            <div class="social-icons">
                <h3>FOLLOW US</h3>
                <ul>
                    @foreach ($socials as $social)

                    <li>
                        <a href="#!">
                            <img src="{{ Vite::asset($social) }}" alt="social">
                        </a>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>