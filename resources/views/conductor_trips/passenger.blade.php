<x-conductor-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Passengers') }}
        </h2>

    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Name</th>
                <th>Status</th>
                <th>ID</th>
                <th></th>
            </thead>
            @foreach ($passengers as $passenger)
                <tr>
                    <td>{{$passenger->name}}</td>            
                    <td>{{$passenger->status}}</td>        
                    <td><a href="../{{$passenger->filepath}}">View File</a> </td>     
                    <td>
                       
                            <!-- //route('contracts.payment', $trip->id) }}  -->
                           
                            <form method="POST" action="{{ route('passenger.destroy', $passenger->id) }}">
                                @csrf
                                @method('DELETE')
                                <x-bladewind::button  color="green" icon="check"  title="send location" onclick="window.location='{{route('passenger.approve', $passenger->id) }}'">Approve</x-bladewind::button>
                            <x-bladewind::button  color="red" icon="trash"  title="delete" can_submit="true">DELETE</x-bladewind::button>
                            </form>
                        </td>
                </tr>

            @endforeach
        </table>

       
    </div>
</div>
</x-conductor-layout>
