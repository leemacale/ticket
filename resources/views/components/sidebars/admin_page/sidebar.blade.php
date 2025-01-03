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
        <span class="text-[14px] ml-2 text-gray-200">Admin Account</span>
    </div>
</h1>


                <i class="bi bi-x ml-12 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">

            <div>
            <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
    <i class="bi bi-house-fill"></i>
    <span class="text-[14px] ml-2 text-gray-200">Home</span>
</div>
<div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('admin.dashcam') }}'">
    <i class="bi bi-camera-video-fill"></i>
    <span class="text-[14px] ml-2 text-gray-200">Dashcam</span>
</div>

                <hr class="my-4 text-gray-600">


<div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('admin.incident_report') }}'">
    <i class="bi bi-exclamation-triangle-fill"></i>
    <span class="text-[14px] ml-2 text-gray-200">Incident Report</span>
</div>

<div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('admin.approve-conductor') }}'">
    <i class="bi bi-check-circle-fill"></i>
    <span class="text-[14px] ml-2 text-gray-200">Approve Conductor</span>
</div>


                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('admin.sales-report') }}'">
                    <i class="bi bi-bar-chart-fill"></i>
                    <span class="text-[14px] ml-2 text-gray-200">Sales Report</span>
                </div>
              <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600" onclick="window.location='{{ route('admin.rating_and_feedback') }}'">
    <i class="bi bi-star-fill"></i>
    <span class="text-[14px] ml-2 text-gray-200">Ratings and Feedback</span>
</div>


                <div class="p-2 mt-2 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-red-600">
                <i class="fas fa-bus text-xl text-white"></i>
                <div class="flex justify-between w-full items-center" onclick="dropDown()">
                        <span class="text-[14px] ml-2 text-gray-200">Bus Arrival</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                </div>
                <div class="leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto hidden" id="submenu">
    <a href="{{ route('admin.bus-arrival') }}" class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1 block">
        <h1 class="m-0">Social</h1>
    </a>
    <a href="{{ route('admin.bus-arrival') }}" class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1 block">
        <h1 class="m-0">Personal</h1>
    </a>
    <a href="{{ route('admin.bus-arrival') }}" class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1 block">
        <h1 class="m-0">Friends</h1>
    </a>


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
