<x-conductor-layout>
    <div class="flex justify-center ">
    <div class="justify-center w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Ticket') }} 
        </h2>

    </x-slot>

    <form method="POST" action="{{ route('passenger.saveedit') }}">
        @csrf
        @method('POST')
        <!-- Name -->
        <input type="hidden" value="{{$ticket->id}}" name="ticket_id">
          
        <select name="seat" id="seat">

            <option value="" selected disabled>Choose Your Seat</option>
     
            @for ($x=1;$x<=48;$x++)
              
               <option value="{{$x}}" >{{$x}}</option>
            @endfor
            
        </select>

        <div class="flex items-center justify-end mt-4">
       

            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>
</x-conductor-layout>
