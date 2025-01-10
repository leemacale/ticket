<x-app-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Sales Report') }}
        </h2>

        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <form method="GET" action="{{ route('sales.index') }}">
            @csrf
           
        <div>
            <x-input-label for="location" :value="__('From Date')" />
            <x-text-input id="location" class="block w-full mt-1" type="date" name="from" :value="old('location')" required autofocus autocomplete="location" />
            <x-input-error :messages="$errors->get('location')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="description" :value="__('To Date')" />
            <x-text-input id="description" class="block w-full mt-1" type="date" name="to" :value="old('description')" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <br>
        <x-primary-button class="ms-4">
            {{ __('Filter') }}
        </x-primary-button>
    </form>
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Trip</th>
                <th>Price</th>
                @php
                    $total = 0;
                @endphp
                
                @foreach ($tickets as $trip)
                <tr>
                    <td>{{$trip->trip->start}} - {{$trip->trip->destination}} , {{$trip->trip->date}} | {{$trip->trip->company->name}}</td>        
                    <td>
                        {{$trip->trip->amount}} 
                        @php
                            $total += $trip->trip->amount;
                        @endphp
                        </td>
                </tr>

            @endforeach
            <tr>
                <td></td>        
                <td>
                    {{$total}} 
                
                    </td>
            </tr>
            </thead>
          
        </table>

       
    </div>
</div>
</x-app-layout>
