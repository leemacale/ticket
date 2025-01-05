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

    
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbars.public_view role="Admin" imageUrl="{{ asset('images/admin.png') }}" />

  <!-- Image with Text Overlay -->
<div class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/bus-bg.png') }}" alt="Banner Image"
         class="object-cover w-full"
         style="position: absolute;  height: 500px; width: 100%;">

    <!-- Text Overlay -->
    <div class="absolute inset-0 flex flex-col text-center text-white" style="position: absolute; top: 140px; left: -150px;">
        <h1 class="mb-4 text-3xl font-bold" style="text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.6);">
            TICKETWISE Bus Online Booking
        </h1>
    </div>

  

    <!-- Flex container for vertical alignment and left alignment -->
    <div class=" px-3 mx-auto" style="position: relative; top: 180px; width:80%">
        <!-- First text field with placeholder -->
        <form method="POST" action="{{ route('search.trips') }}">
            @csrf
            @method('PUT')
            <span class="grid items-center grid-cols-4 gap-4">
            <select name="from" id="from" class="px-10 py-2 pl-2 pr-8 text-black bg-white"  style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); color: black; width: 100%;" >
                <option value="" selected disabled>Starting Point</option>
          
            </select>
            <select name="to" id="to" class="px-10 py-2 pl-2 pr-8 text-black bg-white"  style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); color: black; width: 100%;" >
                <option value="" selected disabled>Destination</option>
              
            </select>
            <input type="date" name="tripdate" id="tripdate" class="px-10 py-2 pl-2 pr-8 text-black bg-white"  style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); color: black; width: 100%;">
           <input type="submit" name="search" value="Find Tickets" class="px-10 py-2 pl-2 pr-8 text-white bg-black"  style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); width: 100%;">
        </span>
        </form>

    </div>




</div>
<!-- Black container with gradient (decreased transparency at the top and darker at the bottom) -->
<div style="position: absolute; top: 440px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1)); height: 300px; width: 100%;">    <!-- Content goes here -->
    <div class="grid grid-cols-3">
        <div class="p-2 text-center ">
            <img src="{{ asset('images/rocket.png') }}" alt="Banner Image" style="height:50%; width: 30%;"  class="mx-auto">
            <h1 class="text-3xl font-bold text-white" >INSTANT BOOKING</h1>
            <p class="text-2xl text-white" >Major routes available</p>
            
        </div>
        <div class="p-2 text-center ">
            <img src="{{ asset('images/lock.png') }}" alt="Banner Image" style="height:50%; width: 30%;"  class="mx-auto">
            <h1 class="text-3xl font-bold text-white" >SECURE PAYMENT</h1>
            <p class="text-2xl text-white" >Cash option available</p>
        </div>
        <div class="p-2 text-center ">
            <img src="{{ asset('images/email.png') }}" alt="Banner Image" style="height:50%; width: 30%; " class="mx-auto">
            <h1 class="text-3xl font-bold text-white" >CREATE SUPPORT</h1>
            <p class="text-2xl text-white" > We're here for you</p>
        </div>
    </div>
</div>


<img src="{{ asset('images/victory-map.png') }}" alt="Banner Image"
         style="position: absolute; left: 0px; top:740px;  height: 600px; width: 100%;">



</div>

</div>



<script>
    $(document).ready(function () {
        // Hover effects for update and refund buttons
        const $updateBtn = $('#updateBtn');
        const $refundBtn = $('#refundBtn');

        $updateBtn.hover(
            function () {
                $refundBtn.addClass('hover:bg-black');
            },
            function () {
                $refundBtn.removeClass('hover:bg-black').addClass('hover:bg-red-800');
            }
        );

        $refundBtn.hover(
            function () {
                $(this).removeClass('hover:bg-red-800').addClass('hover:bg-black');
            },
            function () {
                $(this).removeClass('hover:bg-black').addClass('hover:bg-red-800');
            }
        );

        // Example: Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            const target = $($(this).attr('href'));
            if (target.length) {
                $('html, body').animate({ scrollTop: target.offset().top }, 1000);
            }
        });

        // Example: Dynamic interaction with inputs
        $('input').on('focus', function () {
            $(this).css('border-color', '#ff0000');
        }).on('blur', function () {
            $(this).css('border-color', '');
        });
    });
</script>


<footer class="bg-black text-white py-6 mt-80 w-full" style="position:absolute; top:1700px;">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; Copyright 2024. All rights reserved.</p>
    </div>
</footer>
    <!-- WHITE SPACE -->
    <div class="w-3/4 h-48 relative flex items-center" style="position: absolute; top: 90px; left: 150px; width: 120px;">
        <!-- Container content here -->
    </div>

    <div style="height: 50px;"></div> <!-- White space -->


</body>

</html>
