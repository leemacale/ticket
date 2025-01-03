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
    <x-navbars.conductor-nav.conductor_nav role="Conductor" imageUrl="{{ asset('images/admin.png') }}" /> <!-- Replace static navbar with reusable component -->
  <!-- Home Button -->
  <div class="flex items-center mb-4 mt-8">
        <button class="bg-black text-white rounded-lg px-4 py-2 shadow hover:bg-red-600 transition ml-4"
        onclick="window.location='{{ route('conductor_page') }}'">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v12a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
            </svg>
            Home
        </button>
    </div>


    <!-- Passenger and Square Containers -->
    <div class="container mx-auto mt-12 pl-8">
        <div class="flex space-x-4">


          <!-- Square Container -->
		  <div class="bg-white shadow h-32 w-80 flex flex-col items-start justify-between px-4 py-2 lg:ml-auto mt-4 top-34">
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

<!-- Bus Arrival Details Container -->
<div class="bg-white shadow p-6 mb-4 flex justify-between items-start relative" style=" position: absolute; top: 220px; width: 60.5%;">
      <div class="flex-1">
      <div class="absolute top-5 left-1/2 transform -translate-x-1/2 border-l border-black" style="height: 30%; left: 1.5%; margin-top: 5%;"></div>

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
</div>


<!-- Select Seats Container -->
<div class="bg-white shadow p-6 mb-4 flex justify-between items-start relative" style="position: absolute; bottom: 80px; width: 60.5%; height: 35%;">
    <!-- Left part (Title section) -->
    <div class="absolute top-0 left-0 p-4">

        <h3 class="text-medium text-gray-800">Select your seat(s) here</h3>
    <!-- First Row -->
<div class="flex gap-2" style="position: absolute; top: 70px; flex-wrap: nowrap;">
    <!-- Seat 1 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        1
    </button>
    <!-- Seat 2 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        5
    </button>
    <!-- Seat 3 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        9
    </button>
    <!-- Seat 4 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        13
    </button>
    <!-- Seat 5 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        17
    </button>
    <!-- Seat 6 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        21
    </button>
    <!-- Seat 7 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        25
    </button>
    <!-- Seat 8 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        29
    </button>
    <!-- Seat 9 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        33
    </button>
    <!-- Seat 10 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        37
    </button>
    <!-- Seat 11 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        41
    </button>
    <!-- Seat 12 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        45
    </button>
</div>




  <!-- Second Row -->
  <div class="flex gap-2" style="position: absolute; top: 100px; flex-wrap: nowrap;">
    <!-- Seat 1 (Available - Red) -->
    <button class="w-5 h-5 bg-blue-800 text-white flex items-center justify-center" onclick="changeColor(this)">
        2
    </button>
    <!-- Seat 2 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        6
    </button>
    <!-- Seat 3 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        10
    </button>
    <!-- Seat 4 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        14
    </button>
    <!-- Seat 5 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        18
    </button>
    <!-- Seat 6 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        22
    </button>
    <!-- Seat 7 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        26
    </button>
    <!-- Seat 8 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        30
    </button>
    <!-- Seat 9 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        34
    </button>
    <!-- Seat 10 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        38
    </button>
    <!-- Seat 11 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        42
    </button>
    <!-- Seat 12 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        46
    </button>

    <button class="w-5 h-5 bg-blue-800 text-white flex items-center justify-center" style="position: absolute; bottom: -30px; right: -1px;" onclick="changeColor(this)">
        47
    </button>
</div>

<!-- Third Row -->
<div class="flex gap-2" style="position: absolute; bottom: -122px; left: 18px; flex-wrap: nowrap;">
    <!-- Seat 1 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        3
    </button>
    <!-- Seat 2 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        7
    </button>
    <!-- Seat 3 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        11
    </button>
    <!-- Seat 4 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        15
    </button>
    <!-- Seat 5 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        19
    </button>
    <!-- Seat 6 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        23
    </button>
    <!-- Seat 7 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        27
    </button>
    <!-- Seat 8 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        31
    </button>
    <!-- Seat 9 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        35
    </button>
    <!-- Seat 10 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        39
    </button>
    <!-- Seat 11 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        43
    </button>
    <!-- Seat 12 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        47
    </button>


</div>

