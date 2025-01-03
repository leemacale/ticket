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
        <x-navbars.navbar role="Admin" imageUrl="{{ asset('images/admin.png') }}" /> <!-- Static navbar with reusable component -->

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
            <div class="bg-200 w-1/4 h-screen mt-2">
                <x-sidebars.admin_page.ratings-feedbacks
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
            <div class="bg-white shadow-md rounded-lg -mt-5 p-4 h-10000">
    <!-- First Long Rounded Container -->
    <div class="bg-gray-105 rounded-lg p-10 mb-8  duration-200 flex justify-between items-start relative" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div class="w-full flex flex-col items-center justify-center"> <!-- Use flex-col for vertical stacking -->

        <div class="flex items-center space-x-1 mb-2"> <!-- Added margin-bottom for spacing -->
            <!-- Star Rating -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
        </div>

        <!-- New div inside the long rounded container, below the star rating -->
        <div class="text-center"> <!-- Centered text -->
            <div class="flex items-center justify-center space-x-2"> <!-- Flex container for centering with space between -->
                <div class="rounded-full h-8 w-8 overflow-hidden"> <!-- Increased size of image container -->
                    <img src="{{ $imageUrl ?? asset('images/user.jpg') }}" alt="" class="h-full w-full object-cover">
                </div>
                <p class="font-bold text-gray-700">Olaf Peterson</p> <!-- Bold name -->
            </div>
            <p class="text-gray-700 ml-2">Yo! this website deserves a 5 Star! This is the best booking site I used so far!</p> <!-- Example text with left margin -->
        </div>
    </div>
</div>




<!-- Second Long Rounded Container -->


<div class="bg-gray-105 rounded-lg p-10 mb-8 duration-200 flex justify-between items-start relative" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
<div class="w-full flex flex-col items-center justify-center"> <!-- Use flex-col for vertical stacking -->

        <div class="flex items-center space-x-1 mb-2"> <!-- Added margin-bottom for spacing -->
            <!-- Star Rating -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
        </div>

        <!-- New div inside the long rounded container, below the star rating -->
        <div class="text-center"> <!-- Centered text -->
            <div class="flex items-center justify-center space-x-2"> <!-- Flex container for centering with space between -->
                <div class="rounded-full h-8 w-8 overflow-hidden"> <!-- Increased size of image container -->
                    <img src="{{ $imageUrl ?? asset('images/JDC.png') }}" alt="" class="h-full w-full object-cover">
                </div>
                <p class="font-bold text-gray-700"> Juan Dela Cruz</p> <!-- Bold name -->
            </div>
            <p class="text-gray-700 ml-2">I like to travel a lot, and this site helped me a lot.</p> <!-- Example text with left margin -->
        </div>
    </div>
 </div>

    <!-- Third Long Rounded Container -->
    <div class="bg-gray-105 rounded-lg p-10 mb-8  duration-200 flex justify-between items-start relative" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div class="w-full flex flex-col items-center justify-center"> <!-- Use flex-col for vertical stacking -->

        <div class="flex items-center space-x-1 mb-2"> <!-- Added margin-bottom for spacing -->
            <!-- Star Rating -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
        </div>

        <!-- New div inside the long rounded container, below the star rating -->
        <div class="text-center"> <!-- Centered text -->
            <div class="flex items-center justify-center space-x-2"> <!-- Flex container for centering with space between -->
                <div class="rounded-full h-8 w-8 overflow-hidden"> <!-- Increased size of image container -->
                    <img src="{{ $imageUrl ?? asset('images/user.jpg') }}" alt="" class="h-full w-full object-cover">
                </div>
                <p class="font-bold text-gray-700">James Young</p> <!-- Bold name -->
            </div>
            <p class="text-gray-700 ml-2">Yo! this looks great! This is the best booking site i know!</p> <!-- Example text with left margin -->
        </div>
    </div>
</div>


   <!-- Fourth Long Rounded Container -->
   <div class="bg-gray-105 rounded-lg p-10 mb-8  duration-200 flex justify-between items-start relative" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div class="w-full flex flex-col items-center justify-center"> <!-- Use flex-col for vertical stacking -->

        <div class="flex items-center space-x-1 mb-2"> <!-- Added margin-bottom for spacing -->
            <!-- Star Rating -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 1 7.19 7.63 0 8.24l5.46 3.73L3.82 19z"/>
            </svg>
        </div>

        <!-- New div inside the long rounded container, below the star rating -->
        <div class="text-center"> <!-- Centered text -->
            <div class="flex items-center justify-center space-x-2"> <!-- Flex container for centering with space between -->
                <div class="rounded-full h-8 w-8 overflow-hidden"> <!-- Increased size of image container -->
                    <img src="{{ $imageUrl ?? asset('images/user.jpg') }}" alt="" class="h-full w-full object-cover">
                </div>
                <p class="font-bold text-gray-700">Rica Vada</p> <!-- Bold name -->
            </div>
            <p class="text-gray-700 ml-2">Great, but could improve a little</p> <!-- Example text with left margin -->
        </div>
    </div>
</div>

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
