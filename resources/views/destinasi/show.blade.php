<x-app title="Destinasi Wisata">
    <div class="container mx-auto min-h-screen px-4 py-10">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('destinasi.index') }}" class="inline-flex items-center text-blue-500 hover:text-blue-600">
                <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar Destinasi
            </a>
        </div>

        <!-- Main Content -->
        <div class="overflow-hidden rounded-xl bg-white shadow-lg">
            <!-- Image Gallery -->
            <div class="relative h-96">
                <img src="{{ asset('storage/' . $destinasi->gambar) }}" alt="{{ $destinasi->nama }}"
                    class="h-full w-full object-cover">
                <div
                    class="absolute right-4 top-4 rounded-full bg-yellow-400 px-3 py-1 text-lg font-semibold text-white">
                    ★ {{ $destinasi->rating }}
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-6 md:p-8">
                <!-- Header -->
                <div class="mb-6">
                    <h1 class="mb-2 text-4xl font-bold text-gray-900">{{ $destinasi->nama }}</h1>
                    <div class="flex items-center text-gray-600">
                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                        <span>{{ $destinasi->lokasi }}</span>
                    </div>
                </div>

                <!-- Info Grid -->
                <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                    <!-- Operating Hours -->
                    <div class="rounded-lg bg-gray-50 p-4">
                        <h3 class="mb-2 font-semibold text-gray-900">Jam Operasional</h3>
                        <p class="text-gray-600">{{ $destinasi->jam_operasional }}</p>
                    </div>

                    <!-- Price Range -->
                    <div class="rounded-lg bg-gray-50 p-4">
                        <h3 class="mb-2 font-semibold text-gray-900">Harga Tiket</h3>
                        <p class="font-semibold text-green-600">{{ $destinasi->harga }}</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-8">
                    <h2 class="mb-4 text-2xl font-bold text-gray-900">Deskripsi</h2>
                    <div class="prose max-w-none text-gray-600">
                        {{ $destinasi->deskripsi }}
                    </div>
                </div>

                <!-- Facilities -->
                <div class="mb-8">
                    <h2 class="mb-4 text-2xl font-bold text-gray-900">Fasilitas</h2>
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                        <!-- Example facilities - you might want to make this dynamic based on your data -->
                        <div class="flex items-center">
                            <svg class="mr-2 h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Parkir</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="mr-2 h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Toilet</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="mr-2 h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Musholla</span>
                        </div>
                        <!-- Add more facilities as needed -->
                    </div>
                </div>

                <!-- Location Map -->
                <div class="mb-8">
                    <h2 class="mb-4 text-2xl font-bold text-gray-900">Lokasi</h2>
                    <div class="rounded-lg bg-gray-100 p-4 text-center">
                        <!-- Replace with actual map integration -->
                        <p class="text-gray-600">Peta lokasi akan ditampilkan di sini</p>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="mt-8 flex justify-center">
                    <a href="#"
                        class="inline-flex items-center rounded-lg bg-blue-500 px-6 py-3 font-semibold text-white transition-colors hover:bg-blue-600">
                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Dapatkan Petunjuk Arah
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app>
