<x-conductor-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Trips') }}
        </h2>

    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Starting Point</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Time</th>
                <th>Company</th>
                <th>Bus No</th>
                <th></th>
            </thead>
            @foreach ($trips as $trip)
                <tr>
                    <td>{{$trip->start}}</td>        
                    <td>{{$trip->destination}}</td>        
                    <td>{{$trip->date}}</td>        
                    <td>{{$trip->time}}</td>        
                    <td>{{$trip->company->name}}</td>        
                    <td>{{$trip->bus}}</td>            
                    <td>
                       
                            <!-- //route('contracts.payment', $trip->id) }}  -->
                            <x-bladewind::button  color="green" icon="map-pin"  title="send location" onclick="window.location='{{route('trips.add_loc', $trip->id) }}'">SEND LOCATION</x-bladewind::button>
                            <x-bladewind::button  color="blue" icon="information-circle"  title="send location" onclick="window.location='{{route('bus.status', $trip->id) }}'">BUS STATUS</x-bladewind::button>
                            <x-bladewind::button  color="yellow" icon="clipboard-document-check"  title="send location" onclick="window.location='{{route('trips.add_loc', $trip->id) }}'">BOOKING</x-bladewind::button>
                            <x-bladewind::button  color="orange" icon="fire"  title="send location" onclick="window.location='{{route('trips.add_loc', $trip->id) }}'">FOOD ORDERS</x-bladewind::button>
                            <x-bladewind::button  color="red" icon="bell-alert"  title="send location" onclick="window.location='{{route('trips.add_loc', $trip->id) }}'">INCIDENT REPORT</x-bladewind::button>
              
                        </td>
                </tr>

            @endforeach
        </table>

       
    </div>
</div>
</x-conductor-layout>
