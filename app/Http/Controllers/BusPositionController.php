<?php

namespace App\Http\Controllers;

use App\Models\BusPosition;
use Illuminate\Http\Request;

class BusPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
         $validated = $request->validate([
            
            'trip' => [ 'max:255'],
            'long' => [ 'string', 'max:255'],
            'lat' => ['string', 'max:255']
        ]);
        BusPosition::create([
            'trip_id'=>$request->trip,
            'long'=>$request->long,
            'lat'=>$request->lat,
        ]);
        return redirect(route('trips.add_loc', $request->trip));
    }

    /**
     * Display the specified resource.
     */
    public function show(BusPosition $busPosition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusPosition $busPosition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusPosition $busPosition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusPosition $busPosition)
    {
        //
    }
}
