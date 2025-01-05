<x-app-layout>
    <div class="flex items-center justify-center h-screen">
    <div class="justify-center w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Trip') }}
        </h2>

    </x-slot>
    <form method="POST" action="{{ route('trips.store') }}">
        @csrf
        @method('PUT')
        <!-- Name -->
        <div>
            <x-input-label for="start" :value="__('Starting Point')" />
            <select name="start" class="block w-full mt-1" >
                @foreach ($locations as $location)
                <option value="{{$location->name}}">{{$location->name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('start')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="destination" :value="__('Destination')" />
            <select name="destination" class="block w-full mt-1" >
                @foreach ($locations as $location)
                <option value="{{$location->name}}">{{$location->name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('destination')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="date" :value="__('Trip Date')" />
            <input type="date" name="date"  class="block w-full mt-1" >
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="time" :value="__('Time of Departure')" />
            <input type="time" name="time"  class="block w-full mt-1" >
            <x-input-error :messages="$errors->get('time')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="company_id" :value="__('Bus Company')" />
            <select name="company_id" class="block w-full mt-1" >
                @foreach ($company as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('company_id')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="bus" :value="__('Bus No')" />
            <input type="text" name="bus"  class="block w-full mt-1" >
            <x-input-error :messages="$errors->get('bus')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="price" :value="__('Ticket Price')" />
            <input type="number" name="price"  class="block w-full mt-1" >
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
       

            <x-primary-button class="ms-4">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>
</x-app-layout>
