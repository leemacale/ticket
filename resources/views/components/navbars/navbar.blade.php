<!-- resources/views/components/navbar.blade.php -->
<header class="bg-black text-white py-4"> <!-- Increased padding -->


<div class="container mx-auto flex justify-between items-center px-6"> <!-- Increased horizontal padding -->
        <h1 class="text-2xl font-bold"> <!-- Increased font size -->
            <span class="text-red-600">TICKETWISE</span>
            <span class="text-white">BUS</span>
        </h1>
        <div class="flex items-center">
            <span class="mr-4 text-base">{{ $role ?? 'Admin' }}</span> <!-- Increased font size and margin -->
            <div class=" rounded-full h-10 w-10 overflow-hidden"> <!-- Increased size of image container -->
                <img src="{{ $imageUrl ?? asset('images/admin.png') }}" alt="" class="h-full w-full object-cover">
            </div>
        </div>
    </div>
</header>
<div class="h-1 bg-red-600"></div> <!-- Increased height of the red line -->
