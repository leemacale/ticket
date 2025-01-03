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
    <!-- First Long Rounded Container -->

<div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex justify-between items-center expandable-container" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); height: 56%;">
    <div>
        <h1 class="font-bold text-2xl mb-1 text-gray-800 default-text" style="position: absolute; top:70px; left:340px;">Juan Dela Cruz</h1>
		<h2 class="font-bold text-lg mb-1 text-gray-800 default-text" style="position: absolute; top:100px; left:390px;">Seat #1</h2>

		<hr style="position: absolute; top: 140px; left: 50px; width: 800px; border: 1px solid #000;">
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:190px; left:140px;">Food</h1>
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:230px; left:140px;">Yum Burger</h1>
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:270px; left:140px;">Coke Float</h1>
		<!-- Second Row -->
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:190px; left:390px;">Quantity</h1>
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:230px; left:421px;">1</h1>
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:270px; left:421px;">1</h1>

		<!-- Third Row -->
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:190px; left:700px;">Price</h1>
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:230px; left:690px;">40 php</h1>
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:270px; left:690px;">45 php</h1>
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top:310px; left:550px;">Ordering Fee: &nbsp;&nbsp; 10 php</h1>
		<hr style="position: absolute; top: 350px; left: 680px; width: 10%; border: 1px solid #000;">
		<h2 class=" text-xl mb-1 text-gray-800 default-text" style="position: absolute; top: 360px; left:625px;">Total: &nbsp;&nbsp; 95 php</h1>

<!-- Button -->
<button
    class="mt-4 px-10 py-4 bg-black text-white font-semibold rounded hover:bg-gray-800 focus:outline-none flex items-center"
    style="position:absolute; left:340px; top: 420px;"
    id="confirmOrderButton"
>
    <span class="text-center">Confirm Order</span>
</button>

<!-- Modal -->
<div id="confirmationModal" class="fixed inset-0 flex justify-center items-center z-50 hidden">
    <div class="bg-black p-8 rounded-lg text-center max-w-2xl w-full" style="position:absolute; left:111px;top:70px; width:123%; ">
        <h2 class="text-2xl font-semibold mb-4 text-white">Order Confirmed!</h2>
        <p class="mb-6 text-white">Order has been confirmed successfully!</p>
        <button id="closeModalButton" class="px-6 py-3 bg-black text-white font-semibold rounded">OK</button>
    </div>
</div>

<!-- Overlay for dimming background -->
<div id="overlay" class="overlay"></div>

	</div>
	<button class="absolute top-5 right-6 text-gray-600 hover:text-gray-900 focus:outline-none" onclick="window.history.back()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
		</div>

    <!-- Second Long Rounded Container -->

<div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex justify-between items-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div>
    <h3 class="font-bold text-sm mb-1 text-gray-800">Olaf Peterson</h3>
    </div>
    <button class="text-black-500  hover:text-red-600">View</button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // When the "Confirm Order" button is clicked
    $('#confirmOrderButton').click(function() {
        // Show the modal and overlay with fade-in effect
        $('#confirmationModal').removeClass('hidden').hide().fadeIn();
        $('#overlay').fadeIn();
    });

    // When the "OK" button in the modal is clicked
    $('#closeModalButton').click(function() {
        // Hide the modal and overlay with fade-out effect
        $('#confirmationModal').fadeOut(function() {
            $('#overlay').fadeOut();
            // Redirect to the previous page after the modal disappears
            window.history.back();
        });
    });
});
</script>

</div>


        </main>
    </div>

</body>
</html>
