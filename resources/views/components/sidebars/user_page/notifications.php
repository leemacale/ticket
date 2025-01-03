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
                    <span class="text-base ml-2 text-gray-200 font-semibold">Hello Juan Dela Cruz!</span>
                </div>
                <i class="bi bi-x ml-12 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <!-- End of Header -->
            <!-- Gray Horizontal Line -->
            <hr class="my-2 text-gray-600">
            <div>
            <div class="p-2 mt-2 flex items-center rounded-md px-2 bg-gray-800">
    <!-- Mail icon -->
    <i class="fas fa-envelope text-gray-200"></i>

    <!-- Notifications text -->
    <span class="text-[12px] ml-2 text-gray-200">Notifications</span>

    <!-- Notification count -->
    <span class="ml-2 bg-red-500 text-white text-[10px] font-bold rounded-full h-4 w-4 flex items-center justify-center">
        1
    </span>
</div>


                </div>

            <!-- Review Footage Button -->


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
