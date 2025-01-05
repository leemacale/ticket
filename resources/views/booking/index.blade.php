<x-user-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Booking') }}
        </h2>
        
        </div>
    </x-slot>
    <div >
    <x-bladewind::tab-group name="free-pics">
        <form method="POST" action="{{ route('ticket.store') }}">
            @csrf
            @method('PUT')

            <input type="hidden" name="trip_id" value="{{$trips->id}}">
    <x-slot:headings class="item-center">
        <x-bladewind::tab-heading
            name="tab-1" active="true" label="1.Itinerary" />

        <x-bladewind::tab-heading
            name="tab-2" label="2.Passenger" />

        <x-bladewind::tab-heading
            name="tab-3"  label="3.Confirmation" />

        <x-bladewind::tab-heading
            name="tab-4" label="4.Payment" />
    </x-slot:headings>

    <x-bladewind::tab-body>
      
        <x-bladewind::tab-content name="tab-1" active="true">
            <div class="flex space-x-4">
            <div class="bg-white shadow h-16 w-3/4 flex items-center pl-6">
                <!-- Image -->
                <img src="{{ asset('images/boy.png') }}" alt="Boy" class="h-6 w-6 rounded-full">
                <!-- Text -->
                <span class="ml-4 text-gray-700 font-medium">1 Passenger</span>
            </div>
            <div class="bg-white shadow h-32 w-80 flex flex-col items-start justify-between px-4 py-2">
                <!-- Upper Content -->
                <div class="flex items-start justify-between w-full pb-2">
                    <span class="text-gray-700 text-xl">Tickets</span>
                    <span class="text-gray-700 text-xl">{{$trips->price}} PHP</span>
                </div>

                <!-- Horizontal Line -->
                <hr class="border-t border-black w-full my-2 mb-4">

                <!-- Lower Content -->
                <div class="flex items-start justify-between w-full mt-0 mb-1">
                    <span class="text-gray-700 text-xl font-semibold">Total</span>
                    <span class="text-gray-700 text-xl font-semibold">{{$trips->price}} PHP</span>
                </div>
            </div>
            </div>

            <div class="flex space-x-4">
                <div class="bg-white shadow h-32 w-3/4  items-center pl-6 pt-6">
                    <b><span class="text-m text-gray-800 text-bold">{{$trips->date}}, {{$trips->time}}&nbsp;&nbsp;{{$trips->start}} -> {{$trips->destination}}</span></b>
                    <hr>
                   
                        <i class="fas fa-bus text-gray-800"></i><span class="text-m text-gray-800">Bus ride with {{$trips->company->name}} in <strong class="font-bold text-m">Regular AC</strong></span>
                        , Bus no. {{$trips->bus}}
                    
                </div>
            </div>

            <div class="flex ">
                <div class="bg-white shadow h-100 w-3/4  items-center pl-6 pt-6 pb-6">
                    <img src="{{ asset('images/seat.png') }}" alt="seats">
                    <select name="seat" id="seat">
                        <option value="" selected disabled>Choose Your Seat</option>
                        @for ($x=1;$x<=48;$x++)
                        <option value="{{$x}}" >{{$x}}</option>
                        @endfor
                        
                    </select>
                </div>
            </div>
            <div
            class="w-3/4 bg-white h-45 shadow-md relative flex flex-col items-center"
            style="position: absolute; top: 910px; left: 150px; width: 920px; margin-bottom: 300px; padding: 20px;"
        >
            <p style="margin-top: 5px; font-size: 0.870rem;  ">
                <strong style="white-space: nowrap; font-size: 0.870rem;">
                    THE TRIP MIGHT BE LONG AND YOU MIGHT GET HUNGRY. SO WE OFFER OUR ORDERING SYSTEM WHERE YOU CAN ORDER FOOD.
                </strong>
                The food you order can be claimed with the conductor.<br>
                Please wait for the conductor to buy the food you order along the trip.
            </p>
        
         <!-- Order Food Button -->
        <a class="mt-4 px-6 py-2 bg-black text-white font-semibold rounded hover:bg-gray-800 focus:outline-none flex items-center" onclick="window.location='{{ route('user.order_hamburger_jb')}}'">
            <img src="{{ asset('images/OrderFood.png') }}" alt="Order Food" class="w-5 h-5 mr-2"> <!-- Add margin-right to separate image from text -->
            <span class="text-center">Order Food</span>
        </a>
        
        
        
        </div>

        </x-bladewind::tab-content>

        <x-bladewind::tab-content name="tab-2">
            <h1><b>Passenger Information</b></h1>
            <hr><br>
            <div class="w-1/2 bg-white p-3 ">
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" value="{{Auth::user()->name}}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" value="{{Auth::user()->email}}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>  <div class="mt-4">
                <x-input-label for="contact" :value="__('Contact No')" />
                <x-text-input id="contact" class="block w-full mt-1" type="text" name="contact" value="{{Auth::user()->contact}}" />
                <x-input-error :messages="$errors->get('contact')" class="mt-2" />
            </div>
    
    
            <div class="mt-4">
                <x-input-label for="dob" :value="__('Date of Birth')" />
                <x-text-input id="dob" class="block w-full mt-1" type="date" name="dob" value="{{Auth::user()->dob}}"/>
                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
            </div>
    
            <div class="mt-4">
                <x-input-label for="gender" :value="__('Gender')" />
                <select name="gender" id="gender" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{Auth::user()->gender}}">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>
    
        </div>
        </x-bladewind::tab-content>

        <x-bladewind::tab-content name="tab-3" >
            <h1><b>Trip Information</b></h1>
            <hr><br>
            <div class="w-1/2 bg-white p-3 ">
                <h2><b>Passenger Information:</b></h2>
                <hr><br>
                *{{Auth::user()->name}}, {{Auth::user()->gender}}, Filipino
                <br><hr><br>
                <h2><b>Departure Date</b></h2>
                <hr><br>
                {{$trips->date}}, {{$trips->time}}&nbsp;&nbsp;{{$trips->start}} -> {{$trips->destination}}
            </div><br><br>
            <div class="w-1/2 bg-white p-3 mx-auto">
                <span >
                    By Going to the Next Step , you confirm that you have read and understood
                    <a href="https://example.com/terms-and-conditions" class="text-blue-500 " target="_blank">Terms and Conditions</a>, and
                    <a href="https://example.com/privacy-policy" class="text-blue-500 " target="_blank">Privacy Policy</a>, and agree to be bound by them.
                </span>
            </div>
        </x-bladewind::tab-content>

        <x-bladewind::tab-content name="tab-4">
           <div
            class="w-3/4 bg-white  shadow-md relative flex flex-col items-center justify-center"
            style="position: absolute; top: 200px; left: 150px; height:12%; width: 920px; ; padding: 20px; z-index: 10;">
            <!-- Button Container (Flex) -->
        
            <input type="radio" id="gcash" name="payment_method" class="absolute left-3 top-4" checked><h1 class="text-xl text-black font-bold" style="position: absolute; bottom: 57px; left: 30px;"></h1>
        <img src="{{ asset('images/paymongo.png') }}" alt="Previous" class="w-18 h-6" style="position: absolute; top: 13px; left: 35px;">
        <p style="margin-top: 10px; margin-left: -750px; font-size: 0.870rem;  ">
        Service Fee 32 PHP
            </p>
        
        
            <!-- Text Centered -->
            <x-primary-button class="ms-4">
                {{ __('Confirm Payment') }}
            </x-primary-button>
        
        
        
        
        
        
            </div>
        <div class="flex space-x-4">
            <div class="  h-32 w-3/4 flex items-center pl-6 pb-6">
                
                
            </div>
            <div class="bg-white shadow h-32 w-80 flex flex-col items-start justify-between px-4 py-2">
                <!-- Upper Content -->
                <div class="flex items-start justify-between w-full pb-2">
                    <span class="text-gray-700 text-xl">Tickets</span>
                    <span class="text-gray-700 text-xl">{{$trips->price}} PHP</span>
                </div>
                <div class="flex items-start justify-between w-full pb-1">
                    <span class="text-gray-700 text-xl">Taxes and fees</span>
                    <span class="text-gray-700 text-xl">32 PHP</span>
                </div>

                <!-- Horizontal Line -->
                <hr class="border-t border-black w-full my-2 mb-4">

                <!-- Lower Content -->
                <div class="flex items-start justify-between w-full mt-0 mb-1">
                    <span class="text-gray-700 text-xl font-semibold">Total</span>
                    <span class="text-gray-700 text-xl font-semibold">{{$trips->price +32}} PHP</span>
                </div>
            </div>
            </div>

          
        </x-bladewind::tab-content>
        
    </x-bladewind::tab-body>

</x-bladewind::tab-group>
</form>
</div>
</div>
</x-app-layout>
