<header class="bg-black text-white py-4"> <!-- Increased padding -->
    <div class="container mx-auto flex justify-between items-center px-6"> <!-- Increased horizontal padding -->
        <div class="ml-auto flex items-center"> <!-- Added ml-auto to push content to the right -->
            <span class="mr-4 text-base">{{ $role ?? 'Conductor' }}</span> <!-- Increased font size and margin -->
            <div class="rounded-full h-10 w-10 overflow-hidden"> <!-- Increased size of image container -->
                <img src="{{ $imageUrl ?? asset('images/admin.png') }}" alt="" class="h-full w-full object-cover">
            </div>
        </div>
    </div>
</header>
<div class="h-1 bg-red-600"></div> <!-- Increased height of the red line -->
