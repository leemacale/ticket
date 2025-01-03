<!-- resources/views/components/navbars/user_page/booking_navbar.blade.php -->
<header class="bg-black text-white py-4"> <!-- Increased padding -->
    <div class="container mx-auto flex items-center px-6"> <!-- Flex container for alignment -->
        <!-- Image acting as a back button -->
        <a href="{{ route('user.logged-in-bp') }}" class="mr-4">
            <img src="{{ asset('images/back.png') }}" alt="Back" class="h-10 w-10"> <!-- Replace with your back arrow image -->
        </a>

        <!-- Logo -->
        <img src="{{ $logoUrl ?? asset('images/TWbus.png') }}" alt="Ticketwise Bus Logo" class="h-12"> <!-- Replace with image -->

        <!-- Empty div to maintain structure if needed -->
        <div class="flex items-center"></div>
    </div>
</header>
