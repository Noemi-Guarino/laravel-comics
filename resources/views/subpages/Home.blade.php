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
        <section>
            <div class="asset_icon_main">
                <div class="asset_icon_main_content" >
                    <div class="assetsitems">
                        <div class="assets_container_img">
                            <img class="img_jumbotron" src="{{ Vite::asset('public/images/buy-comics-digital-comics.png') }}" alt="jumbotron">
                        </div> 
                        <div>DIGITAL COMICS</div>
                    </div>
                    <div class="assetsitems">
                        <div class="assets_container_img">
                            <img class="img_jumbotron" src="{{ Vite::asset('public/images/buy-comics-merchandise.png') }}" alt="jumbotron">
                        </div> 
                        <div>DC MERCHANDISE</div>
                    </div>
                    <div class="assetsitems">
                        <div class="assets_container_img">
                            <img class="img_jumbotron" src="{{ Vite::asset('public/images/buy-comics-subscriptions.png') }}" alt="jumbotron">
                        </div> 
                        <div>SUBSCRIPTION</div>
                    </div>
                    <div class="assetsitems">
                        <div class="assets_container_img">
                            <img class="img_jumbotron" src="{{ Vite::asset('public/images/buy-comics-shop-locator.png') }}" alt="jumbotron">
                        </div> 
                        <div>COMIC SHOP LOCATOR</div>
                    </div>
                    <div class="assetsitems">
                        <div class="assets_container_img">
                            <img class="img_jumbotron" src="{{ Vite::asset('public/images/buy-dc-power-visa.svg') }}" alt="jumbotron">
                        </div> 
                        <div>DC POWER VISA</div>
                    </div>
                </div>
            </div>      
        
        </section>
    </main>

    @endsection
