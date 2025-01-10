<x-app-layout>
    <div class="px-8 overflow-x-auto">
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Menu') }}
        </h2>
        <x-bladewind::button color="green" icon="plus"
            onclick="window.location='{{ route('menu.add') }}'">Add</x-bladewind::button>
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
                        <form method="POST" action="{{ route('menu.destroy', $menu->id) }}">
                            @csrf
                            @method('DELETE')
                            
                        <x-bladewind::button  color="red" icon="trash"  title="delete" can_submit="true">DELETE</x-bladewind::button>
                        </form>
                        </td>
                </tr>

            @endforeach
        </table>

       
    </div>
</div>
</x-app-layout>
