<x-app-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Locations') }}
        </h2>
        <x-bladewind::button color="green" icon="plus"
            onclick="window.location='{{ route('locations.add') }}'">Add</x-bladewind::button>
        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Name</th>
                <th></th>
            </thead>
            @foreach ($locations as $location)
                <tr>
                    <td>{{$location->name}}</td>        
                    <td>
                        <form method="POST" action="{{ route('locations.destroy', $location->id) }}">
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
