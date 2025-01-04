<x-app-layout>
    <div class="flex items-center justify-center h-screen">
    <div class="justify-center w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Bus Location') }} of {{$trip->company->name}} - BUS {{$trip->bus}} || Trip From: {{$trip->start}} to {{$trip->destination}}
        </h2>

    </x-slot>
    <form method="POST" action="{{ route('bus.store') }}" id="myform">
        @csrf
        @method('PUT')
        <h1>Maintain this site open to send your current location.</h1>
   
        <div>
            <x-input-label for="date" :value="__('Long')" />
            <input type="text" name="long" id="long"  class="block w-full mt-1" readonly>
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="time" :value="__('Lat')" />
            <input type="text" name="lat" id="lat" class="block w-full mt-1" readonly >
            <x-input-error :messages="$errors->get('time')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="time" :value="__('Trip id')" />
            <input type="text" name="trip"  class="block w-full mt-1" value="{{$trip->id}}" >
            <x-input-error :messages="$errors->get('time')" class="mt-2" />
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
<script>
getLocation();

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    document.getElementById('lat').value = position.coords.latitude;
    document.getElementById('long').value = position.coords.longitude;
}



    window.setInterval(function(){ 
    document.getElementById("myform").submit(); 
}, 10000); 
</script>