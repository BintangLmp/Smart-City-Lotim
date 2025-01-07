<x-app title="Galeri">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Galeri</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($galeris as $galeri)
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">{{ $galeri->judul }}</h2>
                        <p class="text-gray-600">{{ $galeri->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app>
