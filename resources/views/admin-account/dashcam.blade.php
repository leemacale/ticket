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
    <x-navbars.navbar role="Admin" imageUrl="{{ asset('images/admin.png') }}" /> <!-- Replace static navbar with reusable component -->

    <!-- Back Button -->
    <div class="flex items-center mb-4 mt-8">
        <button class="bg-black text-white rounded-lg px-4 py-2 shadow hover:bg-red-600 transition ml-4" onclick="window.history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back
        </button>
    </div>

    <!-- Main Content Layout -->
    <div class="flex container mx-auto mt-4 p-4">
        <!-- Sidebar placeholder for future content -->
        <div class="w-1/4 h-screen mt-2">
            <x-sidebars.admin_page.dashcam_recordings
                title="Admin Account"
                :links="[
                    ['name' => 'Incident Report', 'url' => '#'],
                    ['name' => 'Sales Report', 'url' => '#'],
                    ['name' => 'Ratings and Feedback', 'url' => '#'],
                    ['name' => 'Bus Arrival', 'url' => '#'],
                ]"
            />
        </div>

        <!-- Dashcam Image to the right of the sidebar -->
        <div class="w-3/4 mt-4 ml-4">
            <img src="{{ asset('images/dashcam.png') }}" alt="Dashcam" class="max-w-full h-auto shadow-lg rounded-lg">
        </div>
    </div>

</body>
</html>
