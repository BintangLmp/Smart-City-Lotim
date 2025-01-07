<x-app title="{{ $dimensi->nama }}">
    <div class="container mx-auto py-8">
        <h1 class="mb-4 text-3xl font-bold">{{ $dimensi->nama }}</h1>
        <p class="mb-8 text-gray-600">{{ $dimensi->deskripsi }}</p>

        <div class="tabs">
            <ul class="flex border-b">
                <li class="-mb-px mr-1">
                    <a class="tab-link active inline-block rounded-t border-l border-r border-t bg-white px-4 py-2 font-semibold text-blue-500"
                        href="#quick-wins" onclick="showTab(event, 'quick-wins')">Quick Wins</a>
                </li>
            </ul>
        </div>

        <div class="mt-6">
            <!-- Konten Quick Wins -->
            <div id="quick-wins" class="tab-content">
                <h1 class="mb-4 text-3xl font-bold text-blue-700">{{ $dimensi->judul }}</h1>
                <p class="mb-8 text-gray-600">{{ $dimensi->konten }}</p>
            </div>

            <!-- Detail dari dimensi -->
            <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
                @foreach ($dimensi->details as $detail)
                    <div class="rounded bg-white p-4 shadow">
                        <h3 class="text-lg font-semibold cursor-pointer text-blue-600 hover:underline"
                            onclick="toggleDescription('detail-{{ $detail->id }}')">
                            {{ $detail->judul }}
                        </h3>
                        <p id="detail-{{ $detail->id }}" class="mt-2 text-gray-600 hidden">
                            {{ $detail->konten }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function showTab(event, tabId) {
            const tabLinks = document.querySelectorAll('.tab-link');
            tabLinks.forEach(link => link.classList.remove('active'));

            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => content.classList.add('hidden'));

            document.getElementById(tabId).classList.remove('hidden');
            event.currentTarget.classList.add('active');
        }

        function toggleDescription(id) {
            const element = document.getElementById(id);
            element.classList.toggle('hidden');
        }
    </script>
</x-app>
