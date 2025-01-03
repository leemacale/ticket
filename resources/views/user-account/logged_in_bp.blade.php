{{-- resources/views/page-with-header.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
<header class="bg-cover bg-center text-white py-20" style="font-family: 'Kanit', sans-serif; background-image: url('{{ asset('images/NEW.png') }}'); background-size: 1920px 1080px; background-position: center;">
    <div class="container mx-auto flex items-start justify-between -mt-10"> <!-- Added justify-between to push content to left and right -->
        <div class="flex flex-col items-start"> <!-- Flex container for vertical alignment and left alignment -->

            <!-- Logo -->
			<a href="{{ route('user.dashboard') }}">
    <img src="{{ asset('images/TWbus.png') }}" alt="Logo" class="shadow-lg" style="width: 140px; height: auto; margin-top: -30px; margin-bottom: 20px; margin-left: -10px;">
</a>

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
                    class="bg-white text-black-3xl py-2 px-10 pl-2 pr-8"
                    disabled
                    style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); color: black; width: 100%;"
                    />

                    <img src="{{ asset('images/switch.png') }}" alt="icon" class="w-6 h-6 absolute right-2 top-1/2 transform -translate-y-1/2" />
                </div>

                <!-- Second text field (disabled) -->
                <input type="text" value="Baguio" class="bg-white text-black py-2 px-10 mt-4" style="font-family: 'Kanit', sans-serif; width: 13%; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);" disabled />

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
                    <button class="bg-black text-white py-2 px-6 ml-4 rounded-md hover:bg-white hover:text-black transition-colors duration-300" style="font-family: 'Kanit', sans-serif; height: 100%" id="updateBtn">Update</button>
                    <button class="bg-red-800 text-white py-2 px-6 ml-4 rounded-md hover:bg-white hover:text-black transition-colors duration-300" style="font-family: 'Kanit', sans-serif; height: 100%" id="refundBtn" onclick="window.location='{{ route('user.refund-page') }}'" >Refund</button>
                </div>
            </div>
        </div>

        <!-- User image at the rightmost part with name added -->
        <div class="flex items-start">
    <p class="text-white text-xs mb-2" style="text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.8); margin-top: -15px; margin-right: -27px;">User</p>
    <p class="text-white text-lg font mb-2 whitespace-nowrap" style="text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.8); margin-right: 20px;">Juan Delacruz</p>
    <img src="{{ asset('images/passenger.png') }}" alt="User" class="w-16 h-17 rounded-full shadow-lg" style="margin-top: -30px; margin-right: -40px;">
</div>


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
</header>


<div class="mx-auto max-w-[1440px] w-full h-20 bg-white shadow-md flex items-center justify-between px-6" style="font-family: 'Kanit', sans-serif;">
   <!-- Date List -->
<div class="flex items-center space-x-6 text-gray-700 " style="margin-left: 150px;">
    <!-- Left Arrow -->
    <button id="scroll-left" class="text-xl text-black hover:bg-gray-100 px-3 py-1 rounded">
        &lt;
    </button>

    <!-- Centered Date Buttons -->
    <div id="date-list" class="flex justify-start space-x-6 overflow-x-auto scroll-smooth" style="width: calc(6 * 165px); white-space: nowrap; scrollbar-width: none; -ms-overflow-style: none; -webkit-overflow-scrolling: touch;">
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Sat, Sep 28
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Sun, Sep 29
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Mon, Sep 30
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Tues, Oct 1
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Wed, Oct 2
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Thu, Oct 3
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Fri, Oct 4
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Fri, Oct 4
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Fri, Oct 4
    </button>
    <button class="font-light text-black text-xl hover:bg-gray-200 px-6 py-3 rounded" style="font-family: 'Kanit', sans-serif;">
        Fri, Oct 4
    </button>
</div>




    <!-- Right Arrow -->
    <button id="scroll-right" class="text-xl text-black hover:bg-gray-100 px-3 py-1 rounded">
        &gt;
    </button>
</div>

<!-- JavaScript -->
<script>

const dateList = document.getElementById('date-list');
const scrollLeft = document.getElementById('scroll-left');
const scrollRight = document.getElementById('scroll-right');

const scrollAmount = 140 * 2; // Scroll 3 buttons at a time

// Scroll left button click
scrollLeft.addEventListener('click', () => {
    dateList.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
});

// Scroll right button click
scrollRight.addEventListener('click', () => {
    dateList.scrollBy({ left: scrollAmount, behavior: 'smooth' });
});

</script>


  <!-- Pick Date Section -->
<button class="flex items-center space-x-2 text-black  hover:bg-gray-100 px-1 py-1 rounded" style="margin-right: 90px;">
    <img src="{{ asset('images/calendar.png') }}" alt="Pick Date Icon" class="h-5 w-5" />
    <span class="text-xl">Pick Date</span>
</button>

</div>

<main class="container mx-auto py-12 overflow-visible">
    <h2 class="text-4xl font-bold text-left" style="font-family: 'Kanit', sans-serif;">Options</h2>
    <div class="flex space-x-4 mt-6">
        <!-- First Row Rectangle (longer width) -->
		<div class="w-3/4 bg-white h-48 shadow-md relative flex items-center">
    <!-- Existing content -->

    <div class="absolute left-4 top-4 h-40 w-px bg-black"></div> <!-- Adjusted line -->

	<div id="time-display" class="font-light ml-16 text-left" style="margin-top: -20px; font-family: 'Kanit', sans-serif;">
    <div style="position: absolute; top: 40px; left: 45;">
        <span id="departure-time">09:00</span>
        <span id="origin">Manila</span>
    </div>

    <div class="mt-4 flex items-center justify-start">
        <img src="{{ asset('images/dltb_logo.png') }}" alt="Image description" class="w-38 h-38 object-cover mr-2 relative">
        <div style="position: absolute; top: 130px; left: 45;">
            <span id="arrival-time" class="text-lg">15:59</span>
            <span id="destination" style="margin-left: 10px;">Baguio</span>
        </div>
        <img src="{{ asset('images/icon-bus.png') }}" alt="Second image description" class="w-38 h-38 object-cover mr-2">
		<span class="text-lg inline-flex items-center" style="font-size: medium;">
    6H 59m bus ride with
    <span id="bus-line" style="font-family: 'Kanit', sans-serif; font-weight: 550; margin-left: 4px;">
        <!-- Bus line will be inserted here -->
    </span>
    <div class="flex items-center space-x-4" style="margin-left: 120px;">
        <div>
            <img src="{{ asset('images/blu-star.png') }}" alt="Star image" class="w-4 h-4">
        </div>
        <span style="color: #0000FF; font-family: 'Kanit', sans-serif; font-weight: bold; font-size: 1.25rem; margin-left: 3px;">4.4</span>
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/dltb-one.png') }}" alt="Second image" class="w-26 h-24 rounded-lg">
            <img src="{{ asset('images/seats-one.png') }}" alt="Third image" class="w-26 h-24 rounded-lg">
        </div>
    </div>
</span>

    </div>


</div>



<!-- jQuery Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let currentPage = 3; // Initial page
    let totalPages = 167; // Total pages based on your API response
    let perPage = 3; // Items per page, can be fetched from the API response if needed
    let maxPageLinks = 5; // Maximum number of page links to display

    // Function to fetch data for a specific page
    function fetchData(page) {
        $.ajax({
            url: `http://ticketwiseapp.test/api/v1/trips?page=${page}`, // Replace with your actual API endpoint
            method: 'GET',
            success: function(response) {
                // Handle the trip data (same as before)
                const tripData = response.data[0]; // For simplicity, using the first trip data

                // Update the dynamic data in the HTML
                $('#departure-time').text(tripData.departure_time);
                $('#origin').text(tripData.origin);
                $('#arrival-time').text(tripData.arrival_time);
				$('#bus-line').text(tripData.bus_line);
                $('#destination').text(tripData.destination);

                // Update pagination buttons
                currentPage = response.current_page;
                totalPages = response.last_page;
                updatePagination();
            },
            error: function(error) {
                console.log('Error fetching data:', error);
            }
        });
    }

    // Function to update pagination controls
    function updatePagination() {
        $('#prev-page').prop('disabled', currentPage <= 1); // Disable "Previous" if we're on the first page
        $('#next-page').prop('disabled', currentPage >= totalPages); // Disable "Next" if we're on the last page

        // Generate page number links (show only 5 page numbers at a time)
        let startPage = Math.max(currentPage - Math.floor(maxPageLinks / 2), 1);
        let endPage = Math.min(startPage + maxPageLinks - 1, totalPages);

        // Adjust the start page if the range is at the start
        if (endPage - startPage < maxPageLinks - 1) {
            startPage = Math.max(endPage - maxPageLinks + 1, 1);
        }

        let pageNumbers = '';
        for (let i = startPage; i <= endPage; i++) {
            pageNumbers += `<button class="btn-pagination" data-page="${i}">${i}</button> `;
        }
        $('#page-numbers').html(pageNumbers);

        // Highlight the current page
        $(`button[data-page="${currentPage}"]`).addClass('active');
    }

    // Event handler for next page button
    $('#next-page').click(function() {
        if (currentPage < totalPages) {
            fetchData(currentPage + 1); // Fetch next page
        }
    });

    // Event handler for previous page button
    $('#prev-page').click(function() {
        if (currentPage > 1) {
            fetchData(currentPage - 1); // Fetch previous page
        }
    });

    // Event handler for page number buttons
    $(document).on('click', '.btn-pagination', function() {
        const page = $(this).data('page');
        fetchData(page); // Fetch selected page
    });

    // Initial data load
    fetchData(currentPage);
});
</script>

