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


	<img src="{{ asset('images/rocket.png') }}" alt="Banner Image"
		 style="position:absolute; top: 480px; left: 13% ;height:13%; width: 7%; ">

		 <img src="{{ asset('images/lock.png') }}" alt="Banner Image"
		 style="position:absolute; top: 460px; left: 45% ;height:17%; width: 9%; ">

		 <img src="{{ asset('images/email.png') }}" alt="Banner Image"
		 style="position:absolute; top: 460px; left: 75.9% ;height:17%; width: 9%; ">


<div id="booking-steps">
<p class="text-black text-xl" style="position: absolute;left:140px; top: 800px;" >PH Bus provides online booking for buses, ferries, and flights in the Philippines. Save more time, money, and effort by reserving through our easy-to-use booking platform. Skip the long waiting time and buy tickets wherever you are. </p>

<p class="text-black text-xl" style="position: absolute;left:140px; top: 870px;" >To learn how to book with PH Bus, we’ve outlined our five easy steps below. </p>

<p class="text-black text-2xl" style="position: absolute;left:140px; top: 990px;" >Step 1: Search Trips </p>

<img src="{{ asset('images/step_one.png') }}" alt="Banner Image"
         style="position: absolute; left: 200px; top:1070px;  height: 300px; width: 70%;">

		 <p class="text-black text-lg" style="position: absolute; left: 140px; top: 1390px; text-align: justify;">
    Upon arriving at <span style="text-decoration: underline;">TicketWise Bus</span>, you will immediately see a search box. Please indicate your preferred route by selecting your
     point of origin, destination, and<br> travel date. Once you have all the necessary details, click the blue button to find tickets.
    To browse for all Philippine routes.<br><br><br>
    To learn how to book with TicketWise Bus, we’ve outlined our five easy steps below.
</p>

<p class="text-black text-2xl" style="position: absolute;left:140px; top: 1600px;" >Step 2: Select Departure  </p>

<img src="{{ asset('images/step_two.png') }}" alt="Banner Image"
         style="position: absolute; left: 170px; top:1680px;  height: 500px; width: 75%;">

		 <p class="text-black text-lg" style="position: absolute; left: 140px; top: 2200px; text-align: justify;">
		 You will be redirected to the results page which looks like this. To further narrow down your search. Choose your desired trip from the list of departures by clicking <br> “BOOK NOW”. Double-check the price, departure time, and ticket type indicated on your preferred trip. 
<br><br> Bus tickets may be reserved only 1 to 3 months in advance. Please take note that there are slight differences per operator on how early you can book a seat.
		</p>

		<p class="text-black text-2xl" style="position: absolute;left:140px; top: 2390px;" >Step 3: Input Details  </p>

		<img src="{{ asset('images/step_three.png') }}" alt="Banner Image"
         style="position: absolute; left: 170px; top:2490px;  height: 700px; width: 75%;">

		 <p class="text-black text-lg" style="position: absolute; left: 140px; top: 3240px; text-align: justify;">
		 The Trip Itinerary page will load with your selected trip and its details. You still have the option to add more passengers if you like. Available seats are shown <br> in blue numbers on the right side. 

<br> <br>Personal details like name, mobile number, and an e-mail will be asked of you. After filling out the form, make sure to  tick all boxes after reading the terms & conditions,<br> and policies. Once again, please make sure all details are correct before proceeding.

		</p>

		<p class="text-black text-2xl" style="position: absolute;left:140px; top: 3440px;" >Step 4: Pay Online   </p>

		<img src="{{ asset('images/stepfour.png') }}" alt="Banner Image"
         style="position: absolute; left: 120px; top:3490px;  height: 600px; width: 85%;">

		 <p class="text-black text-lg" style="position: absolute; left: 140px; top: 4090px; text-align: justify;">
		 Scroll down a bit further and you will be asked to choose from the available payment methods. TicketWise Bus payment options include GCash and Maya.<br>

You may view your total bill and its breakdown on the right. Proceed with the most convenient option for you and pay instantly for your ticket. Please be<br> advised that each payment method has its own service fee indicated. 

<br><br>Once you have selected a payment option, you will be redirected to the corresponding payment gateway. There is only a short period of time allotted <br> to complete your transaction, so kindly settle your bill immediately. 
		</p>

		<p class="text-black text-2xl" style="position: absolute;left:140px; top: 4300px;" >Step 5: Receive Confirmation   </p>

		<img src="{{ asset('images/step_five.png') }}" alt="Banner Image"
         style="position: absolute; left: 220px; top:4390px;  height: 250px; width: 65%;">

		 <p class="text-black text-lg" style="position: absolute; left: 140px; top: 4700px; text-align: justify;">
	An e-mail receipt shall be sent to you as soon as your booking has been paid for. The total fee and its breakdown will be indicated once again.<br> The receipt is NOT the same as your booking confirmation and voucher. Kindly wait for another e-mail that will contain the PDF voucher with your booking details. 
		<br><br> Confirmation may take up to a few days depending on the operator. Should you prefer instant confirmation.
</p>

<img src="{{ asset('images/step_six.png') }}" alt="Banner Image"
         style="position: absolute; left: 420px; top:4890px;  height: 550px; width: 45%;">

		 <p class="text-black text-lg" style="position: absolute; left: 140px; top: 5500px; text-align: justify;">
		 The PDF voucher will look like this. Booking details are found on the first page. Succeeding pages contain the policies, terms & conditions. <br> Make sure to have your printed voucher and valid ID so that you may be issued a ticket. Please arrive at the terminal at least 30 minutes before your scheduled departure. 
		 <br><br> And voila! After following these five simple steps, you have successfully secured a slot on your preferred trip.
</p>




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


<footer class="bg-black text-white py-6 mt-80 w-full" style="position:absolute; top:5600px;">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; Copyright 2024. All rights reserved.</p>
    </div>
</footer>
    <!-- WHITE SPACE -->
    <div class="w-3/4 h-48 relative flex items-center" style="position: absolute; top: 90px; left: 150px; width: 920px;">
        <!-- Container content here -->
    </div>

    <div style="height: 50px;"></div> <!-- White space -->


</body>

</html>
