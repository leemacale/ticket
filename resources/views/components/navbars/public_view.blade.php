<header class="text-white bg-black">
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <div class="container flex items-center justify-between px-6 py-4 mx-auto">
        <!-- Logo on the leftmost side -->
        <img src="{{ asset('images/TWbus.png') }}" alt="Logo" class="h-12">

<!-- Modal Structure -->
<div id="registerModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-transparent">
    <!-- Modal container with black background and transparency, increased size -->
    <div class="bg-black bg-opacity-90 p-12 w-[600px] h-[624px] rounded-lg relative z-50 text-center">


        <!-- Header -->
        <h2 class="mb-4 text-4xl font-bold text-white">Create Your Account</h2>

        <!-- Label for occupation selection -->
        <p class="mb-6 text-lg text-white">Please select your occupation</p>

        <!-- Buttons for occupation selection -->
        <div class="flex justify-center gap-6">
<!-- Button wrapped in anchor tag to navigate to the route -->
<a href="/register">
    <button class="px-6 py-2 text-black transition-colors bg-white rounded-lg hover:bg-gray-200">Passenger</button>
</a>
<a href="/register/conductor">
    <button class="px-6 py-2 text-black transition-colors bg-white rounded-lg hover:bg-gray-200">Conductor</button>
</a>        </div>
    </div>
</div>






        <!-- Navigation Links (Desktop View) -->
        <nav class="items-center hidden w-full md:flex">
            <!-- Centered Navigation Links -->
            <div class="flex items-center justify-center flex-grow space-x-6">
                <a href="/" class="font-normal text-white hover:text-gray-300" style="font-family: 'Kanit', sans-serif;">HOME</a>
                <a href="/howtobook" class="font-normal text-white hover:text-gray-300" style="font-family: 'Kanit', sans-serif;">HOW TO BOOK</a>
                <a href="/aboutus" class="font-normal text-white hover:text-gray-300" style="font-family: 'Kanit', sans-serif;">ABOUT US</a>

                <!-- Desktop Dropdown Button and Menu -->
              
            </div>

            <!-- Right-aligned Register and Login Links -->
            <div class="flex items-center ml-auto space-x-4">
<!-- Register Link (Already in your code) -->
<a href="#" id="registerLink" class="font-normal text-white hover:text-gray-300" style="font-family: 'Kanit', sans-serif;">
    Register
</a>                <a href="/login" class="font-normal text-white hover:text-gray-300" style="font-family: 'Kanit', sans-serif;">Login</a>
            </div>
        </nav>

        <!-- Hamburger Menu (Mobile View) -->
        <button id="hamburgerButton" class="text-white md:hidden hover:text-gray-300 focus:outline-none">
            <!-- SVG Hamburger Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Menu (Hidden by default) -->
<div id="mobileNav" class="md:hidden bg-black text-white hidden h-[500px]">
<div class="px-4 py-2 space-y-2">
    <a href="/" class="block hover:bg-gray-700">Home</a>
    <a href="/howtobook" class="block hover:bg-gray-700">How to Book</a>
    <a href="/aboutus" class="block hover:bg-gray-700">About Us</a>

    <!-- Mobile Dropdown Button and Menu -->
    <div class="relative">
        <button id="mobileDropdownButton" class="block hover:bg-gray-700">
            BUS
        </button>
        <div id="mobileDropdownMenu" class="absolute z-50 hidden w-48 mt-2 bg-white border rounded-md shadow-lg left-4">
            <a href="/dltb_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">DLTB</a>
            <a href="/bus/jam_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">JAM Liner</a>
            <a href="/bus/victory_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Victory Liner</a>
        </div>
    </div>

    <!-- Register and Login Section -->
    <a href="/create-account" class="block hover:bg-gray-700">Register</a>
    <a href="/login" class="block hover:bg-gray-700">Login</a>
</div>



</header>


<!-- jQuery (for toggling mobile menu) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Toggle mobile menu on hamburger click
        $('#hamburgerButton').click(function() {
            $('#mobileNav').toggleClass('hidden');
        });

        // Toggle desktop dropdown
        $('#desktopDropdownButton').click(function() {
            $('#desktopDropdownMenu').toggleClass('hidden');
        });

        // Toggle mobile dropdown
        $('#mobileDropdownButton').click(function() {
            $('#mobileDropdownMenu').toggleClass('hidden');
        });

        // Close dropdown if clicked outside
        $(document).click(function(event) {
            if (!$(event.target).closest('#desktopDropdownButton, #desktopDropdownMenu').length) {
                $('#desktopDropdownMenu').addClass('hidden');
            }
            if (!$(event.target).closest('#mobileDropdownButton, #mobileDropdownMenu').length) {
                $('#mobileDropdownMenu').addClass('hidden');
            }
        });

        // Show modal when register link is clicked
        $('#registerLink').on('click', function (e) {
            e.preventDefault(); // Prevent default link action
            $('#registerModal').removeClass('hidden');
        });

        // Hide modal when close button is clicked
        $('#closeModal').on('click', function () {
            $('#registerModal').addClass('hidden');
        });

        // Optional: Hide modal when clicking outside of it
        $('#registerModal').on('click', function (e) {
            if ($(e.target).is('#registerModal')) {
                $(this).addClass('hidden');
            }
        });
    });
</script>

