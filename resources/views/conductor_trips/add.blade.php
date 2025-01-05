<x-conductor-layout>
    <div class="flex justify-center ">
    <div class="justify-center w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Bus Status') }} of {{$trip->company->name}} - BUS {{$trip->bus}} <br><br> Trip From: {{$trip->start}} to {{$trip->destination}} <br><br> Date: {{$trip->date}}  <br><br> Departed at: {{$bus_status->departure ?? '00:00'}}   - Arrived at: {{$bus_status->arrival ?? '00:00'}}    || Status: {{$bus_status->status ?? 'Pending'}} 
            <br><br>Conductor: {{$bus_status->conductor->name ?? ''}} 
        </h2>

    </x-slot>
    Use Buttons below to set current status of the trip. <br><hr><hr><br>
    <x-bladewind::button  color="blue" icon="information-circle"  title="departure" onclick="window.location='{{route('bus.confirm', $trip->id) }}'">CONFIRM DEPARTURE</x-bladewind::button>
    <x-bladewind::button  color="red" icon="information-circle"  title="arrival" onclick="window.location='{{route('bus.arrival', $trip->id) }}'">CONFIRM ARRIVAL</x-bladewind::button>
    </div>
    </div>
</x-conductor-layout>
