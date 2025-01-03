<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Ticketwise Bus</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-image: url('{{ asset('images/road.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="h-auto flex items-center justify-center py-12">
<div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-sm sm:max-w-md lg:max-w-lg">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-black">
                    CREATE ACCOUNT
                </h1>

                <p class="mt-2 text-lg text-gray-600">Conductor</p>
            </div>

            <form id="createAccountForm">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                    <input id="name" type="text" name="name" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required autofocus>
                    <span class="text-red-500 error-message" id="name-error"></span>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                    <input id="email" type="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                    <span class="text-red-500 error-message" id="email-error"></span>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input id="password" type="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                    <span class="text-red-500 error-message" id="password-error"></span>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                    <span class="text-red-500 error-message" id="password_confirmation-error"></span>
                </div>

                <div class="mb-4">
                    <label for="contact_no" class="block text-gray-700 font-semibold mb-2">Contact Number</label>
                    <input id="contact_no" type="text" name="contact_no" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                    <span class="text-red-500 error-message" id="contact_no-error"></span>
                </div>

                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-semibold mb-2">Gender</label>
                    <select id="gender" name="gender" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <span class="text-red-500 error-message" id="gender-error"></span>
                </div>

                <div class="mb-4">
                    <label for="birth_date" class="block text-gray-700 font-semibold mb-2">Date of Birth</label>
                    <input id="birth_date" type="date" name="birth_date" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                    <span class="text-red-500 error-message" id="dob-error"></span>
                </div>

				<!-- Dropdown for DLTB, JAC, JAM -->
				<div class="mb-4">
        <label for="company" class="block text-gray-700 font-semibold mb-2">Company</label>
        <select id="company" name="company" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
            <option value="" disabled selected>Select Company</option>
            <option value="DLTB">DLTB</option>
            <option value="JAC">JAC</option>
            <option value="JAM">JAM</option>
        </select>
        <span class="text-red-500 error-message" id="company-error"></span>
    </div>

	<div class="mb-4 text-center">
    <label for="id_upload" class="block text-gray-700 font-semibold mb-4">Provide an ID for verification</label>
    <label for="id_upload"
           class="inline-block w-64 bg-black text-white py-2  text-center font-semibold cursor-pointer hover:bg-gray-800 transition duration-300">
        Upload ID
    </label>
    <input id="id_upload" type="file" name="id_upload" accept="image/*" class="hidden" required>
    <span class="text-red-500 error-message" id="id_upload-error"></span>
</div>

<!-- Terms of Service Checkbox -->
<div class="mb-4 text-center">
    <label class="inline-flex items-center">
        <input type="checkbox" name="terms_of_service" id="terms_of_service" class="w-4 h-4 text-gray-800 border-gray-300 rounded focus:ring-gray-500" required>
        <span class="ml-2 text-gray-700">I have read and agreed to the <a href="#" class="text-blue-600 underline">Terms of Service</a>.</span>
    </label>
    <span class="text-red-500 error-message" id="terms-of-service-error"></span>
</div>



                <button id="createAccountButton" type="submit" class="w-full bg-gray-800 text-white py-2 font-semibold hover:bg-black transition duration-300">
                    Create Account
                </button>
            </form>

            <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
                <div class="bg-white p-6 rounded-lg w-96">
                    <div class="flex justify-center">
                        <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-xl font-semibold">Account Registered Successfully</h2>
                        <p class="text-gray-500">Your account has been successfully created!</p>
                    </div>
                    <div class="mt-4 text-center">
                        <button id="closeModalButton" class="bg-gray-800 text-white py-2 px-4 rounded">
                            Close
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <p class="text-sm text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-gray-800 hover:underline">Login here</a></p>
            </div>
        </div>
    </div>

	<script>
    $(document).ready(function () {
        const baseurl = "http://ticketwiseapp.test/api/v1";

        // Handle form submission
        $('#createAccountForm').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Clear previous error messages
            $('.error-message').text('');

            // Get the form data
            var formData = $(this).serialize();

            // Append the default user_type
            formData += '&user_type=conductor';


            // Send the AJAX request
            $.ajax({
                url: `${baseurl}/auth/signup`, // Your API route
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Show the success modal
                    $('#successModal').removeClass('hidden');
                },
                error: function (xhr) {
                    // Handle validation errors
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function (field, message) {
                            $('#' + field + '-error').text(message);
                        });
                    } else {
                        alert('An error occurred. Please try again later.');
                    }
                }
            });
        });

        // Close the modal
        $('#closeModalButton').on('click', function () {
            $('#successModal').addClass('hidden');
            window.location.href = '/'; // Navigate to public view
        });
    });
</script>


</body>
</html>
