<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketwise Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-black text-white py-2">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-bold">


            </h1>
            <div class="flex items-center">
    <span class="mr-2 text-sm">Admin</span>
    <div class="bg-gray-1 rounded-full h-8 w-8 overflow-hidden">
        <img src="{{ asset('images/admin.png') }}" alt="Admin" class="h-full w-full object-cover">
    </div>
</div>

        </div>
    </header>

    <div class="h-1 bg-red-600"></div>

    <div class="flex mt-0">

        <!-- Sidebar -->
        <div class="bg-gray-200 w-1/6 h-screen mt-2"> <!-- Changed width from w-1/5 to w-1/6 -->
            <x-sidebars.admin_page.sidebar
                title="Admin Account"
                :links="[
                    ['name' => 'Incident Report', 'url' => '#'],
                    ['name' => 'Sales Report', 'url' => '#'],
                    ['name' => 'Ratings and Feedback', 'url' => '#'],
                    ['name' => 'Bus Arrival', 'url' => '#'],
                ]"
            />
        </div>


        <div class="flex-1 p-4">

        </div>
    </div>

</body>
</html>
