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
                <span class="mr-2 text-sm">Conductor</span>
                <div class="bg-gray-1 rounded-full h-8 w-8 overflow-hidden">
                    <img src="{{ asset('images/admin.png') }}" alt="Admin" class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </header>

    <div class="h-1 bg-red-600"></div>

    <div class="flex flex-col md:flex-row mt-0">

        <!-- Sidebar -->
        <div class="bg-gray-200 w-full md:w-1/6 h-screen mt-2"> <!-- Use full width on mobile -->
            <x-sidebars.conductor-account.conductor_sidebar
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4  md:mt-20"> <!-- Reduced margin-top for mobile -->
                <!-- First row -->
                <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('check_food') }}'">
                    <p>Check Food Order</p>
                </div>
                <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('report_incident') }}'">
                    <p>Report Incident/Accident</p>
                </div>

                <!-- Second row -->
                <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('manual_override') }}'">
                    <p>Manual Override</p>
                </div>
                <div class="bg-black h-60 flex items-center justify-center text-white text-lg hover:bg-red-800" onclick="window.location='{{ route('confirm_ba') }}'">
                    <p> Confirm Bus Arrival</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
