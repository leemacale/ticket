<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Trip;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $incident = Incident::orderBy('trip_id')->get();

        return view('incident.index', [
            'incidents' => $incident
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Trip $trip)
    {
        //
        return view('incident.add', ['trip'=>$trip]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $imageName = time().'.'.$request->filepath->extension();
        $request->filepath->move(public_path('uploads'), $imageName);
       
        Incident::create([
            'trip_id' => $request->trip_id,
            'location' => $request->location,
            'description' => $request->description,
          'filepath' => 'uploads/'.$imageName


        ]);
        return redirect(route('trips.index2', absolute: false))->with('message', 'Incident created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Incident $incident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incident $incident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incident $incident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incident $incident)
    {
        //
    }
}
