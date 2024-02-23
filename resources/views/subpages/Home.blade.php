@extends('layouts.app')

@section('main-content')

    <main>
        <section>
            <div class="container py-5">
                <div class="mycards d-flex flex-wrap">
                    @foreach( $comics as $index => $comic )
                    <div class="mycard d-flex flex-column m-3">
                        <div class="imgcard">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
                        </div>
                        <div>
                            <h3>{{ $comic['series'] }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    <button class="button mainbutton">Load  more</button>                
                </div>
            </div>
        </section>
    </main>

    @endsection
