<x-app-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Trips') }}
        </h2>
        <x-bladewind::button color="green" icon="plus"
            onclick="window.location='{{ route('trips.add') }}'">Add</x-bladewind::button>
        </div>
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
                        <form method="POST" action="{{ route('trips.destroy', $trip->id) }}">
                            @csrf
                            @method('DELETE')
                            
                        <x-bladewind::button  color="red" icon="trash"  title="delete" can_submit="true">DELETE</x-bladewind::button>
                        </form>
                        </td>
                </tr>

            @endforeach
        </table>

       
    </div>
</div>
</x-app-layout>
