<x-user-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('My Trips') }}
        </h2>

        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Start Location</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Time</th>
                <th>Ticket Price</th>
                <th>Total</th>
                <th></th>
            </thead>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{$ticket->trip->start}}</td>        
                    <td>{{$ticket->trip->destination}}</td>        
                    <td>{{$ticket->trip->date}}</td>        
                    <td>{{$ticket->trip->time}}</td>        
                    <td>{{$ticket->trip->price}}</td>        
                    <td>{{$ticket->trip->price+ 32}}</td>        
                    <td>
                        <form method="POST" action="{{ route('ticket.destroy', $ticket->trip->id) }}">
                            @csrf
                            @method('DELETE')
                            <x-bladewind::button  color="green" icon="eye"  title="view ticket" onclick="window.location='{{route('ticket.views', $ticket->id) }}'">VIEW TICKET</x-bladewind::button>
                            <x-bladewind::button  color="yellow" icon="map-pin"  title="bus location" onclick="window.location='{{route('trips.loc2', $ticket->trip->id) }}'">BUS LOCATION</x-bladewind::button>
                            <x-bladewind::button  color="red" icon="trash"  title="delete" can_submit="true">CANCEL</x-bladewind::button>
                        </form>
                        </td>
                </tr>

            @endforeach
        </table>

       
    </div>
</div>
</x-user-layout>
