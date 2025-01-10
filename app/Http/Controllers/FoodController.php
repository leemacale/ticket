<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Menu;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Trip $trips)
    {
        //$incident = Incident::orderBy('trip_id')->get();
        $menu = Menu::orderBy('category')
        ->get();

       
        $food = Food::where('trip_id', $trips->id)
        ->where('user_id', Auth::user()->id)
        ->get();


        return view('food.index', [
            'menus' => $menu,
            'trip' => $trips,
            'food' => $food
        ]);
    }
    public function foodorders(Trip $trips)
    {
        //$incident = Incident::orderBy('trip_id')->get();

        
        $food = Food::where('trip_id', $trips->id)
        ->get();


        return view('food.foods', [
            
            'trip' => $trips,
            'food' => $food
        ]);
    }
    public function index2()
    {
        //$incident = Incident::orderBy('trip_id')->get();

        return view('food.index2');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function add(Request $request)
    {
        //

        Food::create([
            'user_id' => Auth::user()->id,
            'trip_id' => $request->trip_id,
            'food_id' => $request->food_id
        ]);
        return redirect(route('food.index', $request->trip_id))->with('message', 'Food added successfully!');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $foods)
    {
        //
        $foods->delete();
 
        
    }
}
