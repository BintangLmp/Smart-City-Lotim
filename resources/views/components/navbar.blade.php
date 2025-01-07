@php
    $menus = [
        ['label' => 'Beranda', 'route' => 'home'],
        [
            'label' => 'Profil',
            'route' => 'about',
            'children' => [
                ['label' => 'Visi & Misi', 'route' => 'about.visi-misi'],
                ['label' => 'Struktural', 'route' => 'about.structural'],
            ],
        ],
        [
            'label' => 'Dimensi',
            'route' => 'dimensi.index',
            'children' => \App\Models\Dimensi::all()->map(function ($dimensi) {
                return [
                    'label' => $dimensi->nama,
                    'route' => 'dimensi.show',
                    'parameters' => ['slug' => $dimensi->slug],
                ];
            })->toArray(),
        ],
        ['label' => 'Artikel & Berita', 'route' => 'artikel.index'],
        ['label' => 'Destinasi Wisata', 'route' => 'destinasi.index'],
        ['label' => 'Galeri', 'route' => 'galeri'],
    ];
@endphp

<nav class="fixed z-50 w-screen bg-white/90 backdrop-blur dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <x-logo></x-logo>
        <x-search></x-search>
        <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-search">
            <x-search-mobile></x-search-mobile>
            <ul id="navbar-links"
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-transparent md:p-0 md:dark:bg-gray-900">
                @foreach ($menus as $menu)
                    <x-nav-link :link="$menu"></x-nav-link>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
