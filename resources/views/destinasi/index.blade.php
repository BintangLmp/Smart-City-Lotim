<x-app title="Destinasi Wisata">
    <div class="min-h-screen container mx-auto py-10">
        
            <h1 class="text-3xl font-extrabold text-center">Destinasi Wisata</h1>

        <!-- Search Section -->
        <div class="max-w-2xl mx-auto mb-8">
            <div class="relative">
                <input type="text" 
                    class="w-full pl-10 pr-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500" 
                    placeholder="Cari destinasi wisata...">
                <div class="absolute left-3 top-2">
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Destinasi Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-4">
            @forelse($destinasi as $item)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <!-- Image Section -->
                    <div class="relative h-48">
                        <img src="{{ asset('storage/' . $item->gambar) }}" 
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover">
                        <div class="absolute top-2 right-2 bg-yellow-400 text-white px-2 py-1 rounded-full text-sm">
                            ★ {{ $item->rating }}
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">{{ $item->nama }}</h3>
                        
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span class="text-sm">{{ $item->lokasi }}</span>
                        </div>

                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit($item->deskripsi, 70) }}
                        </p>

                        <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                            <span>{{ $item->jam_operasional }}</span>
                            <span class="font-semibold text-green-600">{{ $item->harga }}</span>
                        </div>

                        <a href="{{ route('destinasi.show', $item->id) }}" 
                           class="block text-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-gray-500">Tidak ada destinasi wisata yang tersedia.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8 px-4">
            {{ $destinasi->links() }}
        </div>
    </div>
</x-app>