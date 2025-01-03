<header class="bg-black text-white">
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo on the leftmost side -->
        <img src="{{ asset('images/TWbus.png') }}" alt="Logo" class="h-12">

        <!-- Navigation Links (Desktop View) -->
        <nav class="hidden md:flex items-center w-full">
            <!-- Centered Navigation Links -->
            <div class="flex justify-center space-x-6 flex-grow items-center">
                <a href="/" class="text-white hover:text-gray-300 font-normal" style="font-family: 'Kanit', sans-serif;">HOME</a>
                <a href="/howtobook" class="text-white hover:text-gray-300 font-normal" style="font-family: 'Kanit', sans-serif;">HOW TO BOOK</a>
                <a href="/aboutus" class="text-white hover:text-gray-300 font-normal" style="font-family: 'Kanit', sans-serif;">ABOUT US</a>

                <!-- Desktop Dropdown Button and Menu -->
                <div class="relative">
                    <button id="desktopDropdownButton" class="block px-4 py-2 hover:text-gray-300 flex items-center space-x-2" style="font-family: 'Kanit', sans-serif;">
                        <span>BUS</span>
                        <img src="{{ asset('images/down.png') }}" alt="Down arrow">
                    </button>
                    <div id="desktopDropdownMenu" class="hidden absolute left-0 w-48 mt-2 bg-white border rounded-md shadow-lg z-50" >
                        <a href="/dltb_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">DLTB</a>
                        <a href="/jam_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">JAM Liner</a>
                        <a href="/victory_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Victory Liner</a>
                    </div>
                </div>
            </div>

            <!-- Right-aligned Register and Login Links -->
            <div class="ml-auto flex items-center space-x-4">
               <!-- Right Section: Register and Login Buttons -->
			<div class="flex space-x-4">
			<div class="text-left mr-4 -mt-2"> <!-- Added negative margin-top -->
					<span class="text-xs">Passenger</span> <!-- Passenger text -->
					<span class="block text-base">{{  'Juan Dela Cruz' }}</span> <!-- Increased font size and margin -->
				</div>
				<div class="rounded-full h-10 w-10 overflow-hidden"> <!-- Increased size of image container -->
					<img src="{{ asset('images/passenger.png') }}" alt="user" class="h-full w-full object-cover">

				</div>
			</div>
            </div>
        </nav>

        <!-- Hamburger Menu (Mobile View) -->
        <button id="hamburgerButton" class="md:hidden text-white hover:text-gray-300 focus:outline-none">
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
        <div id="mobileDropdownMenu" class="hidden absolute left-4 w-48 mt-2 bg-white border rounded-md shadow-lg z-50">
            <a href="/dltb_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">DLTB</a>
            <a href="/bus/jam_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">JAM Liner</a>
            <a href="/bus/victory_bus" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Victory Liner</a>
        </div>
    </div>


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
});

</script>
