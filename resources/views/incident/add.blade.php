<x-conductor-layout>
    <div class="flex items-center justify-center ">
    <div class="justify-center w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Incident') }} : Trip {{$trip->start}} to {{$trip->destination}} ||  {{$trip->date}} 
        </h2>

    </x-slot>
    <form method="POST" action="{{ route('incident.store') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Name -->


        <x-text-input id="trip_id" class="block w-full mt-1" type="hidden" name="trip_id" value="{{$trip->id}}" required autofocus />

        
        <div>
            <x-input-label for="location" :value="__('Location of Incident')" />
            <x-text-input id="location" class="block w-full mt-1" type="text" name="location" :value="old('location')" required autofocus autocomplete="location" />
            <x-input-error :messages="$errors->get('location')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" class="block w-full mt-1" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="filepath" :value="__('File')" />
            <x-text-input id="filepath" class="block w-full mt-1" type="file" name="filepath" :value="old('filepath')"  autofocus autocomplete="filepath" />
            <x-input-error :messages="$errors->get('filepath')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
       

            <x-primary-button class="ms-4">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>
</x-conductor-layout>
