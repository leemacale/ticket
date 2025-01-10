<x-app-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Dashcam Footage') }}
        </h2>

        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Trip</th>
                <th>Date</th>
                <th>File</th>
           
            </thead>
            @foreach ($dashcams as $dashcam)
            @if($dashcam->trip->company->id == Auth::user()->company)
                <tr>
                    <td>Trip {{$dashcam->trip->start}} to {{$dashcam->trip->destination}} ||  {{$dashcam->trip->date}} </td>        
                    <td>{{$dashcam->created_at}} </td>        
                    <td><a href="{{$dashcam->filepath}}">View File</a> </td>        
              
                </tr>
@endif
            @endforeach
        </table>

       
    </div>
</div>
</x-app-layout>
