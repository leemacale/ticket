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

        /* Dimmed background overlay for the modal */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 49; /* Ensure the overlay is below the modal */
            display: none;
        }

        /* Modal Styling */
        #reportModal {
            display: none;
            z-index: 50;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbars.conductor-nav.conductor_nav role="Conductor" imageUrl="{{ asset('images/admin.png') }}" /> <!-- Replace static navbar with reusable component -->

    <!-- Back Button -->
    <div class="flex items-center mb-4 mt-8">
        <!-- Optional back button can be placed here -->
    </div>

    <!-- Main Content Layout -->
    <div class="flex container mx-auto mt-4 p-4">
        <!-- Sidebar placeholder for future content -->
        <div class="w-1/4 h-screen mt-2">
            <x-sidebars.conductor-account.content_sidebars
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
        <main class="w-4/5 h-full" style="transform: scale(0.85); transform-origin: top;">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="space-y-8">
                    <!-- Incident/Accident Fields -->
                    <div>
                            <!-- First Long Rounded Container -->
                <div class="bg-gray-105 rounded-lg p-6 mb-4 flex justify-between items-start relative" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); ">
                    <div class="flex-1">
                        <h3 class="font-bold text-base mb-1 text-gray-800">Wed, May 16</h3>
                        <!-- Flexbox for Time and Travel Details -->
                        <div class="flex flex-col items-start">
                        <span class="text-m text-gray-800">9:00&nbsp;&nbsp;Manila</span>
                        <div class="flex-none">
                            <i class="fas fa-bus text-gray-800"></i>
                            <span class="text-m text-gray-800">6H 59m bus ride with Victory Liner in <strong class="font-bold text-m">Regular AC</strong></span>
                        </div>
                        <span class="text-m text-gray-800">15:59&nbsp;&nbsp;Baguio</span>
                        <div class="text-m text-gray-800 mt-1">Arrives on Tue, Oct 1. Travel time 5h 59m</div>
                    </div>


                    </div>

                    <!-- Close Button -->
                    <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 focus:outline-none" onclick="window.history.back()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                    </div>






                        <!-- Centered Report Button -->
                        <div class="flex justify-center mt-20">
                            <button
                                id="reportButton"
                                type="button"
                                class="bg-black text-white w-96 px-8 py-4 rounded hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300"
                            >
                                Confirm Arrival
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Overlay (Dimming Effect) -->
    <div id="overlay" class="overlay"></div>

    <!-- Modal -->
    <div id="reportModal" class="hidden">
        <h2 class="text-xl font-semibold text-gray-800">Arrival Confirmed!</h2>
        <button
            id="closeModal"
            class="mt-4 bg-black text-white px-6 py-2 rounded hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300"
        >
            OK
        </button>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
    $(document).ready(function () {
        // Show the modal and overlay when "Report" button is clicked
        $('#reportButton').on('click', function () {
            $('#overlay').fadeIn(); // Show the dimming overlay
            $('#reportModal').fadeIn(); // Show the modal
        });

        // Hide the modal and overlay when "OK" button is clicked
        $('#closeModal').on('click', function () {
            $('#overlay').fadeOut(); // Hide the overlay
            $('#reportModal').fadeOut(); // Hide the modal

            // Redirect to the conductor_page route
            window.location.href = '{{ route('conductor_page') }}'; // Replace 'conductor_page' with your actual route name if needed
        });
    });
</script>

</body>
</html>
