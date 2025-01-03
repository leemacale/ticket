<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-blue-600 font-[Poppins]">
    <span class="absolute text-white text-3xl top-5 left-4 cursor-pointer" onclick="Openbar()"></span>

    <!-- Sidebar -->
    <div class="sidebar absolute top-40 lg:left-3 left-[-150px] duration-1000 p-2 w-[350px] overflow-y-auto text-center bg-black rounded-lg h-[90%]">
        <div class="text-gray-100 text-sm">
            <div class="p-2 flex items-center rounded-md">
                <!-- Header -->
                <div class="p-2 mt-4 flex items-center rounded-md px-2 duration-300">
                    <span class="text-base ml-2 text-gray-200 font-semibold">Bus Arrival</span>
                </div>
                <i class="bi bi-x ml-12 cursor-pointer lg:hidden" onclick="Openbar()"></i>
                <span class="ml-auto text-sm text-gray-400 cursor-pointer hover:text-red-600 mt-4">View All</span>
            </div>
            <!-- End of Header -->
            <!-- Gray Horizontal Line -->
            <hr class="my-2 text-gray-600">
            <h2 class="text-left font-bold text-gray-200 mb-1">Months</h2>
            <div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">January</span>
                </div>

                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">February</span>
                </div>

                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">March</span>
                </div>

                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">April</span>
                </div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer bg-red-600 text-white"> <!-- Set background color and text color for selected state -->
    <span class="text-[12px] ml-2">May</span> <!-- Removed text-gray-200 for selected state -->
</div>

                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">June</span>
                </div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">July</span>
                </div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">August</span>
                </div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">September</span>
                </div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">October</span>
                </div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">November</span>
                </div>
                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                    <span class="text-[12px] ml-2 text-gray-200">December</span>
                </div>
            </div>
            <!-- Review Footage Button -->
            <button class="mt-2 bg-red-600 text-white text-sm font-semibold rounded-full px-4 py-1 hover:bg-red-700 duration-300">
    Review Footage
</button>

        </div>
    </div>

    <script>
        function dropDown() {
            document.querySelector('#submenu').classList.toggle('hidden');
            document.querySelector('#arrow').classList.toggle('rotate-0');
        }

        function Openbar() {
            document.querySelector('.sidebar').classList.toggle('left-[-150px]');
        }
    </script>
</body>

</html>
