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
            class="tab-item border-b-2 border-black text-black hover:text-black px-4 pb-1 pointer-events-none">2. Passenger</button>
        <button id="confirmation"
            class="tab-item text-gray-500 hover:text-black px-4 pb-1 pointer-events-none">3. Confirmation</button>
        <button id="payment"
            class="tab-item text-gray-500 hover:text-black px-4 pb-1 pointer-events-none">4. Payment</button>
    </div>
</div>


    <!-- Contact Details and Square Containers -->
    <div class="container mx-auto mt-4 pl-8">
        <div class="flex space-x-4">
            <!-- Contact Details Container -->
            <div class="bg-white shadow  flex items-center" style="height: 33%; width: 60.5%;  position: absolute; top: 140px; left: 151px;">

            <h1 class="text-xl text-black font-bold" style="position: absolute; bottom: 220px; left: 20px;">Contact Details</h1>
            <label for="mobile_phone" class="text-sm text-gray-600 font-semibold mr-4" style="position: absolute; bottom: 190px; left: 24px;">Mobile</label>
            <div style="position: absolute; left: 22px; top: 80px; width: 60.5%; height: 15%; display: flex; align-items: center; gap: 5px;">
  <select id="country_code" name="country_code" class=" h- 32 border border-gray-300 p-2">
  <option value="+63">+63 (Philippines)</option>
  <option value="+44">+44 (UK)</option>
    <option value="+91">+91 (India)</option>
    <option value="+61">+61 (Australia)</option>
    <!-- Add more country codes as needed -->
  </select>
  <input type="tel" id="mobile_phone" name="mobile_phone" class="border border-gray-300 p-2" style="position: absolute; top: 0.5px; left: 163px; width: 120.5%; height: 100%;" placeholder="Enter mobile number" />
  <label for="email" class="text-sm text-gray-600 font-semibold mr-4" style="position: absolute; top: 50px; left: 1px;">Email</label>
  <input type="tel" id="mobile_phone" name="mobile_phone" class="border border-gray-300 p-2" style="position: absolute; top: 80px; left: 1px; width: 149.9%; height: 100%;" placeholder="your@email.com" />

</div>

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





<!-- Passenger Container -->

 <div class="bg-white shadow  flex items-center" style="height: 40%; width: 60.5%;  position: absolute; top: 410px; left: 151px;">
<h1 class="text-xl text-black font-bold" style="position: absolute; bottom: 278px; left: 20px;"> Passenger</h1>

 <label for="mobile_phone" class="text-sm text-gray-600 font-semibold mr-4" style="position: absolute; bottom: 250px; left: 24px;">First Name</label>
<div style="position: absolute; left: 22px; top: 80px; width: 60.5%; height: 15%; display: flex; align-items: center; gap: 5px;">
<input type="tel" id="mobile_phone" name="mobile_phone" class="border border-gray-300 p-2" style="position: absolute; bottom:10px; left: 1px; width: 149.9%; height: 100%;" placeholder="Juan" />

<label for="email" class="text-sm text-gray-600 font-semibold mr-4" style="position: absolute; top: 40px; left: 1px;">Last Name</label>
<input type="tel" id="mobile_phone" name="mobile_phone" class="border border-gray-300 p-2" style="position: absolute; top: 70px; left: 1px; width: 149.9%; height: 100%;" placeholder="Dela Cruz" />

<label for="email" class="text-sm text-gray-600 font-semibold mr-4" style="position: absolute; top: 130px; left: 1px;">Nationality/Citizenship</label>
<select id="mobile_phone" name="mobile_phone" class="border border-gray-300 p-2" style="position: absolute; top: 160px; left: 1px; width: 149.9%; height: 100%;">
  <option value="" disabled selected>--SELECT--</option>
  <option value="filipino">Filipino</option>
  <option value="chinese">Chinese</option>
  <option value="egyptian">Egyptian</option>
  <option value="french">French</option>
  <option value="german">German</option>
  <option value="indian">Indian</option>
  <!-- Add more options as needed -->
</select>

</div>

</div>

<div style="position: absolute; left: 150px; top: 900px; width: 60.5%; height: 15%; display: flex; align-items: center; gap: 5px;">
  <label for="mobile_phone" class="text-xl text-black font-semibold mr-4" style="position: absolute; bottom: 250px; left: 24px;">
    Trip from Manila. Departure: 01 Oct 2024 09:00
  </label>
  <hr style="position: absolute; bottom: 245px; left: 4px; width: 100%; border: 1px solid gray;" />
</div>




    <!-- Automatic Container -->
    <div
    class="w-3/4 bg-white h-45 shadow-md relative flex flex-col items-center"
    style=" height:7% ;position: absolute; top: 780px; left: 170px; width: 890px; margin-bottom: 300px; padding: 20px;"
>
<span class="text-gray-700 text-lg font-medium" style=" position: absolute; top: 10px; left: 23px; ">Automatic</span>
</div>

<button style="padding: 25px 30px; font-size: 18px; color: white; background-color: black; border: none; border-radius: 0; cursor: pointer; display: flex; align-items: center; height: 7%; width: 210px; position: absolute; top: 780px; right: 455px;">    <!-- Upload Icon -->
    <span style="position: absolute; left: 50px;">Choose seats</span>
</button>

<div style="padding: 25px 30px; font-size: 18px; color: black; border: none; border-radius: 0; cursor: pointer; display: flex; align-items: center; height: 7%; width: 460px; position: absolute; top: 830px; left: 145px;">    <input type="checkbox" id="auto-choose" style="margin-right: 10px;" />
    <label for="auto-choose" style="color: black; font-size: 16px; cursor: pointer; white-space: nowrap;">
        Automatically choose best alternative seats in case selected seats are occupied
    </label>
</div>


<!-- NEXT STEP CONTAINER -->
<div
    class="w-3/4 bg-white h-45 shadow-md relative flex flex-col items-center justify-center"
    style="position: absolute; top: 890px; left: 150px; width: 920px; ; padding: 20px; z-index: 10;">
    <!-- Button Container (Flex) -->
    <div class="flex gap-4 w-full justify-center">
       <!-- Back Button -->
<!-- Back Button -->
<button class="w-16 h-16 bg-white text-black text-2xl font-semibold flex items-center justify-center border-2 border-gray-500 hover:bg-gray-200 ml-3" onclick="window.history.back()">
    <img src="{{ asset('images/prevstep.png') }}" alt="Previous" class="w-3 h-3">
</button>

        <!-- Next Step Button -->
<button class="w-full px-8 py-2 bg-black text-white font-semibold hover:bg-gray-600 focus:outline-none flex items-center justify-between" onclick="window.location='{{ route('user.bp-four') }}'" >
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
