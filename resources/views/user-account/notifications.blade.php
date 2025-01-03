<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketwise Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom scrollbar styling for horizontal scrolling */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbars.user_page.navbar role="Juan Dela Cruz" imageUrl="{{ asset('images/passenger.png') }}" /> <!-- Replace static navbar with reusable component -->

<!-- Home Button -->
<div class="flex items-center mb-4 mt-8">
    <button class="bg-black text-white rounded-lg px-4 py-2 shadow hover:bg-red-600 transition ml-4" onclick="window.location.href='/'">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v12a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
        </svg>
        Home
    </button>
</div>





    <!-- Main Content Layout -->
    <div class="flex container mx-auto mt-4 p-4">
        <!-- Sidebar placeholder for future content -->
        <div class="bg-200 w-1/4 h-screen mt-2">
            <x-sidebars.user_page.notifications
                title="Admin Account"
                :links="[
                    ['name' => 'Incident Report', 'url' => '#'],
                    ['name' => 'Sales Report', 'url' => '#'],
                    ['name' => 'Ratings and Feedback', 'url' => '#'],
                    ['name' => 'Bus Arrival', 'url' => '#'],
                ]"
            />
        </div>

        <!-- Main Content Container -->
        <main class="w-4/5 h-full" style="transform: scale(0.85); transform-origin: top; margin-top: -20px;">
            <!-- Main Body Content -->
            <div class="bg-white shadow-md rounded-lg p-4 h-64">
                <!-- First Long Rounded Container -->
                <div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex justify-between items-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
                    <div>
                        <h3 class="font-semibold text-sm mb-1 text-gray-800">Hi! Juan Dela Cruz, Here’s your Receipt. Please check your receipt.</h3>
                    </div>
                    <button class="text-black-500 underline hover:text-red-600">View</button>
                </div>
            </div>

            <!-- Pagination Section -->
            <div class="flex justify-center mt-6">
                <div class="flex space-x-2">
                    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">1</button>
                    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">2</button>
                    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">3</button>
                    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">Next</button>
                </div>
            </div>
        </main>
    </div>

    <script>
        // JavaScript function to handle scrolling
        document.getElementById('left-arrow').addEventListener('click', function() {
            const dateContainer = document.getElementById('date-container');
            dateContainer.scrollBy({ left: -200, behavior: 'smooth' });
        });

        document.getElementById('right-arrow').addEventListener('click', function() {
            const dateContainer = document.getElementById('date-container');
            dateContainer.scrollBy({ left: 200, behavior: 'smooth' });
        });
    </script>
</body>
</html>
