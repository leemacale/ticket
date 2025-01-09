<x-user-layout>
    <style>
        #map { height: 700px; }
    </style>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Bus Location') }} of {{$trip->company->name}} - BUS {{$trip->bus}} || Trip From: {{$trip->start}} to {{$trip->destination}}
        </h2>
    
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
      
        

        <div id="map"></div>
       
    </div>
</div>
</x-user-layout>
<script>
    const position = [{{$busposition->lat}}, {{$busposition->long}}];
const map = L.map('map').setView(position, 11);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


var marker = L.marker(position).addTo(map);

window.setTimeout( function() {
  window.location.reload();
}, 30000);
</script>