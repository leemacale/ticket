<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
            body {
                background-color: black !important;
            }
        </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>   
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
 
    <body class="font-sans antialiased text-gray-900">
      
        @if (session()->has('message'))
        <x-bladewind::alert type="success">
            {{ session()->get('message') }}
        </x-bladewind::alert>
    @endif
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
           

            <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
                <a href="/">
                    <h1 class="text-3xl font-bold text-center text-black">
                        <span class="text-red-600">TICKETWISE</span> BUS
                    </h1>
                    <hr><br>
                </a>
                
                {{ $slot }}
            </div>
        </div>
    
    </body>
    <script type="text/javascript">

        $(document).ready(function() {
            $('#myTable').DataTable(
                
                 {     
        
              "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
               } 
                );
        } );
        
        
        </script>
    </html>
    