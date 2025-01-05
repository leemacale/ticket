<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\BusPosition;
use App\Models\BusStatus;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    public function index2()
    {
        //
        $comp_id = Auth::user()->company;
        $trip = Trip::where('company_id', $comp_id)
        ->get();
   

        return view('conductor_trips.index', [
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

    public function store_loc(Request $request)
    {
        //
       
    } 


    public function search(Request $request)
    {
        //
        $trips = Trip::where('start', $request->from)
        ->where('destination', $request->to)
        ->where('date', $request->tripdate)
        ->get();
        $location = DB::table('locations')
        ->orderBy('name')
        ->get();

        return view('search_results',
        ['trips'=>$trips,
        'locations' => $location
    ]);
       
    } 
    public function results(Trip $trips)
    {
        //
        $location = DB::table('locations')
        ->orderBy('name')
        ->get();
        dd($trips);
        return view('search_results',
        ['trips'=>$trips,
        'locations' => $location
    ]);
       
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

    
    public function add_loc(Trip $trip)
    {
        //

        return view('conductor_trips.pos',
        ['trip'=>$trip
    ]);
    }
    public function bus_status(Trip $trip)
    {
        //

        $bus_status = BusStatus::where('trip_id', $trip->id)->latest('id')->first();

        return view('conductor_trips.add',
        ['trip'=>$trip,
        'bus_status'=>$bus_status
    ]);
    }

    public function bus_confirm(Trip $trip)
    {
        //
        $currenttime = date("h:i:sa");
        $conductorid = Auth::user()->id;

        BusStatus::create([
            'status'=>'In Transit',
            'departure'=> $currenttime,
            'trip_id'=>$trip->id,
            'conductor_id'=>$conductorid,
        ]);

        $bus_status = BusStatus::where('trip_id', $trip->id)->latest('id')->first();

        return view('conductor_trips.add',
        ['trip'=>$trip,
        'bus_status'=>$bus_status
    ]);
    }
    public function bus_arrival(Trip $trip)
    {
        //
        $currenttime = date("h:i:sa");
        $conductorid = Auth::user()->id;

        BusStatus::where('trip_id', $trip->id)
        ->update([
            'status'=>'Arrived at Destination',
            'arrival'=> $currenttime,
        ]);

        $bus_status = BusStatus::where('trip_id', $trip->id)->latest('id')->first();

        return view('conductor_trips.add',
        ['trip'=>$trip,
        'bus_status'=>$bus_status
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    public function loc(Trip $trip)
    {
        //
        $busposition = BusPosition::where('trip_id', $trip->id)->latest('id')->first();
        return view('trip.position',[
            'busposition' => $busposition,
            'trip' => $trip
        ]);
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
