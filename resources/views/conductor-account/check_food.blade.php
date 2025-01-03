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
    <x-navbars.conductor-nav.conductor_nav role="Conductor" imageUrl="{{ asset('images/admin.png') }}" /> <!-- Replace static navbar with reusable component -->

<!-- Back Button -->
<div class="flex items-center mb-4 mt-8">

</div>



    <!-- Main Content Layout -->
    <div class="flex container mx-auto mt-4 p-4 ">
        <!-- Sidebar placeholder for future content -->
        <div class="bg-200 w-1/4 h-screen mt-2">
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
        <main class="w-4/5 h-full" style="transform: scale(0.85); transform-origin: top;">            <!-- Horizontal Date Picker -->



          <!-- Main Body Content -->
		  <div class="bg-white shadow-md rounded-lg p-4" style="position:absolute; height: 1000px; width:900px;">   <!-- First Long Rounded Container -->
<div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex justify-between items-center expandable-container" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div>
        <h3 class="font-bold text-sm mb-1 text-gray-800 default-text">Juan Dela Cruz</h3>
    </div>
    <button class="text-black-500 hover:text-red-600 view-btn" onclick="window.location='{{ route('check_food_two') }}'">View</button>
</div>


    <!-- Second Long Rounded Container -->

<div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex justify-between items-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div>
    <h3 class="font-bold text-sm mb-1 text-gray-800">Olaf Peterson</h3>
    </div>
    <button class="text-black-500  hover:text-red-600">View</button>
</div>






</div>


        </main>
    </div>




</body>
</html>
