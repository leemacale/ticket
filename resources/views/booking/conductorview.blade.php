<x-conductor-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Booking') }}
        </h2>
   
        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Customer</th>
                <th>Starting Point</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Time</th>
                <th>Company</th>
                <th>Bus No</th>
                <th>Ticket Price</th>
                <th>Trip Status</th>
            </thead>
            @foreach ($trips as $trip)
                <tr>
                    <td>{{$trip->user->name}}</td>        
                    <td>{{$trip->trip->start}}</td>        
                    <td>{{$trip->trip->destination}}</td>        
                    <td>{{$trip->trip->date}}</td>        
                    <td>{{$trip->trip->time}}</td>        
                    <td>{{$trip->trip->company->name}}</td>        
                    <td>{{$trip->trip->bus}}</td>        
                    <td>{{$trip->trip->price}}</td>        
                    <td>{{$trip->bus->status}}</td>        
            
                </tr>

            @endforeach
        </table>

       
    </div>
</div>
</x-conductor-layout>
