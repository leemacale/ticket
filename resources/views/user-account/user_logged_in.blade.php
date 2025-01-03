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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbars.user_page.logged_in role="User" imageUrl="{{ asset('images/admin.png') }}" />

  <!-- Image with Text Overlay -->
<div class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/bus-bg.png') }}" alt="Banner Image"
         class="w-full object-cover"
         style="position: absolute;  height: 500px; width: 100%;">

    <!-- Text Overlay -->
    <div class="absolute inset-0 flex flex-col text-center text-white" style="position: absolute; top: 140px; left: -290px;">
        <h1 class="text-3xl font-bold mb-4" style="text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.6);">
            TICKETWISE Bus Online Booking
        </h1>
    </div>

    <!-- Flex container for vertical alignment and left alignment -->
    <div class="flex" style="position: absolute; top: 180px; left: 390px;">
        <!-- First text field with placeholder -->
        <div class="relative" style="width: 13%; border-radius: 0;">
            <input type="text" value="Manila" class="bg-white text-black py-2 px-10 pl-2 pr-8"
                   disabled
                   style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); color: black; width: 100%;" />
            <img src="{{ asset('images/switch.png') }}" alt="icon" class="w-6 h-6 absolute right-2 top-1/2 transform -translate-y-1/2" />
        </div>

        <!-- Second text field (disabled) -->
        <input type="text" value="Baguio" class="bg-white text-black py-2 px-10"
               style="font-family: 'Kanit', sans-serif; width: 13%; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);" disabled />

   <!-- Third text field with image on the left side -->
<div class="relative flex items-center" style="width: 15%; margin-top: 0; margin-left: 6px; border-right: 1px solid black;">
    <input type="text" value="Tue, Oct 1"
           class="bg-white text-black py-2 px-4 text-center"
           style="font-family: 'Kanit', sans-serif; width: 100%; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); background-image: url('{{ asset('images/calendar.png') }}'); background-repeat: no-repeat; background-position: left 10px center; background-size: 20px 20px; padding-left: 40px;"
           disabled />
</div>

<div class="relative flex items-center" style="width: 40%; margin-top: 0; margin-left: 0;">
    <input type="text" class="bg-white text-black py-2 px-4 placeholder-black" disabled
           placeholder="Point to Point" />
    <button class="bg-black text-white py-2 px-6 hover:bg-red-700 hover:text-white transition-colors duration-300"
            style="font-family: 'Kanit', sans-serif; height: 100%" id="updateBtn" onclick="window.location='{{ route('user.logged-in-bp') }}'">Find Tickets</button>
</div>

    </div>




</div>
<!-- Black container with gradient (decreased transparency at the top and darker at the bottom) -->
<div style="position: absolute; top: 440px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1)); height: 300px; width: 1518px;">    <!-- Content goes here -->
<h1 class="text-white text-3xl font-bold" style="position: absolute;left:120px; top: 150px;">INSTANT BOOKING</h1>

<p class="text-white text-2xl" style="position: absolute;left:140px; top: 187px;" >Major routes available</p>
<h2 class="text-white text-3xl font-bold" style="position: absolute;left:623px; top: 150px;">SECURE PAYMENT</h1>

<p class="text-white text-2xl" style="position: absolute;left:637px; top: 187px;" >Cash option available</p>

<h2 class="text-white text-3xl font-bold" style="position: absolute;left:1100px; top: 150px;">CREATE SUPPORT</h1>

<p class="text-white text-2xl" style="position: absolute;left:1124px; top: 187px;" > We're here for you</p>

</div>




	<img src="{{ asset('images/rocket.png') }}" alt="Banner Image"
		 style="position:absolute; top: 480px; left: 13% ;height:13%; width: 7%; ">

		 <img src="{{ asset('images/lock.png') }}" alt="Banner Image"
		 style="position:absolute; top: 460px; left: 45% ;height:17%; width: 9%; ">

		 <img src="{{ asset('images/email.png') }}" alt="Banner Image"
		 style="position:absolute; top: 460px; left: 75.9% ;height:17%; width: 9%; ">


<div>
<h1 class="text-black text-4xl" style="position: absolute;left:500px; top: 870px;">4 Steps to Get Your Bus E-Ticket</h1>

<p class="text-black text-2xl" style="position: absolute;left:140px; top: 990px;" ><strong> Step 1: Search Bus Trip:</strong> Use the search form above and type your destination, travel date, and click “Find Tickets” to see the <br> available trips.</p>

