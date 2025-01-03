<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ticketwise Bus</title>
    <!-- Importing Kanit font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
        font-family: 'Kanit', sans-serif;
        background-image: url('{{ asset('images/terminal.jpg') }}'); /* Set your background image here */
        background-size: cover; /* Cover the entire viewport */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent repeating the image */
    }
    </style>
</head>
<body class="bg-gray-100">

   <!-- Login Container -->
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full">
        <!-- Logo and Title -->
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-black">
                <span class="text-red-600">TICKETWISE</span> BUS
            </h1>
            <p class="mt-2 text-sm text-gray-600">Welcome back! Please login to your account.</p>
        </div>

        <!-- Login Form -->
        <form id="loginForm">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                <input id="email" type="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>
            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input id="password" type="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded-lg font-semibold hover:bg-black">
                Login
            </button>
        </form>

        <!-- Error Message -->
        <div id="error-message" class="text-red-500 text-sm mt-2 hidden"></div>

        <!-- Don't have an account message -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Don't have an account? <a href="{{ route('create_acc') }}" class="text-blue-600 hover:underline">Create an account here</a></p>
        </div>
    </div>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        const baseurl = "http://ticketwiseapp.test/api/v1";

        $('#loginForm').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Gather form data
            const email = $('#email').val();
            const password = $('#password').val();

            // Clear any previous error message
            $('#error-message').addClass('hidden').text('');

            // Send an AJAX POST request
            $.ajax({
                url: `${baseurl}/auth/signin`, // Replace with your API endpoint
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                data: JSON.stringify({ email: email, password: password }),
                success: function (response) {
                    console.log('Login Successful:', response);  // Log the entire response object

                    // Check if the user object contains user_type and approval status
                    if (response && response.user) {
                        const userType = response.user.user_type; // Access user_type from the nested user object
                        const isApproved = response.user.is_conductor_account_approved; // Access approval status

                        console.log('User Type:', userType);  // Log the user type
                        console.log('Is Conductor Account Approved:', isApproved);  // Log approval status

                        // Redirect or show an error based on the user's user_type and approval status
                        if (userType === 'admin') {
                            window.location.href = "{{ route('admin-page') }}";
                        } else if (userType === 'passenger') {
                            window.location.href = "{{ route('user.dashboard') }}";
                        } else if (userType === 'conductor') {
                            if (isApproved) {
                                window.location.href = "{{ route('conductor.dashboard') }}";
                            } else {
                                // Show error for unapproved conductor accounts
                                $('#error-message').removeClass('hidden').text('Your conductor account is not yet approved.');
                                console.error('Conductor account not approved.');
                            }
                        } else {
                            console.error('Unknown user type:', userType);
                        }
                    } else {
                        console.error('User information not found in response:', response);
                        $('#error-message').removeClass('hidden').text('You entered invalid credentials.');
                    }
                },
                error: function (xhr) {
                    console.error('Login Failed:', xhr.responseJSON);
                    let errorMessage = xhr.responseJSON?.message || 'Invalid login credentials.';
                    $('#error-message').removeClass('hidden').text(errorMessage);
                }
            });
        });
    });
</script>






</html>
