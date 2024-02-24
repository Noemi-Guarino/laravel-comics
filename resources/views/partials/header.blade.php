 @php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/charachters',
            'label' => 'charachters',
            'active' => true,
        ],
        [
            'url' => '/comics',
            'label' => 'comics',
            'active' => false,
        ],
        [
            'url' => '/movies',
            'label' => 'movies',
            'active' => false,
        ],
        [
            'url' => '/tv',
            'label' => 'tv',
            'active' => false,
        ],
        [
            'url' => '/games',
            'label' => 'games',
            'active' => false,
        ],
        [
            'url' => '/collectibles',
            'label' => 'collectibles',
            'active' => false,
        ],
        [
            'url' => '/videos',
            'label' => 'videos',
            'active' => false,
        ],
        [
            'url' => '/fans',
            'label' => 'fans',
            'active' => false,
        ],
        [
            'url' => '/news',
            'label' => 'news',
            'active' => false,
        ],
        [
            'url' => '/shop',
            'label' => 'shop',
            'active' => false,
        ],


    ];
@endphp


<header>
    <div class="container d-flex align-items-center justify-content-between p-4">
        <div class="img_logo">
            <img class="gatto-img" src="{{ Vite::asset('public/images/dc-logo.png') }}" alt="Gatto"> 
        </div>
        <div class=>
            <nav>
                <ul class="d-flex align-items-center text-decoration-none ">
                    @foreach ($links as $link)
                    <li class="p-2">
                        <a class="text-decoration-none" href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                    </li>
                </ul>
            </nav>
        </div>
        <div class="inputsection">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="search" name="search">
        </div>
    </div>
    <div>
        <img class="gatto-img" src="{{ Vite::asset('public/images/dc-logo.png') }}" alt="Gatto"> 
    </div>
</header>