<style>
    /* Add some basic styling for pagination buttons */
    .btn-pagination {
        padding: 10px 20px;
        margin: 0 5px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-pagination.active {
        background-color: #0056b3;
    }

    .btn-pagination:disabled {
        background-color: #cccccc;
        cursor: not-allowed;
    }

    #page-numbers {
        display: inline-block;
    }
</style>






</div>




<div class="w-1/4 bg-white h-48 shadow-md relative">
    <!-- Content for rectangle -->

    <!-- Price and Per Person Text -->
  <div style="position: absolute; top: 0; right: 10px; padding: 10px; font-family: 'Kanit', sans-serif;">
    <span class="text-3xl" style="font-weight: 300;">700 PHP</span><br>
    <span class="text-m text-gray-600" style="margin-left: 40px; font-weight: 300;">per adult</span>
  </div>

    <!-- Book Now Button -->
    <button class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-opacity-80 bg-black text-white font-bold hover:bg-red-700 text-xl"
        style="width: 260px; height: 60px; font-family: 'Kanit', sans-serif; font-weight: 300;" onclick="window.location='{{ route('user.bp-two') }}'">
        Book Now
</button>
</div>
    </div>



<!-- Pagination Controls -->
<div id="pagination-controls" class="flex justify-center mt-4">
    <button id="prev-page" class="btn-pagination" disabled>Previous</button>
    <span id="page-numbers"></span>
    <button id="next-page" class="btn-pagination">Next</button>
</div>

</main>

<footer class="bg-black text-white py-6 mt-80">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; Copyright 2024. All rights reserved.</p>
    </div>
</footer>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>