<p class="text-black text-2xl" style="position: absolute;left:140px; top: 1100px;" ><strong> Step 2: Select Schedule: </strong>  Review the search results, select your preferred mode of transport, and choose a trip by clicking<br>  “BOOK NOW.”</p>

<p class="text-black text-2xl" style="position: absolute;left:140px; top: 1200px;" ><strong> Step 3: Input Details: </strong>   On the Trip Itinerary page, provide personal details.</p>

<p class="text-black text-2xl" style="position: absolute;left:140px; top: 1300px;" ><strong> Step 4: Pay Online & receive confirmation: </strong>   Choose from various payment methods. After payment, a receipt and<br> the e-ticket will be sent instantly.</p>


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


<footer class="bg-black text-white py-6 mt-80 w-full" style="position:absolute; top:1300px;">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; Copyright 2024. All rights reserved.</p>
    </div>
</footer>


<div id="chat-head" class="fixed bottom-10 right-6 flex items-center bg-black text-white rounded-full shadow-lg cursor-pointer hover:bg-black-600 transition-colors duration-300">
    <!-- Tooltip Text -->
    <div id="chat-tooltip" class="hidden ml-4 bg-black text-white text-xs rounded-lg py-2 px-4 transition-opacity duration-300">
        Hi! If you have any concerns, don’t hesitate to talk to us!
    </div>

    <!-- Chat Head Icon Image -->
    <div class="relative w-14 h-15">
        <img src="{{ asset('images/chatH.png') }}" alt="Chat Icon" class="w-full h-full object-cover rounded-full">
    </div>
</div>

<!-- Chat Box -->
<div id="chat-box" class="hidden fixed bottom-10 right-6 w-[600px] bg-white rounded-lg shadow-lg p-6">
    <div class="flex items-center justify-start border-b pb-4 mb-4">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/chat-logo.png') }}" alt="TicketWise Logo" class="w-16 h-6">
            <h3 class="text-m" style="font-family: 'Kanit', sans-serif;">TicketWise Bus Customer Support</h3>
        </div>
        <button id="close-chat" class="ml-4 text-gray-500 hover:text-red-500 text-xl">&times;</button>
    </div>

    <div id="chat-messages" class="h-64 overflow-y-auto bg-gray-100 p-4 mb-4 rounded-lg">
        <!-- Example message from customer support -->
        <div class="flex items-start space-x-2 mb-4">
            <img src="{{ asset('images/chat-logo.png') }}" alt="Support Avatar" class="w-9 h-4 mt-8">
            <div class="bg-white text-black p-3 rounded-lg max-w-[80%] border border-black">
    <p>Hello, how can I assist you today?</p>
</div>

        </div>
    </div>

    <textarea id="chat-input" class="w-full border rounded-lg p-4" rows="3" placeholder="Type your message..."></textarea>
    <button id="send-message" class="bg-black text-white px-6 py-3 rounded-lg mt-4 hover:bg-gray-800">Send</button>
</div>





<script>
    const chatHead = document.getElementById('chat-head');
    const tooltip = document.getElementById('chat-tooltip');
    const chatBox = document.getElementById('chat-box');
    const closeChat = document.getElementById('close-chat');
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');
    const sendMessage = document.getElementById('send-message');

    // Show the tooltip when hovering over the chat head
    chatHead.addEventListener('mouseenter', () => {
        tooltip.classList.remove('hidden');
    });

    // Hide the tooltip when mouse leaves the chat head
    chatHead.addEventListener('mouseleave', () => {
        tooltip.classList.add('hidden');
    });

    // Show the chat box when clicking the chat head
    chatHead.addEventListener('click', () => {
        chatBox.classList.remove('hidden');
    });

    // Close the chat box
    closeChat.addEventListener('click', () => {
        chatBox.classList.add('hidden');
    });

    // Send a message
    sendMessage.addEventListener('click', () => {
        const message = chatInput.value.trim();
        if (message) {
            const messageBubble = document.createElement('div');
            messageBubble.textContent = message;
            messageBubble.classList.add('p-2', 'bg-black', 'text-white', 'rounded', 'mb-2', 'text-right');
            chatMessages.appendChild(messageBubble);
            chatInput.value = ''; // Clear the input
            chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll to the bottom
        }
    });
</script>
    <!-- WHITE SPACE -->
    <div class="w-3/4 h-48 relative flex items-center" style="position: absolute; top: 90px; left: 150px; width: 920px;">
        <!-- Container content here -->
    </div>


    <div style="height: 50px;"></div> <!-- White space -->


</body>

</html>
