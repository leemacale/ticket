<x-user-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('E-Ticket') }}
        </h2>

        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <div class="bg-white shadow-md rounded-lg p-4 h-auto">

            <!-- E-Ticket Section -->
            <div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex flex-col items-center justify-center text-center"
                style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">

                <div class="relative w-full">
                    <h3 class="font-semibold text-sm mb-1 text-gray-800">This is your e-ticket. Please print it and show at check-in</h3>
                    <button class="absolute top-2 right-1 text-gray-600 hover:text-gray-900 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex justify-center mt-3">
                    <img src="{{ $imageUrl ?? asset('images/qr.png') }}" alt="QR Code" class="h-24 w-24 object-cover ml-8">
                    <img src="{{ $imageUrl ?? asset('images/logo.png') }}" alt="Logo" class="h-24 w-24 object-cover ml-8">
                </div>

                <h4 class="font-bold ml-2 mt-10 text-left">Voucher</h4>

                <!-- Itinerary Container -->
                <div class="border border-gray-300 rounded-md p-4 mt-2 mb-4 w-full relative">
                    <h5 class="font-semibold text-sm mb-1 text-white bg-black p-2 rounded w-full text-center">Itinerary: {{$tickets->trip->start}} - {{$tickets->trip->destination}}</h5>

                    <!-- Flex Container for Left and Right Sections -->
                    <div class="w-full mt-4 flex">
                        <!-- Left Section -->
                        <div class="w-1/2 pr-4">
                            <div class="flex justify-between py-2">
                                <span class="font-medium ml-2">From: {{$tickets->trip->start}}</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="font-medium ml-2">To: {{$tickets->trip->destination}}</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-sm whitespace-nowrap ml-2">Date: {{$tickets->trip->date}} , {{$tickets->trip->time}} </span>
                            </div>
                        </div>

                        <!-- Right Section -->
                        <div class="w-1/2 pl-4">
                            <div class="flex justify-between py-2">
                                <span class="font-medium">Class: Regular AC</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="font-medium">Hotline: 12345678910</span>
                            </div>
                        </div>
                    </div>

                    <!-- Black Line Separator -->
                    <div class="h-px bg-black w-full my-2"></div>

                    <div class="flex justify-between py-2">
                        <span class="font-medium ml-2">{{Auth::user()->name}} ({{Auth::user()->gender}}, {{Auth::user()->dob}})</span>
                        <span>₱{{$tickets->trip->price+32}}.00</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="font-bold ml-2">Paid Total</span>
                        <span class="font-bold">₱{{$tickets->trip->price+32}}.00</span>
                    </div>
                </div>

                <!-- Important Information -->
                <ul class="list-disc list-inside mt-8 mb-4 text-left p-0 m-0 w-full pl-12">
                    <li class="text-gray-800">Passengers must present (Soft Copy or Hard Copy) the voucher and provide ID.</li>
                    <li class="text-gray-800">Passengers should be at the check-in area 1 hour prior to the departure time.</li>
                    <li class="text-gray-800">NO SHOW is considered as travelled, which is non-refundable.</li>
                    <li class="text-gray-800">For Refund, Rebooking, and Cancellation, please go to Refund.</li>
                </ul>

                <div class="w-full flex justify-end mt-4">
                    <small class="text-gray-600">Print this page (optional). Have a nice trip!</small>
                </div>
            </div>
        </div>

       
    </div>
</div>
</x-user-layout>
