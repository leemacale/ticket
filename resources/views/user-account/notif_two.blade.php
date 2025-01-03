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
    <x-navbars.user_page.navbar
        role="Juan Dela Cruz"
        imageUrl="{{ asset('images/passenger.png') }}"
    />

    <!-- Home Button -->
    <div class="flex items-center mb-4 mt-8">
        <button class="bg-black text-white rounded-lg px-4 py-2 shadow hover:bg-red-600 transition ml-4"
        onclick="window.location='{{ route('user.logged-in-bp') }}'">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v12a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
            </svg>
            Home
        </button>
    </div>

    <!-- Main Content Layout -->
    <div class="flex container mx-auto mt-4 p-4">

        <!-- Sidebar for notifications -->
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
            <div class="bg-white shadow-md rounded-lg p-4 h-auto">

                <!-- E-Ticket Section -->
                <div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex flex-col items-center justify-center text-center"
                    style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">

                    <div class="relative w-full">
                        <h3 class="font-semibold text-sm mb-1 text-gray-800">This is your e-ticket. Please print it and show at check-in</h3>
                        <button class="absolute top-2 right-1 text-gray-600 hover:text-gray-900 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex justify-center mt-3">
                        <img src="{{ $imageUrl ?? asset('images/qr.png') }}" alt="QR Code" class="h-24 w-24 object-cover ml-8">
                        <img src="{{ $imageUrl ?? asset('images/logo.png') }}" alt="Logo" class="h-24 w-24 object-cover ml-8">
                    </div>

                    <h4 class="font-bold ml-2 mt-10 text-left">Voucher</h4>

                    <!-- Itinerary Container -->
                    <div class="border border-gray-300 rounded-md p-4 mt-2 mb-4 w-full relative">
                        <h5 class="font-semibold text-sm mb-1 text-white bg-black p-2 rounded w-full text-center">Itinerary: Manila Terminal - Baguio</h5>

                        <!-- Flex Container for Left and Right Sections -->
                        <div class="w-full mt-4 flex">
                            <!-- Left Section -->
                            <div class="w-1/2 pr-4">
                                <div class="flex justify-between py-2">
                                    <span class="font-medium ml-2">From: Manila Terminal</span>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="font-medium ml-2">To: Baguio</span>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-sm whitespace-nowrap ml-2">Date: 1 Oct 2024 09:00 (Arrival 15:59)</span>
                                </div>
                            </div>

                            <!-- Right Section -->
                            <div class="w-1/2 pl-4">
                                <div class="flex justify-between py-2">
                                    <span class="font-medium">Class: Regular AC</span>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="font-medium">Hotline: 12345678910</span>
                                </div>
                            </div>
                        </div>

                        <!-- Black Line Separator -->
                        <div class="h-px bg-black w-full my-2"></div>

                        <div class="flex justify-between py-2">
                            <span class="font-medium ml-2">Olaf Peterson (M, 1 Jan, 1990)</span>
                            <span>₱732.00</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="font-bold ml-2">Paid Total</span>
                            <span class="font-bold">₱732.00</span>
                        </div>
                    </div>

                    <!-- Important Information -->
                    <ul class="list-disc list-inside mt-8 mb-4 text-left p-0 m-0 w-full pl-12">
                        <li class="text-gray-800">Passengers must present (Soft Copy or Hard Copy) the voucher and provide ID.</li>
                        <li class="text-gray-800">Passengers should be at the check-in area 1 hour prior to the departure time.</li>
                        <li class="text-gray-800">NO SHOW is considered as travelled, which is non-refundable.</li>
                        <li class="text-gray-800">For Refund, Rebooking, and Cancellation, please go to Refund.</li>
                    </ul>

                    <div class="w-full flex justify-end mt-4">
                        <small class="text-gray-600">Print this page (optional). Have a nice trip!</small>
                    </div>
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
        document.getElementById('left-arrow').addEventListener('click', function () {
            const dateContainer = document.getElementById('date-container');
            dateContainer.scrollBy({ left: -200, behavior: 'smooth' });
        });

        document.getElementById('right-arrow').addEventListener('click', function () {
            const dateContainer = document.getElementById('date-container');
            dateContainer.scrollBy({ left: 200, behavior: 'smooth' });
        });
    </script>
</body>

</html>
