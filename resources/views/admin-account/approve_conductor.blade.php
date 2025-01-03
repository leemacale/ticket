<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketwise Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-black text-white py-2">
        <div class="container mx-auto flex justify-between items-center px-4">
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
        <div class="bg-gray-200 w-1/6 h-screen mt-2">
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
        <div class="flex-1 p-4 bg-white shadow-lg rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Conductor Accounts</h2>

            <div id="conductor-list" class="space-y-4">
                <!-- Conductor list will be appended here dynamically -->
            </div>
        </div>

    </div>

    <script>
    $(document).ready(function () {
        const baseUrl = "http://ticketwiseapp.test/api/v1"; // Replace with your actual base URL
        const apiUrl = `http://ticketwiseapp.test/api/v1/accounts/conductor/`;

        $.ajax({
            url: `${baseUrl}/accounts`,
            type: "GET",
            dataType: "json",
            success: function (response) {
                // Loop through each account and display the conductor accounts only
                response.data.forEach(function (account) {
                    const isConductor = account.user_type === 'conductor';  // Check if the user_type is 'conductor'

                    if (isConductor) {
                        const conductorId = account.id;
                        const isApproved = account.is_conductor_account_approved;

                        // Create HTML for each conductor
                        const conductorHtml = `
                            <div class="p-4 bg-gray-100 rounded-md shadow-md">
                                <p><strong>ID:</strong> ${conductorId}</p>
                                <p><strong>Name:</strong> ${account.name}</p>
                                <p><strong>Email:</strong> ${account.email}</p>
                                <p><strong>Contact Number:</strong> ${account.contact_no}</p>
                                <p><strong>Gender:</strong> ${account.gender}</p>
                                <p><strong>Birth Date:</strong> ${account.birth_date}</p>
                                <p><strong>Account Approved:</strong> <span id="approved-${conductorId}">${isApproved ? "Yes" : "No"}</span></p>
                                <p><strong>User Type:</strong> ${account.user_type}</p>
                                <p><strong>Created At:</strong> ${account.created_at}</p>
                                <p><strong>Updated At:</strong> ${account.updated_at}</p>
                                ${isApproved ?
                                    '<button id="approve-btn" disabled class="mt-4 px-4 py-2 bg-green-500 text-white rounded cursor-not-allowed">Account Approved</button>' :
                                    `<button id="approve-btn-${conductorId}" class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" data-id="${conductorId}">Approve Account</button>
                                     <button id="decline-btn-${conductorId}" class="mt-4 ml-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600" data-id="${conductorId}">Decline Approval</button>`
                                }
                            </div>
                        `;
                        $('#conductor-list').append(conductorHtml);

                        // Attach click event for each approve button
                        $(`#approve-btn-${conductorId}`).click(function () {
                            if (confirm("Are you sure you want to approve this account?")) {
                                approveConductorAccount(conductorId);
                            }
                        });

                        // Attach click event for each decline button
                        $(`#decline-btn-${conductorId}`).click(function () {
                            if (confirm("Are you sure you want to decline this account?")) {
                                declineConductorAccount(conductorId);
                            }
                        });
                    }
                });
            },
            error: function (xhr, status, error) {
                console.error("Error fetching conductor data:", error);
            },
        });

        // Function to approve conductor account
        function approveConductorAccount(conductorId) {
            $.ajax({
                url: `${apiUrl}${conductorId}/approve`,  // Correct URL structure
                type: "PATCH",
                dataType: "json",
                contentType: "application/json",
                data: JSON.stringify({ is_conductor_account_approved: true }),
                success: function (response) {
                    $(`#approved-${conductorId}`).text("Yes");
                    $(`#approve-btn-${conductorId}`).prop('disabled', true).text("Account Approved");
                    $(`#decline-btn-${conductorId}`).prop('disabled', true);  // Disable decline button once approved
                    alert("Conductor account approved successfully!");
                },
                error: function (xhr, status, error) {
                    console.error("Error approving conductor account:", error);
                    alert("Failed to approve account. Please try again.");
                },
            });
        }

        // Function to decline conductor account
        function declineConductorAccount(conductorId) {
            $.ajax({
                url: `${apiUrl}${conductorId}/approve`,  // Correct URL structure
                type: "PATCH",
                dataType: "json",
                contentType: "application/json",
                data: JSON.stringify({ is_conductor_account_approved: false }),
                success: function (response) {
                    $(`#approved-${conductorId}`).text("No");
                    $(`#approve-btn-${conductorId}`).prop('disabled', true).text("Account Declined");
                    $(`#decline-btn-${conductorId}`).prop('disabled', true).text("Account Declined");
                    alert("Conductor account declined successfully!");
                },
                error: function (xhr, status, error) {
                    console.error("Error declining conductor account:", error);
                    alert("Failed to decline account. Please try again.");
                },
            });
        }
    });
</script>


</body>
</html>
