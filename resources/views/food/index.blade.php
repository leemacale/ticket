<x-user-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Food Order') }}
        </h2>
        <x-bladewind::button  color="green" icon="check"  title="add" onclick="window.location='{{route('book.trip', $trip->id)}}'" >BACK</x-bladewind::button>
        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable" class="display compact text-m" >

            <thead>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th></th>
            </thead>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{$menu->description}}</td>        
                    <td>{{$menu->price}}</td>        
                    <td>{{$menu->category}}</td>        
                    <td>
                        <form method="POST" action="{{ route('food.add')}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="trip_id" id="trip_id" value="{{$trip->id}}">
                            <input type="hidden" name="food_id" id="food_id" value="{{$menu->id}}">
                        <x-bladewind::button  color="green" icon="check"  title="add" can_submit="true">ADD</x-bladewind::button>
                        </form>
                        </td>
                </tr>

            @endforeach
        </table>

       
    </div>
    <hr>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <b>MY ORDER</b>
        <table  id="myTable2" class="display responsive nowrap " >

            <thead>
                <th>Name</th>
                <th>Price</th>
                @php
                    $total = 0;
                @endphp
                <th></th>
            </thead>
            @foreach ($food as $foods)
                <tr>
                    <td>{{$foods->foodmenu->description}}</td>        
                    <td>{{$foods->foodmenu->price}}
                    @php
                        
                        $total += $foods->foodmenu->price;
                    @endphp    
                    </td>    
                    <td>
                        <form method="POST" action="{{ route('food.destroy', $foods->id) }}">
                            @csrf
                            @method('DELETE')
                            
                        <x-bladewind::button  color="red" icon="trash"  title="delete" can_submit="true">Remove</x-bladewind::button>
                        </form>
                        </td>          
                
                </tr>

            @endforeach
            <tr>
                <td>Total</td>      
                <td></td>  
                <td>{{$total}}</td>              
            
            </tr>
        </table>

    </div>
</div>
</x-user-layout>

<script>
$('#myTable2').DataTable( {
    responsive: true
} );

</script>
