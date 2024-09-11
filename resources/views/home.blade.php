{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <div class="current-series btn">CURRENT SERIES</div>
        <!-- parte cards -->
        <div class="cards">
            @foreach ($comics as $comic)

            <div class="card">
                <div class="image-container">
                    <img src="{{ $comic['thumb']}}" alt="series">
                </div>
                <h5>{{ $comic['title'] }}</h5>
            </div>
            @endforeach
        </div>

        <!-- carica altro -->
        <a class="btn" href="#!">LOAD MORE</a>
    </div>
</main>

@endsection


@section('titlePage')
home
@endsection