<!-- Fourth Row -->
<div class="flex gap-2" style="position: absolute; top: 190px; left: 18px; flex-wrap: nowrap;">
    <!-- Seat 1 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        4
    </button>
    <!-- Seat 2 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-blue-800 text-white flex items-center justify-center">
        8
    </button>
    <!-- Seat 3 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        12
    </button>
    <!-- Seat 4 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        16
    </button>
    <!-- Seat 5 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        20
    </button>
    <!-- Seat 6 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        24
    </button>
    <!-- Seat 7 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        28
    </button>
    <!-- Seat 8 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        32
    </button>
    <!-- Seat 9 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        36
    </button>
    <!-- Seat 10 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        40
    </button>
    <!-- Seat 11 (Available - Red) -->
    <button class="w-5 h-5 bg-red-700 text-white flex items-center justify-center" onclick="changeColor(this)">
        44
    </button>
    <!-- Seat 12 (Reserved - Blue) -->
    <button class="w-5 h-5 bg-blue-800 text-white flex items-center justify-center">
        48
    </button>


    </div>

<script>
    function changeColor(element) {
        // Check if the element is red and change it to yellow
        if (element.classList.contains('bg-red-700')) {
            element.classList.remove('bg-red-700');
            element.classList.add('bg-yellow-500');
        }
        // If the element is yellow, change it back to red
        else if (element.classList.contains('bg-yellow-500')) {
            element.classList.remove('bg-yellow-500');
            element.classList.add('bg-red-700');
        }
    }
</script>
<!-- BUS TYPE -->
<div style="position: absolute; bottom: -40px; left: 400px;">
  <h3 class="text-m" style="white-space: nowrap; color: gray; font-family: 'Kanit', sans-serif; font-weight: 500;">BUS TYPE</h3>
  <h4 class="text-m" style="white-space: nowrap; color: black; ">Regular AC</h4>
  </div>


<!-- Legend Section -->
<div style="position: absolute; bottom: -150px; left: 400px;">
<h3 class="text-m" style="white-space: nowrap; color: gray; font-family: 'Kanit', sans-serif; font-weight: 500;">LEGENDS</h3>
        <ul>
            <li class="flex items-center gap-2">
                <span class="w-5 h-5 bg-red-700 block"></span>
                <span>Available</span>
            </li>
            <li class="flex items-center gap-2">
                <span class="w-5 h-5 bg-yellow-500 block"></span>
                <span>Selected</span>
            </li>
            <li class="flex items-center gap-2">
                <span class="w-5 h-5 bg-blue-800 block"></span>
                <span>Reserved</span>
            </li>
        </ul>
    </div>




    </div>

    <!-- Vertical Line Divider (further right) -->
    <div class="absolute top-5 left-1/2 transform -translate-x-1/2 border-l border-gray-300" style="height: 90%; left: 55%;"></div>

    <!-- Right part (Content section) -->
    <div class="flex-grow p-4">
        <!-- Seat Selection Grid (Left side) -->

 <!-- Upload ID Section -->
<div style="position: absolute; top: 40px; right: 90px;">
    <div class="text-xl" style="white-space: nowrap; color: black; font-family: 'Kanit'; font-weight: normal;">
        Upload your I.D here for discount
    </div>

    <!-- Unordered List with black period bullets -->
    <ul style="color: black; font-weight: 400; font-size: 16px; list-style-type: disc; padding-left: 20px;">
        <li>Senior Citizen</li>
        <li>Person With Disability (PWD)</li>
        <li>Student</li>
    </ul>

 <!-- Upload Button with Icon -->
<div style="display: flex; justify-content: center; margin-top: 20px;">
<button style="padding: 25px 30px; font-size: 18px; color: white; background-color: black; border: none; border-radius: 0; cursor: pointer; display: flex; align-items: center; width: 350px; position: absolute; right: -50px;">    <!-- Upload Icon -->
    <i class="fas fa-upload" style="position: absolute; left: 90px;"></i>
    <span style="position: absolute; left: 120px;">Upload Here</span>
</button>

</div>


</div>





    </div>
</div>


<!-- Review Container -->

