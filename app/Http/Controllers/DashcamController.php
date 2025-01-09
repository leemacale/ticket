<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Dashcam;
use Illuminate\Http\Request;

class DashcamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $dashcam = Dashcam::orderBy('trip_id')->get();

        return view('dashcam.index', [
            'dashcams' => $dashcam
        ]);
    }
    public function add(Trip $trip)
    {
        //
        return view('dashcam.add', ['trip'=>$trip]);

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

        $imageName = time().'.'.$request->filepath->extension();
        $request->filepath->move(public_path('uploads'), $imageName);

        Dashcam::create([
            'trip_id' => $request->trip_id,
            'filepath' => 'uploads/'.$imageName


        ]);
        return redirect(route('trips.index2', absolute: false))->with('message', 'Dashcam Footage created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashcam $dashcam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashcam $dashcam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashcam $dashcam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashcam $dashcam)
    {
        //
    }
}
