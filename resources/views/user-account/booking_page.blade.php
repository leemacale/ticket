{{-- resources/views/page-with-header.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-cover bg-center text-white py-20" style="font-family: 'Kanit', sans-serif; background-image: url('{{ asset('images/NEW.png') }}'); background-size: 1920px 1080px; background-position: center;">
        <div class="container mx-auto flex items-start -mt-10"> <!-- Negative top margin to move everything upwards -->
            <div class="flex flex-col items-start"> <!-- Flex container for vertical alignment and left alignment -->

                <!-- Logo -->
                <img src="{{ asset('images/TWbus.png') }}" alt="Logo" class="shadow-lg" style="width: 140px; height: auto; margin-top: -30px; margin-bottom: 20px; margin-left: -10px;">

                <div class="flex flex-col items-start mb-4"> <!-- Added mb-4 for margin-bottom -->
                    <h1 class="text-3xl font-bold text-left" style="color: white; text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.6);">Manila to Baguio</h1>
                    <h1 class="text-xs font text-left" style="color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);">113 trips (700php - 15,000 php)</h1>
                </div>

                <div class="flex">
                    <!-- First text field with placeholder -->
                    <div class="relative mt-4" style="width: 13%; border-radius: 0;">
                    <input
                    type="text"
                    value="Manila"
                    class="bg-white text-black py-2 px-10 pl-2 pr-8"
                    disabled
                    style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); color: black; width: 100%;"
                    />

                        <img src="{{ asset('images/switch.png') }}" alt="icon" class="w-6 h-6 absolute right-2 top-1/2 transform -translate-y-1/2" />
                    </div>


                    <!-- Second text field (disabled) -->
                    <input type="text" value="" class="bg-white text-black py-2 px-10 mt-4" style="font-family: 'Kanit', sans-serif; width: 13%; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);" disabled />

<!-- Third text field with image on the left side -->
<div class="relative flex items-center mt-4 ml-4" style="width: 15%;">
    <input type="text" value="Tue, Oct 1"
        class="bg-white text-black py-2 px-4 text-center"
        style="font-family: 'Kanit', sans-serif;
                width: 100%;
                border-radius: 0;
                box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);
                background-image: url('{{ asset('images/calendar.png') }}');
                background-repeat: no-repeat;
                background-position: left 10px center;
                background-size: 20px 20px;
                padding-left: 40px;"
        disabled />
</div>
                    <!-- Text field with image on the left side -->
                    <div class="relative flex items-center mt-4 ml-4" style="width: 40%;">
                    <input type="text"
                        class="bg-white text-black py-2 px-4 placeholder-black" disabled
                        style="font-family: 'Kanit', sans-serif;
                                width: 200px;
                                border-radius: 0;
                                box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);
                                background-image: url('{{ asset('images/boy.png') }}');
                                background-repeat: no-repeat;
                                background-position: left 10px center;
                                background-size: 20px 20px;
                                padding-left: 30px;
                                text-align: center;"
                        placeholder="1 passenger" />
                        <button class="bg-black text-white py-2 px-6 ml-4 rounded-md hover:bg-white hover:text-black transition-colors duration-300" style="font-family: 'Kanit', sans-serif; height: 100%" id="updateBtn" onclick="window.location='{{ route('user.logged-in-bp') }}'" >Update</button>
                        <button class="bg-red-800 text-white py-2 px-6 ml-4 rounded-md hover:bg-white hover:text-black transition-colors duration-300" style="font-family: 'Kanit', sans-serif; height: 100%" id="refundBtn" onclick="window.location='{{ route('user.refund-page') }}'">Refund</button>
                    </div>

                    <script>
                        const updateBtn = document.getElementById('updateBtn');
                        const refundBtn = document.getElementById('refundBtn');

                        updateBtn.addEventListener('mouseenter', () => {
                            refundBtn.classList.add('hover:bg-black');
                        });

                        refundBtn.addEventListener('mouseenter', () => {
                            refundBtn.classList.remove('hover:bg-red-800');
                            refundBtn.classList.add('hover:bg-black');
                        });

                        updateBtn.addEventListener('mouseleave', () => {
                            refundBtn.classList.remove('hover:bg-black');
                            refundBtn.classList.add('hover:bg-red-800');
                        });
                    </script>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto py-12">
    <h2 class="text-4xl font-bold text-left">Recent Searches</h2>

    <!-- First Container with Image -->
    <div class="relative mt-6 w-full max-w-lg">
        <img src="{{ $imageUrl ?? asset('images/clear.png') }}" alt="Image description" class="rounded-md w-full">

        <div class="absolute top-4 left-4 text-white text-2xl p-2 rounded-md" style="font-family: 'Kanit'; text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.8);">
            MANILA - BAGUIO
        </div>

        <!-- Date text below the image -->
        <div class="absolute bottom-4 left-4 text-white text-sm" style="font-family: 'Kanit'; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);">
            Oct 1
        </div>
    </div>

    <!-- Full-width Horizontal Divider -->
    <hr class="my-8 border-t-3 border-gray-300 w-full mx-0" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);">
    <h2 class="text-4xl font-bold text-left">Popular Routes in Philippines</h2>
    <hr class="mt-4 border-t-3 border-solid border-black w-full mx-0">

    <p class="mt-8">Manila > Baguio</p>
    <p class="mt-4">Nuvali (Sta. Rosa, Laguna) > Makati (Glorietta 5) </p>
    <p class="mt-4">Nuvali> BGC (Bonifacio Global City)</p>



</main>
<footer class="bg-black text-white py-6 mt-12">
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




</body>

</html>
