<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketwise Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>

        // JavaScript for managing active tab
        function setActiveTab(tabId) {
            const tabs = document.querySelectorAll('.tab-item');
            tabs.forEach(tab => {
                tab.classList.remove('border-b-2', 'border-black');
                tab.classList.add('text-gray-500');
            });

            const selectedTab = document.getElementById(tabId);
            selectedTab.classList.add('border-b-2', 'border-black');
            selectedTab.classList.remove('text-gray-500');
        }
    </script>
    <style>
        /* Custom scrollbar styling for horizontal scrolling */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbars.user_page.booking_navbar role="Admin" imageUrl="{{ asset('images/admin.png') }}" />

    <!-- Secondary Navigation -->
    <div class="bg-gray-200 py-2">
    <div class="container mx-auto flex justify-start space-x-8 px-4">
        <button id="backToSearch"
            class="tab-item text-gray-500 hover:text-black px-4 pb-1 pointer-events-none">Back To Search</button>
        <button id="itinerary"
            class="tab-item text-gray-500 px-4 pb-1 pointer-events-none">1. Itinerary</button>
        <button id="passenger"
            class="tab-item text-gray-500 text-black hover:text-black px-4 pb-1 pointer-events-none">2. Passenger</button>
        <button id="confirmation"
            class="tab-item border-b-2 border-black text-black hover:text-black px-4 pb-1 pointer-events-none">3. Confirmation</button>
        <button id="payment"
            class="tab-item text-gray-500 hover:text-black px-4 pb-1 pointer-events-none">4. Payment</button>
    </div>
</div>


    <!-- Contact Details and Square Containers -->
    <div class="container mx-auto mt-4 pl-8">
        <div class="flex space-x-4">
           <!-- Trip Summary Container -->
<div class="bg-white shadow flex items-center" style="height: 25%; width: 60.5%; position: absolute; top: 140px; left: 151px;">

<h1 class="text-xl text-black font-bold" style="position: absolute; bottom: 160px; left: 20px;">Trip Summary</h1>

<label for="passenger_info" class="text-m text-gray-800 font-semibold mr-4" style="position: absolute; bottom: 130px; left: 24px;">Passenger's Information</label>

<!-- Bullet form info below the label -->
<ul class="list-disc text-gray-900 ml-6" style="position: absolute; bottom: 98px; left: 24px;">
    <li>Olaf Peterson, Filipino</li>

</ul>

<label for="passenger_info" class="text-m text-gray-800 font-semibold mr-4" style="position: absolute; bottom: 70px; left: 24px;">Departure Date</label>

<!-- Bullet form info below the label -->
<ul class="list-disc text-gray-900 ml-6" style="position: absolute; bottom: 40px; left: 24px;">
    <li>Tue, Oct 1, 2024, 9:00 am - Manila - Baguio</li>

</ul>

</div>



            <!-- Square Container -->
            <div class="bg-white shadow h-32 w-80 flex flex-col items-start justify-between px-4 py-2" style="position: absolute; top: 140px; right: 110px;">
                <!-- Upper Content -->
                <div class="flex items-start justify-between w-full pb-2">
                    <span class="text-gray-700 text-xl">Tickets</span>
                    <span class="text-gray-700 text-xl">700 PHP</span>
                </div>

                <!-- Horizontal Line -->
                <hr class="border-t border-black w-full my-2 mb-4">

                <!-- Lower Content -->
                <div class="flex items-start justify-between w-full mt-0 mb-1">
                    <span class="text-gray-700 text-xl font-semibold">Total</span>
                    <span class="text-gray-700 text-xl font-semibold">700 PHP</span>
                </div>
            </div>
        </div>






    <!-- Automatic Container -->
    <div
    class="w-3/4 bg-white h-45 shadow-md relative flex flex-col items-center"
    style=" height:7% ;position: absolute; bottom: 380px; left: 150px; width: 920px; margin-bottom: 100; padding: 20px;"
>
<span class="text-black text-xs" style="position: absolute; top: 16px; left: 23px; height: 5%; white-space: nowrap;">
    By clicking the Next Step button below, you confirm that you have read and understood
    <a href="https://example.com/terms-and-conditions" class="text-blue-500 " target="_blank">Terms and Conditions</a>, and
    <a href="https://example.com/privacy-policy" class="text-blue-500 " target="_blank">Privacy Policy</a>, and agree to be bound by them.
</span>

</div>



<!-- NEXT STEP CONTAINER -->
<div
    class="w-3/4 bg-white h-45 shadow-md relative flex flex-col items-center justify-center"
    style="position: absolute; top: 420px; left: 150px; width: 920px; ; padding: 20px; z-index: 10;">
    <!-- Button Container (Flex) -->
    <div class="flex gap-4 w-full justify-center">
       <!-- Back Button -->
<!-- Back Button -->
<button class="w-16 h-16 bg-white text-black text-2xl font-semibold flex items-center justify-center border-2 border-gray-500 hover:bg-gray-200 ml-3" onclick="window.history.back()">
    <img src="{{ asset('images/prevstep.png') }}" alt="Previous" class="w-3 h-3">
</button>

        <!-- Next Step Button -->
<button class="w-full px-8 py-2 bg-black text-white font-semibold hover:bg-gray-600 focus:outline-none flex items-center justify-between" onclick="window.location='{{ route('user.bp-five') }}'" >
    <!-- Text Centered -->
    <span class="flex-grow text-center">Next Step</span>
    <!-- Image on the right -->
    <img src="{{ asset('images/forward.png') }}" alt="Next" class="w-3 h-3 ml-2">
</button>


    </div>
</div>





<!-- WHITE SPACE -->

<div class="w-3/4  h-48  relative flex items-center" style="position: absolute; top: 1100px; left: 150px; width: 920px;">
    <!-- Container content here -->
</div>

<div style="height: 50px;"></div> <!-- White space -->









</body>
</html>
