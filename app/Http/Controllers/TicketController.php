<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Trip;
use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\get;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user_id = Auth::user()->id;
        $tickets = ticket::where('user_id', $user_id)->get();
        
        return view('booking.trips',
        ['tickets'=>$tickets
    ]);

    }

    public function admin()
    {
        //

   
        $tickets = ticket::orderBy('user_id')->get();
        
        return view('booking.adminview',
        ['trips'=>$tickets
    ]);

    }
    
    public function conductor(Trip $trip)
    {
        //
        $tickets = ticket::where('trip_id', $trip->id)->get();
        
        return view('booking.conductorview',
        ['trips'=>$tickets
    ]);

    }
    public function booking(Trip $trip)
    {
        //
        $seats = DB::table('tickets')->where('trip_id', $trip->id)->get();
        $food = Food::where('trip_id', $trip->id)->where('user_id' , Auth::user()->id)->get();

        return view('booking.index',
        ['trips'=>$trip,
        'foods'=>$food,
        'seats'=>$seats
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

        $user_id = Auth::user()->id;

        //
        $validated = $request->validate([
            'seat' => ['max:255'],
            'trip_id' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'string', 'max:255'],
           
        ]);
        ticket::create([
            'seat'=>$request->seat,
            'trip_id'=>$request->trip_id,
            'user_id'=>$user_id,
            'price'=>$request->amount,
        ]);
        return redirect(route('tickets.index', absolute: false))->with('message', 'Trip Booked successfully!');
    } 
    /**
     * Display the specified resource.
     */
    public function views(ticket $ticket)
    {
        //
    
        $tickets = ticket::where('id', $ticket->id)->first();
        
        return view('booking.viewbook',
        ['tickets'=>$tickets
    ]);
    }
  


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticket $ticket)
    {
        //
        $ticket->delete();
 
        return redirect(route('tickets.index'))->with('message', 'Ticket Cancelled successfully!');
    }
}
