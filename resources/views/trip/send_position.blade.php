<x-app-layout>
   
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Bus Location') }} of {{$trip->company->name}} - BUS {{$trip->bus}} || Trip From: {{$trip->start}} to {{$trip->destination}}
        </h2>
        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
      <h1>Maintain this site open to send your current location.</h1>
       
    <form method="POST" id="myform" action="{{ route('bus.store') }}">
            @csrf
            @method('PUT')

            <input type="text" name="long" id="long">
            <input type="text" name="lat" id="lat">
            <input type="text" name="trip_id" id="trip_id" value="{{$trip->id}}">

            <x-primary-button class="ms-4">
                {{ __('Add') }}
            </x-primary-button>
        </form>

    </div>
</div>
</x-app-layout>
<script>
    window.setInterval(function(){ 
    document.getElementById("myform").submit(); 
}, 10000); 
</script>