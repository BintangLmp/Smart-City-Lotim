@php
    $socials = [
        [
            'name' => 'youtube',
            'url' => 'https://www.youtube.com/@kominfolotim3418/',
            'icon' => '<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
            </svg>',
        ],
        [
            'name' => 'instagram',
            'url' => 'https://www.instagram.com/kominfolotim/',
            'icon' => '<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
            </svg>',
        ],
        [
            'name' => 'facebook',
            'url' => 'https://www.facebook.com/dinas.timur/',
            'icon' => '<svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 50 50">
                <path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z"></path>
            </svg>',
        ],
        [
            'name' => 'twitter',
            'url' => 'https://twitter.com/your_twitter_handle',
            'icon' => '<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" d="M23.953 4.57c-.885.392-1.83.654-2.825.775a4.93 4.93 0 0 0 2.163-2.724 9.868 9.868 0 0 1-3.127 1.184A4.92 4.92 0 0 0 16.616 3c-2.73 0-4.934 2.204-4.934 4.917 0 .386.045.762.127 1.124-4.103-.205-7.73-2.169-10.148-5.144a4.822 4.822 0 0 0-.666 2.477c0 1.71.871 3.213 2.188 4.096a4.903 4.903 0 0 1-2.229-.616v.062c0 2.385 1.693 4.375 3.95 4.826a4.934 4.934 0 0 1-2.224.085 4.935 4.935 0 0 0 4.604 3.417A9.866 9.866 0 0 1 1.93 20.29a13.9 13.9 0 0 0 7.548 2.211c9.056 0 14.003-7.497 14.003-13.986 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59a9.842 9.842 0 0 1-2.447.672A4.935 4.935 0 0 0 23.953 4.57z"/>
            </svg>',
        ],
    ];
@endphp

<div id="socials-card" class="md:w-4/12 p-6 bg-white border border-gray-200 rounded-xl shadow">
    <h5 class="mb-5 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
        Terhubung dengan kami
    </h5>
    <div class="grid gap-y-4 mt-3">
        @foreach ($socials as $social)
            <a target="_blank" href="{{ $social['url'] }}"
                class="px-3 py-2 border border-slate-300 rounded-lg hover:outline hover:outline-blue-300 outline-offset-2 duration-200 transition flex items-center gap-3">
                {!! $social['icon'] !!}

                <span class="font-bold capitalize">{{ $social['name'] }}</span>
            </a>
        @endforeach
    </div>
</div>
