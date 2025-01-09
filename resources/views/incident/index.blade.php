<x-app-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Incidents') }}
        </h2>

        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Trip</th>
                <th>Location</th>
                <th>Description</th>
                <th>File</th>
           
            </thead>
            @foreach ($incidents as $incident)
                <tr>
                    <td>Trip {{$incident->trip->start}} to {{$incident->trip->destination}} ||  {{$incident->trip->date}} </td>        
                    <td>{{$incident->location}} </td>        
                    <td>{{$incident->description}} </td>        
                    <td><a href="{{$incident->filepath}}">View File</a> </td>        
              
                </tr>

            @endforeach
        </table>

       
    </div>
</div>
</x-app-layout>
