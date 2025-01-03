<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $location = DB::table('locations')
        ->orderBy('name')
        ->get();

        return view('location.index', [
            'locations' => $location
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function add()
    {
        //
        return view('location.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        Location::create($validated);
        return redirect(route('locations.index', absolute: false))->with('message', 'Location created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   
     public function destroy(Location $location)
     {
         //
         $location->delete();
 
         return redirect(route('locations.index'))->with('message', 'Location deleted successfully!');
     }
 
}
