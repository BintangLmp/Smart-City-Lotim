{{-- <x-app title="Dimensi">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Daftar Dimensi</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($dimensi as $item)
                <div class="bg-white p-4 shadow rounded">
                    <h2 class="text-xl font-bold mb-2">{{ $item->nama }}</h2>
                    <p class="text-gray-600">{{ Str::limit($item->deskripsi, 100) }}</p>
                    <a href="{{ route('dimensi.show', $item->id) }}" class="text-blue-500 mt-2 inline-block">Lihat Selengkapnya</a>
                </div>
            @endforeach
        </div>
    </div>
</x-app> --}}
