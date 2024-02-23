@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/chi-siamo',
            'label' => 'Chi siamo',
            'active' => true,
        ],
        [
            'url' => '/contatti',
            'label' => 'Contatti',
            'active' => false,
        ],
    ];
@endphp

<header>
    <nav>
        we
        <h1>we</h1>
        <ul>
            @foreach ($links as $link)
                <li>
                    @if ($link['active'])
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    @else
                        <del>
                            {{ $link['label'] }}
                        </del>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
</header>
