@php
    $dccomics = [
        [
            'link' => 'Characters',
        ],
        [
            'link' => 'Comics',
        ],
        [
            'link' => 'Movies',
        ],
        [
            'link' => 'Tv',
        ],
        [
            'link' => 'Games',
        ],
        [
            'link' => 'Videos',
        ],
        [
            'link' => 'News',
        ]
    ];
    $shop = [
        [
            'link' => 'Shop DC',
        ],
        [
            'link' => 'Shop DC Collectibles',
        ]
    ];
    $dc = [
        [
            'link' => 'Terms of Use',
        ],
        [
            'link' => 'Privacy policy',
        ],
        [
            'link' => 'Add choices',
        ],
        [
            'link' => 'Advertising',
        ],
        [
            'link' => 'Jobs',
        ],
        [
            'link' => 'Subscriptions',
        ],
        [
            'link' => 'Talent Workshops',
        ],
        [
            'link' => 'CPSC Certificates',
        ],
        [
            'link' => 'Ratings',
        ],
        [
            'link' => 'Shop Help',
        ],
        [
            'link' => 'Contact us',
        ]
    ];
    $sites = [
        [
            'link' => 'DC',
        ],
        [
            'link' => 'MAD Magazine',
        ],
        [
            'link' => 'DC Kids',
        ],
        [
            'link' => 'DC Universe',
        ],
        [
            'link' => 'DC Power Visa',
        ]
    ];
@endphp
<footer>
    <div class="bg_footer">
        <div class="container">
                <div class="top_footer">
                    <div class="column"> 
                        <h3>DC COMICS</h3>
                        <ul>
                            @foreach ( $dccomics as $dccomic)
                                <li>
                                    <a class="" href="">{{ $dccomic['link'] }}</a>
                                </li>
                            @endforeach              
                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ( $shop as $elem)
                                <li>
                                    <a class="" href="">{{ $elem['link'] }}</a>
                                </li>
                            @endforeach              
                        </ul>
                    </div>
                    <div class="column">
                        <h3>DC</h3>
                        <ul>
                            @foreach ( $dc as $elem)
                                <li>
                                    <a class="" href="">{{ $elem['link'] }}</a>
                                </li>
                            @endforeach              
                        </ul>
                    </div>
                    <div class="column">
                        <h3>SITES</h3>
                        <ul>
                            @foreach ( $sites as $site)
                            <li>
                                <a class="" href="">{{ $site['link'] }}</a>
                            </li>
                            @endforeach              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg_under_footer">
        <div class="container">
            <div class="under_footer_content">
                <div>
                    <button class="button footerbutton">
                        SIGN-UP NOW
                    </button>
                </div>
                <div class="icons_contents">
                    <h2>Follow us</h2>
                    <div class="p-2">
                        <a href=""><img src="{{Vite::asset('public/images/footer-facebook.png')}}" alt="" /></a>
                    </div>
                    <div class="p-2">
                        <a href=""><img src="{{Vite::asset('public/images/footer-twitter.png')}}" alt="" /></a>
                    </div>
                    <div class="p-2">
                        <a href=""><img src="{{Vite::asset('public/images/footer-youtube.png')}}" alt="" /></a>
                    </div>
                    <div class="p-2">
                        <a href=""><img src="{{Vite::asset('public/images/footer-pinterest.png')}}" alt="" /></a>
                    </div>
                    <div class="p-2">
                        <a href=""><img src="{{Vite::asset('public/images/footer-periscope.png')}}" alt="" /></a>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</footer>
