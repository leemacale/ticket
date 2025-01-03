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
            class="tab-item text-gray-500 text-black hover:text-black px-4 pb-1 pointer-events-none">3. Confirmation</button>
        <button id="payment"
            class="tab-item border-b-2 border-black hover:text-black px-4 pb-1 pointer-events-none">4. Payment</button>
    </div>
</div>


    <!-- Contact Details and Square Containers -->
    <div class="container mx-auto mt-4 pl-8">
        <div class="flex space-x-4">
           <!-- Trip Summary Container -->




            <!-- Square Container -->
            <div class="bg-white shadow h-32 w-80 flex flex-col items-start justify-between px-4 py-2" style="position: absolute; top: 140px; right: 110px;">
                <!-- Upper Content -->
                <div class="flex items-start justify-between w-full pb-2">
                    <span class="text-gray-700 text-xl">Tickets</span>
                    <span class="text-gray-700 text-xl">700 PHP</span>
                </div>

                <div class="flex items-start justify-between w-full pb-1">
                    <span class="text-gray-700 text-xl">Taxes and fees</span>
                    <span class="text-gray-700 text-xl">32 PHP</span>
                </div>


                <!-- Horizontal Line -->
                <hr class="border-t border-black w-full my-2 mb-1">

                <!-- Lower Content -->
                <div class="flex items-start justify-between w-full mt-0 mb-2">
                    <span class="text-gray-700 text-xl font-semibold">Total</span>
                    <span class="text-gray-700 text-xl font-semibold">732 PHP</span>
                </div>
            </div>
        </div>






    <!-- Encrypted and Secure Container -->
    <div
    class="w-3/4 bg-blue-200 h-45  relative flex flex-col items-center"
    style=" height:7% ;position: absolute; bottom: 585px; left: 150px; width: 920px; margin-bottom: 100; padding: 20px;"
>
<img src="{{ asset('images/shield.png') }}" alt="Previous" class="w-4 h-4" style="position: absolute; top: 19px; left: 10px;">
<span class="text-black text-xs" style="position: absolute; top: 19px; left: 33px; height: 5%; white-space: nowrap;">
    All payment data is encrypted and secure
</span>

</div>



<!-- NEXT STEP CONTAINER -->
<div
    class="w-3/4 bg-white  shadow-md relative flex flex-col items-center justify-center"
    style="position: absolute; top: 200px; left: 150px; height:12%; width: 920px; ; padding: 20px; z-index: 10;">
    <!-- Button Container (Flex) -->

    <input type="radio" id="gcash" name="payment_method" class="absolute left-3 top-4" checked><h1 class="text-xl text-black font-bold" style="position: absolute; bottom: 57px; left: 30px;"></h1>
<img src="{{ asset('images/paymongo.png') }}" alt="Previous" class="w-18 h-6" style="position: absolute; top: 13px; left: 35px;">
<p style="margin-top: 10px; margin-left: -750px; font-size: 0.870rem;  ">
Service Fee 32 PHP
    </p>

	<button class="w-full px-8 py-2 bg-black text-white font-semibold hover:bg-gray-600 focus:outline-none" style="position: absolute; top: 120px; left: 210px; width:50%;" onclick="window.location='{{ route('user.payment-confirmed') }}'" >
    <!-- Text Centered -->
    <span class="flex-grow text-center">Pay 732 PHP</span>
    <!-- Image on the right -->
</button>





    </div>
</div>





<!-- WHITE SPACE -->

<div class="w-3/4  h-1  relative flex items-center" style="position: absolute; top: 800px; left: 150px; width: 920px;">
    <!-- Container content here -->
</div>

<div style="height: 50px;"></div> <!-- White space -->









</body>
</html>
