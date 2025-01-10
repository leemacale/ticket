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
            <div class="flex items-center w-3/4 h-16 pl-6 bg-white shadow">
                <!-- Image -->
                <img src="{{ asset('images/boy.png') }}" alt="Boy" class="w-6 h-6 rounded-full">
                <!-- Text -->
                <span class="ml-4 font-medium text-gray-700">1 Passenger</span>
            </div>
            <div class="flex flex-col items-start justify-between h-32 px-4 py-2 bg-white shadow w-80">
                <!-- Upper Content -->
                <div class="flex items-start justify-between w-full pb-2">
                    <span class="text-xl text-gray-700">Tickets</span>
                    <span class="text-xl text-gray-700">{{$trips->price}} PHP</span>
                </div>
                <div class="flex items-start justify-between w-full pb-2">

                    @php
                        $total = 0;
                    @endphp
                    @foreach ($foods as $foods)
                
                  
                    @php
                        
                        $total += $foods->foodmenu->price;
                    @endphp    
                
            @endforeach
                    <span class="text-xl text-gray-700">Food</span>
                    <span class="text-xl text-gray-700">{{$total}} PHP</span>
                </div>

                <!-- Horizontal Line -->
                <hr class="w-full my-2 mb-4 border-t border-black">

                <!-- Lower Content -->
                <div class="flex items-start justify-between w-full mt-0 mb-1">
                    <span class="text-xl font-semibold text-gray-700">Total</span>
                    <span class="text-xl font-semibold text-gray-700">{{$trips->price  + $total}} PHP</span>
                </div>
            </div>
            </div>

            <div class="flex space-x-4">
                <div class="items-center w-3/4 h-32 pt-6 pl-6 bg-white shadow">
                    <b><span class="text-gray-800 text-m text-bold">{{$trips->date}}, {{$trips->time}}&nbsp;&nbsp;{{$trips->start}} -> {{$trips->destination}}</span></b>
                    <hr>
                   
                        <i class="text-gray-800 fas fa-bus"></i><span class="text-gray-800 text-m">Bus ride with {{$trips->company->name}} in <strong class="font-bold text-m">Regular AC</strong></span>
                        , Bus no. {{$trips->bus}}
                    
                </div>
            </div>

            <div class="flex ">
                <div class="items-center w-3/4 pt-6 pb-6 pl-6 bg-white shadow h-100">
                    <img src="{{ asset('images/seat.png') }}" alt="seats">
                
                    <select name="seat" id="seat">

                        <option value="" selected disabled>Choose Your Seat</option>
                        @php
                            $arrays;
                        @endphp
                       
                           
                        @for ($x=1;$x<=48;$x++)
                            @php
                                $yes = 'false';
                            @endphp
                        @foreach ($seats as $seat)
                        @if ($seat->seat == $x)
                        @php
                        $yes = 'true';
                    @endphp
                        @endif
                        @endforeach
                           @if ($yes == 'false')
                           <option value="{{$x}}" >{{$x}}</option>
                           @endif
                            
                        
                            
                      
                        @endfor
                        
                    </select>
                </div>
            </div>
            <div
            class="relative flex flex-col items-center w-3/4 bg-white shadow-md h-45"
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
        <a class="flex items-center px-6 py-2 mt-4 font-semibold text-white bg-black rounded hover:bg-gray-800 focus:outline-none" href="{{route('food.index', $trips->id)}}">
            <img src="{{ asset('images/OrderFood.png') }}" alt="Order Food" class="w-5 h-5 mr-2"> <!-- Add margin-right to separate image from text -->
            <span class="text-center">Order Food</span>
        </a>
        
        
        
        </div>

        </x-bladewind::tab-content>

        <x-bladewind::tab-content name="tab-2">
            <h1><b>Passenger Information</b></h1>
            <hr><br>
            <div class="w-1/2 p-3 bg-white ">
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
            <div class="w-1/2 p-3 bg-white ">
                <h2><b>Passenger Information:</b></h2>
                <hr><br>
                *{{Auth::user()->name}}, {{Auth::user()->gender}}, Filipino
                <br><hr><br>
                <h2><b>Departure Date</b></h2>
                <hr><br>
                {{$trips->date}}, {{$trips->time}}&nbsp;&nbsp;{{$trips->start}} -> {{$trips->destination}}
            </div><br><br>
            <div class="w-1/2 p-3 mx-auto bg-white">
                <span >
                    By Going to the Next Step , you confirm that you have read and understood
                    <a href="https://example.com/terms-and-conditions" class="text-blue-500 " target="_blank">Terms and Conditions</a>, and
                    <a href="https://example.com/privacy-policy" class="text-blue-500 " target="_blank">Privacy Policy</a>, and agree to be bound by them.
                </span>
            </div>
        </x-bladewind::tab-content>

        <x-bladewind::tab-content name="tab-4">
           <div
            class="relative flex flex-col items-center justify-center w-3/4 bg-white shadow-md"
            style="position: absolute; top: 200px; left: 150px; height:12%; width: 920px; ; padding: 20px; z-index: 10;">
            <!-- Button Container (Flex) -->
        
            <input type="radio" id="gcash" name="payment_method" class="absolute left-3 top-4" checked><h1 class="text-xl font-bold text-black" style="position: absolute; bottom: 57px; left: 30px;"></h1>
        <img src="{{ asset('images/paymongo.png') }}" alt="Previous" class="h-6 w-18" style="position: absolute; top: 13px; left: 35px;">
        <p style="margin-top: 10px; margin-left: -750px; font-size: 0.870rem;  ">
        Service Fee 32 PHP
            </p>
        
        
            <!-- Text Centered -->
            <x-primary-button class="ms-4">
                {{ __('Confirm Payment') }}
            </x-primary-button>
        
        
        
        
        
        
            </div>
        <div class="flex space-x-4">
            <div class="flex items-center w-3/4 h-32 pb-6 pl-6 ">
                
                
            </div>
            <div class="flex flex-col items-start justify-between h-32 px-4 py-2 bg-white shadow w-80">
                <!-- Upper Content -->
                <div class="flex items-start justify-between w-full pb-2">
                    <span class="text-xl text-gray-700">Tickets</span>
                    <span class="text-xl text-gray-700">{{$trips->price}} PHP</span>
                </div>
                <div class="flex items-start justify-between w-full pb-1">
                    <span class="text-xl text-gray-700">Food</span>
                    <span class="text-xl text-gray-700">{{ $total}} PHP</span>
                </div>
                <input type="hidden" name="amount" value="{{$trips->price +32  + $total}}">
                <div class="flex items-start justify-between w-full pb-1">
                    <span class="text-xl text-gray-700">fees</span>
                    <span class="text-xl text-gray-700">32 PHP</span>
                </div>

                <!-- Horizontal Line -->
                <hr class="w-full my-2 mb-4 border-t border-black">

                <!-- Lower Content -->
                <div class="flex items-start justify-between w-full mt-0 mb-1">
                    <span class="text-xl font-semibold text-gray-700">Total</span>
                    <span class="text-xl font-semibold text-gray-700">{{$trips->price +32  + $total}} PHP</span>
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
