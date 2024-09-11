@php
$nav_links = config('links.0.links');
@endphp

<div>
    <header>
        <div class="container">

            <!-- img sx -->
            <div class="image-container">
                <img src="{{ Vite::asset('/public/img/dc-logo.png') }}" alt="...">
            </div>
            <!-- nav dx -->
            <nav>
                <ul>
                    @foreach ($nav_links as $nav_link)
                    <li>
                        <a class="" href="#!">{{ $nav_link}}</a>
                    </li>

                    @endforeach
                </ul>
            </nav>
        </div>
    </header>
</div>
<div class="jumbotron"></div>