<x-user-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Food Orders') }}
        </h2>
        
        </div>
    </x-slot>

    <div class="p-3 mt-6 overflow-auto bg-white divide-y rounded-lg shadow-sm">
        <table  id="myTable2" class="display responsive nowrap " >

            <thead>
                <th>Passenger</th>
                <th>Food</th>
            </thead>
            @foreach ($food as $foods)
                <tr>
                    <td>{{$foods->user->name}}</td>        
                    <td>{{$foods->foodmenu->description}}
                   
                    </td>    
                        
                
                </tr>

            @endforeach
          
        </table>

    </div>
</div>
</x-user-layout>

<script>
$('#myTable2').DataTable( {
    responsive: true
} );

</script>
