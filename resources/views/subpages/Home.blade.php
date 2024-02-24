@extends('layouts.app')

@section('main-content')

    <main>
        <section>
            <div class="container py-5 mt-5 text-center">
                <div class="mycards d-flex flex-wrap">
                    @foreach( $comics as $index => $comic )
                    <div class="mycard d-flex flex-column m-3">
                        <div class="imgcard">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
                        </div>
                        <div>
                            <h4>{{ $comic['series'] }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center">
                    <button class="button mainbutton">Load  more</button>                
                </div>
            </div>
        </section>
    </main>

    @endsection
