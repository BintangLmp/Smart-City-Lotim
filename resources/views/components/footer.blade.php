<footer class="bg-blue-100 text-black">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <x-logo></x-logo>
            <div class="md:flex md:ml-4 w-full md:w-auto">
                <div class="mb-6 md:mb-0 md:mr-8 w-full md:w-1/2">
                    <!-- Kontak -->
                    <h2 class="mb-4 text-lg font-semibold">Kontak</h2>
                    <ul class="font-medium text-gray-500 dark:text-gray-400">
                        <li class="mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>+62 812-3456-789</span>
                        </li>
                        <li class="mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                            <span>kominfo@lomboktimurkab.go.id</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2">
                                <path fill-rule="evenodd"
                                    d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Jl. Prof. M. Yamin, SH No. 54 Gedung Kantor Bupati Lt.4 Blok A</span>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2">
                    <!-- Statistik Pengunjung -->
                    <h2 class="mb-4 text-lg font-semibold">Statistik Pengunjung</h2>
                    <ul class="font-medium text-gray-500 dark:text-gray-400">
                        <li class="mb-4 flex justify-between items-center">
                            <span>Pengunjung Hari Ini:</span>
                            <span id="todayVisitors">0</span>
                        </li>
                        <li class="mb-4 flex justify-between items-center">
                            <span>Pengunjung Kemarin:</span>
                            <span id="yesterdayVisitors">0</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>Total Pengunjung:</span>
                            <span id="totalVisitors">0</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-700" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm">© 2024 <a href="/" class="hover:underline">Smart-City Lombok Timur™</a>. All Rights Reserved.</span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-300 hover:text-white ms-5">
                    <!-- Add more icons as needed -->
                </a>
            </div>
        </div>
    </div>
</footer>

<script>
    const socket = new WebSocket('ws://localhost:3000'); // Adjust the URL as needed

    socket.onopen = function() {
        console.log('WebSocket connection established');
    };

    socket.onmessage = function(event) {
        const visitorCounts = JSON.parse(event.data);
        document.getElementById('todayVisitors').textContent = visitorCounts.today || 0;
        document.getElementById('yesterdayVisitors').textContent = visitorCounts.yesterday || 0;
        document.getElementById('totalVisitors').textContent = visitorCounts.total || 0;
    };

    setInterval(() => {
        socket.send('visitor'); // Send a message to the server every minute
    }, 60000); // Send every 60 seconds
</script>