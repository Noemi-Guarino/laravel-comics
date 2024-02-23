@extends('layouts.app')

@section('main-content')

    <main>
        <section>
            <div class="container py-5">
                <div class="mycards d-flex flex-wrap">
                    @foreach( $comics as $index => $comic )
                    <div class="mycard">
                        <div>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
                        </div>
                        <h3>{{ $comic['series'] }}</h3>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
    </main>

    @endsection