<div class="w-3/4 bg-white h-48 shadow-md relative flex items-center"style="position: absolute; top: 700px; left: 150px; width: 920px" >
    <!-- Vertical line on the left inside -->
    <div class="absolute left-44 top-4 h-40 w-px bg-black" style="position: absolute; right: -123px;"></div> <!-- Adjusted line -->



    <!-- Flexbox container for images and text -->
    <div class="mt-4 flex items-center justify-start">
        <img src="{{ asset('images/dltb_logo.png') }}" alt="Image description" class="w-38 h-38 object-cover mr-2 relative" style="position: absolute; right: 850px; top: 30px;" > <!-- First image -->
        <h4 class="text-m" style="white-space: nowrap; color: black; position: absolute; bottom: 100px; left: 22px">DLTBco.</h4>

        <h4 class="text-m" style="white-space: nowrap; color: black; position: absolute; bottom: 40px; left: 22px">143 Reviews.</h4>


            <!-- Separate container for images and additional text -->
            <div class="flex items-center space-x-4" style="margin-left: 120px;">

            <div style="display: flex; gap: 5px; position: absolute; left: 20px;">
    <i class="far fa-star" style="color: black; font-size: 19px;"></i>
    <i class="far fa-star" style="color: black; font-size: 19px;"></i>
    <i class="far fa-star" style="color: black; font-size: 19px;"></i>
    <i class="far fa-star" style="color: black; font-size: 19px;"></i>
</div>


<span style="color: black; font-family: 'Kanit', sans-serif; font-size: 1.25rem; position: absolute; left: 120px;">4.4</span>
<div class="flex items-center space-x-2">
    <img src="{{ asset('images/dltb-one.png') }}" alt="Second image" class="w-30 h-33 rounded-lg" style="position: absolute; left: 200px;">
    <img src="{{ asset('images/seats-one.png') }}" alt="Third image" class="w-30 h-33 rounded-lg" style="position: absolute; right: 340px;">
</div>
</div>

        </span>
    </div>
</div>

    <!-- Order Food Container -->
<div
    class="w-3/4 bg-white h-45 shadow-md relative flex flex-col items-center"
    style="position: absolute; top: 910px; left: 150px; width: 920px; margin-bottom: 300px; padding: 20px;"
>
    <p style="margin-top: 5px; font-size: 0.870rem;  ">
        <strong style="white-space: nowrap; font-size: 0.870rem;">
            THE TRIP MIGHT BE LONG AND YOU MIGHT GET HUNGRY. SO WE OFFER OUR ORDERING SYSTEM WHERE YOU CAN ORDER FOOD.
        </strong>
        The food you order can be claimed with the conductor.<br>
        Please wait for the conductor to buy the food you order along the trip.
    </p>

 <!-- Order Food Button -->
<button class="mt-4 px-6 py-2 bg-black text-white font-semibold rounded hover:bg-gray-800 focus:outline-none flex items-center">
    <img src="{{ asset('images/OrderFood.png') }}" alt="Order Food" class="w-5 h-5 mr-2"> <!-- Add margin-right to separate image from text -->
    <span class="text-center">Order Food</span>
</button>

<!-- The Button -->
<button id="overrideButton" class="px-6 py-2 bg-black text-white font-semibold rounded hover:bg-red-700 focus:outline-none" style="position: absolute; bottom:-100px; left:273px; width:40%; height:30%; z-index: 999;">
    <span class="text-center">Override</span>
</button>
<!-- The Popup (Initially hidden) -->
<div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" style="display: none;">
    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center justify-center">
        <p class="text-xl font-semibold text-center mb-4">Successfully Overridden</p>
        <!-- OK Button to navigate to the conductor_page route -->
        <button id="okButton" class="px-6 py-2 bg-black text-white font-semibold rounded hover:bg-gray-700 focus:outline-none">
            OK
        </button>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // When the button is clicked
    $('#overrideButton').click(function() {
        // Show the popup
        $('#popup').fadeIn();
    });

    // Close the popup when clicking the "OK" button and redirect to the conductor_page route
    $('#okButton').click(function() {
        window.location.href = "{{ route('conductor_page') }}";  // Laravel route helper to redirect
    });

    // Close the popup when clicked outside of the popup content
    $('#popup').click(function(e) {
        if ($(e.target).closest('.bg-white').length === 0) {
            $('#popup').fadeOut();
        }
    });
});
</script>





</div>








<!-- WHITE SPACE -->

<div class="w-3/4  h-48  relative flex items-center" style="position: absolute; top: 1100px; left: 150px; width: 920px;">
    <!-- Container content here -->
</div>

<div style="height: 50px;"></div> <!-- White space -->









</body>
</html>
