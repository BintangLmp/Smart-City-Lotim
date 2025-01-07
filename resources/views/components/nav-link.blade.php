@props(['link'])

@php
    // Tentukan href berdasarkan rute dan parameter
    $href = isset($link['parameters'])
        ? route($link['route'], $link['parameters'])
        : route($link['route']);

    // Cek apakah ini adalah rute aktif
    $isActive = request()->routeIs($link['route']) || 
                (isset($link['children']) && collect($link['children'])->contains(fn($child) => request()->routeIs($child['route'])));
@endphp

@if (array_key_exists('children', $link))
    @php $dropdownId = 'dropdownNavbar_' . uniqid(); @endphp
    <li x-data="{ open: false }" class="relative">
        <button id="{{ $dropdownId }}" @click="open = !open" @click.away="open = false"
            class="{{ $isActive ? 'text-blue-700' : 'text-gray-900' }} flex w-full items-center justify-between rounded px-3 py-2 hover:bg-gray-100 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
            {{ $link['label'] }}
            <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
        </button>
        <div x-show="open" x-transition id="{{ $dropdownId }}"
            class="absolute z-50 w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                @foreach ($link['children'] as $child)
                    <li>
                        <a href="{{ isset($child['parameters']) ? route($child['route'], $child['parameters']) : route($child['route']) }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            {{ $child['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </li>
@else
    <li>
        <a href="{{ $href }}"
            class="{{ $isActive ? 'text-blue-700' : 'text-gray-900' }} block rounded px-3 py-2 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
            {{ $link['label'] }}
        </a>
    </li>
@endif