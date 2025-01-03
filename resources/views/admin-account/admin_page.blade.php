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
            <h1 class="text-xl font-bold"></h1>
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

    <!-- Main content area -->
    <div class="flex-1 p-4">
    <!-- 4 square containers in two rows -->
    <div class="grid grid-cols-2 gap-4 mt-20">
        <!-- First row -->
        <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('admin.incident_report') }}'">
            <p>Incident Report</p>
        </div>
        <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('admin.sales-report') }}'">
            <p>Sales Report</p>
        </div>

        <!-- Second row -->
        <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('admin.rating_and_feedback') }}'">
            <p>Ratings and Feedback</p>
        </div>
        <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('admin.bus-arrival') }}'">
            <p>Bus Arrival</p>
        </div>
    </div>
</div>


    </div>

</body>
</html>
