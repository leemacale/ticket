<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $trip = Trip::orderBy('id')
        ->get();
   

        return view('trip.index', [
            'trips' => $trip
            

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([
            'start' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'max:255'],
            'time' => ['required', 'string', 'max:255'],
            'company_id' => ['required'],
            'bus' => ['required', 'string', 'max:255'],
        ]);
        Trip::create($validated);
        return redirect(route('trips.index', absolute: false))->with('message', 'Trip created successfully!');
    } 
    public function add()
    {
        //

        $location = DB::table('locations')
        ->orderBy('name')
        ->get();

        $company = DB::table('companies')
        ->orderBy('name')
        ->get();

        return view('trip.add',
        ['locations' => $location,
        'company' => $company
    ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        //
        $trip->delete();
 
        return redirect(route('trips.index'))->with('message', 'Trip deleted successfully!');
    }
}
