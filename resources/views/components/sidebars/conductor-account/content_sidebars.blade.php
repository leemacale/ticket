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
    <span class="absolute text-white text-3xl top-5 left-4 cursor-pointer" onclick="Openbar()">
    </span>
    <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-250px] duration-1000 p-2 w-[250px] overflow-y-auto text-center bg-black  h-screen">
        <div class="text-gray-100 text-xl">
            <div class="p-2 mt-1 flex items-center rounded-md">

            <h1 class="text-xl font-bold ml-0">
    <span class="text-red-600">TICKETWISE</span>
    <span class="text-white">BUS</span>

    <div class="p-2 mt-6 flex items-center rounded-md px-2 duration-300">
        <span class="text-[14px] ml-2 text-gray-200">Conductor Account</span>
    </div>
</h1>


                <i class="bi bi-x ml-12 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">

            <div>
			<div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('check_food') }}'">
    <i class="bi bi-basket2-fill"></i> <!-- Food-related basket icon -->
    <span class="text-[14px] ml-2 text-gray-200">Check Food Order</span>
</div>

<div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('report_incident') }}'">
    <i class="bi bi-exclamation-triangle-fill"></i> <!-- Symbol for hazards or incidents -->
    <span class="text-[14px] ml-2 text-gray-200">Report Incident/Accident</span>
</div>




<div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('manual_override') }}'">
    <i class="bi bi-gear-fill"></i> <!-- Symbolizes manual control or override -->
    <span class="text-[14px] ml-2 text-gray-200">Manual Override</span>
</div>





<div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('confirm_ba') }}'">
    <i class="fas fa-bus text-xl text-white"></i>
    <div class="flex justify-between w-full items-center">
        <span class="text-[14px] ml-2 text-gray-200">Confirm Bus Arrival</span>
    </div>
</div>

                <hr class="my-2 text-gray-600">

                <div class="p-2 mt-3 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('publicview') }}'">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span class="text-[14px] ml-2 text-gray-200">Logout</span>
                </div>
            </div>
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
