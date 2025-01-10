<x-app-layout>
    <div class="flex items-center justify-center h-screen">
    <div class="justify-center w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Menu') }}
        </h2>

    </x-slot>
    <form method="POST" action="{{ route('menu.store') }}">
        @csrf
        @method('PUT')
        <!-- Name -->
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" class="block w-full mt-1" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" class="block w-full mt-1" type="text" name="price" :value="old('price')" required autofocus autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="category" :value="__('Category')" />
            <x-text-input id="category" class="block w-full mt-1" type="text" name="category" :value="old('category')" required autofocus autocomplete="category" />
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
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
