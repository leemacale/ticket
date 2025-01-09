<x-conductor-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Food Order') }}
        </h2>

        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Trip</th>
             
                <th>Order</th>
                <th>Total</th>
                
           
            </thead>
          
        </table>

       
    </div>
</div>
</x-conductor-layout>
