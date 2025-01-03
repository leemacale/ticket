<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .brand-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

		.brand-button {
    padding: 10px 20px;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
}

.brand-button.selected {
    border: 3px solid #ccc; /* Add a border to indicate selection */
    background-color: #ccc; /* Change background color when selected */
}

.brand-button img {
    width: 80%; /* Make the image width responsive */
    height: auto; /* Maintain aspect ratio */
    max-width: 120px; /* Limit the max width */
}

        .content {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Reduced gap between the elements */
            flex-wrap: wrap; /* Allow content to wrap for smaller screens */
        }

        .sidebar, .products, .order-summary {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

		.sidebar a {
    text-decoration: none; /* Remove underline from links */
    color: black; /* Optional: Change the text color to black */
}

.sidebar a:hover {
    text-decoration: none; /* Ensure no underline on hover */
    color: #007bff; /* Optional: Add hover color */
}

        .sidebar {
            width: 230px; /* Reduced width to bring sidebar closer */
        }

        .products {
            flex-grow: 1; /* Allow the product list to take remaining space */
            min-width: 300px; /* Prevent too narrow products container */
        }

        .order-summary {
            min-width: 250px; /* Set minimum width for order summary */
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            margin: 10px 0;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .sidebar-icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .sidebar li.active, .sidebar li:hover {
            background-color: #ccc;
        }

        .products img {
            width: 80px;
            height: 80px;
        }

        .product-item {
            color: black;
            text-align: center;
            width: 120px; /* Fixed square size */
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: none; /* Remove button border */
            background: white; /* Ensure white background */
            padding: 10px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            cursor: pointer; /* Indicate interactivity */
            transition: transform 0.2s ease-in-out;
        }

        .product-item:hover {
            transform: scale(1.05); /* Add slight hover effect */
            background-color: #f9f9f9; /* Light background on hover */
        }

        .product-item img {
            width: 80px; /* Default image size for desktop */
            height: 80px;
            margin-bottom: 5px; /* Spacing below image */
        }

        .product-item p {
            margin: 0; /* Remove default margins */
            font-size: 12px;
            text-align: center;
        }
		.back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1000; /* Ensure it stays on top */
        }

        .back-button a {
            text-decoration: none;
            font-size: 16px;
            color:rgb(24, 25, 27);
            font-weight: bold;
            background-color: #f4f4f4;
            padding: 5px 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .back-button a:hover {
            background-color: #ccc;
            color: white;
        }


        /* Responsive Overrides */
        @media (max-width: 768px) {
			.brand-button img {
        width: 60%; /* Reduce the size on smaller screens */
    }
            .sidebar {
                width: 100%; /* Full width on smaller screens */
            }

            .products, .order-summary {
                width: 100%; /* Full width for the other sections */
            }

            .product-item img {
                width: 60px; /* Smaller images on mobile */
                height: 60px;
            }

            .product-item {
                width: 100px;
                height: 100px;
            }
			.back-button {
                top: 10px; /* Adjust closer to the top */
                left: 10px; /* Align more to the left */
            }

            .back-button a {
                font-size: 12px; /* Smaller text */
                padding: 3px 6px; /* Smaller padding */
                /* Smaller rounded corners */
            }
        }

        /* Order Summary adjustments */
        .order-summary {
            min-width: 300px; /* Set minimum width for order summary */
        }

        /* Order Summary Layout */
        .order-summary-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .order-summary-content span {
            font-size: 14px;
        }

        .order-summary-content .view-link {
            font-size: 14px;
            text-decoration: underline;
            color: #007bff;
            cursor: pointer;
        }

        .order-summary-content .checkout-button {
            padding: 10px 20px;
            background-color: #ccc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .order-summary-content .checkout-button:hover {
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">

	<!-- Back Button -->
	<div class="back-button">
            <a href="{{ route('user.bp-two') }}" aria-label="Go back">
                &#8592; Back
            </a>
        </div>
        <!-- Brand Buttons -->
		<div class="brand-buttons">
    <button class="brand-button selected">
        <img src="{{ asset('images/jollibee_logo.png') }}" alt="Jollibee">
    </button>
    <button class="brand-button">
        <img src="{{ asset('images/mcdonalds_logo.png') }}" alt="McDonald's">
    </button>
</div>



        <div class="content">
            <!-- Sidebar -->
            <div class="sidebar">
                <h2>Jollibee</h2>
                <ul>
				<li>
            <a href="{{ route('user.order_meal_jb') }}">
                <img src="{{ asset('images/meal.png') }}" alt="Coffee" class="sidebar-icon">Meal
            </a>
        </li>						<li>
            <a href="{{ route('user.order_coffee_jb') }}">
                <img src="{{ asset('images/coffees.png') }}" alt="Coffee" class="sidebar-icon">Coffee
            </a>
        </li>

		<li class="active">
            <a href="{{ route('user.order_hamburger_jb') }}">
                <img src="{{ asset('images/hamburger.png') }}" alt="Burger" class="sidebar-icon">Burger and Fries
            </a>
        </li>

		<li><a href="{{ route('user.order_dessert_jb') }}"><img src="{{ asset('images/icecream.png') }}" alt="Desserts" class="sidebar-icon">Desserts</a></li>
		<li><a href="{{ route('user.order_drinks_jb') }}"><img src="{{ asset('images/drinks.png') }}" alt="Desserts" class="sidebar-icon">Drinks</a></li>
                </ul>
            </div>

            <!-- Product List -->
            <div class="products">
                <h2>Menu</h2>
                <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
                    <!-- Yum Burger -->
                    <button class="product-item">
                        <img src="{{ asset('images/yumburger.png') }}" alt="Yum Burger">
                        <p><strong>Yum Burger</strong></p>
                        <p>40 php</p>
                    </button>
                    <!-- Cheese Burger -->
                    <button class="product-item">
                        <img src="{{ asset('images/cheeseb.png') }}" alt="Cheese Burger">
                        <p><strong>Cheese Burger</strong></p>
                        <p>40 php</p>
                    </button>
                    <!-- Fries -->
                    <button class="product-item">
                        <img src="{{ asset('images/fries.jpg') }}" alt="Fries">
                        <p><strong>S Fries</strong></p>
                        <p>20 php</p>
                    </button>

                    <button class="product-item">
                        <img src="{{ asset('images/fries.jpg') }}" alt="MFries">
                        <p><strong>M Fries</strong></p>
                        <p>50 php</p>
                    </button>

					<button class="product-item">
                        <img src="{{ asset('images/fries.jpg') }}" alt="MFries">
                        <p><strong>L Fries</strong></p>
                        <p>50 php</p>
                    </button>




                </div>
            </div>

       <!-- Order Summary -->
	   <div class="order-summary">
                <h2>My Orders</h2>
                <div class="order-summary-content">
                    <span><strong>Yum Burger</strong> - 40 php</span>
					<a href="{{ route('user.viewpage', ['id' => 1]) }}" class="view-link">
        View
    </a>                        <button class="checkout-button">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
