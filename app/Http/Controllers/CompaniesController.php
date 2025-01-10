<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $companies = DB::table('companies')
        ->orderBy('name')
        ->get();

        return view('company.index', [
            'companies' => $companies
        ]);
    }

    public function conductor()
    {
        //

        if(Auth::user()->role == 'terminal'){
            $conductors = User::where('role', 'conductor')->where('company', Auth::user()->company)->get();
        }
        else{
            $conductors = User::where('role', 'conductor')->get();
        }
       
 
        return view('conductor_trips.conductor', [
            'conductors' => $conductors
        ]);
    }

    public function passenger()
    {
        //
        $passengers = User::where('role', 'user')->get();
 
        return view('conductor_trips.passenger', [
            'passengers' => $passengers
        ]);
    }
    public function approve(User $conductor)
    {
        //
        User::where('id', $conductor->id)->update(['status'=>'approved']);
        
        $conductors = User::where('role', 'conductor')->get();
        return view('conductor_trips.conductor', [
            'conductors' => $conductors
        ]);
    }

    public function approvepassenger(User $passenger)
    {
        //
        User::where('id', $passenger->id)->update(['status'=>'approved']);
        
        $passengers = User::where('role', 'user')->get();
 
        return view('conductor_trips.passenger', [
            'passengers' => $passengers
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
        return view('company.add');
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        Companies::create($validated);
        return redirect(route('company.index', absolute: false))->with('message', 'Company created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Companies $companies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Companies $companies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Companies $company)
    {
        //
        $company->delete();
 
        return redirect(route('company.index'))->with('message', 'Company deleted successfully!');
    }

    public function destroy2(User $conductor)
    {
        //
    
 
        $conductor->delete();
 
        return redirect(route('conductors.index'))->with('message', 'Conductor deleted successfully!');
    }
    public function destroypassenger(User $passenger)
    {
        //
    
 
        $passenger->delete();
 
        return redirect(route('passenger.index'))->with('message', 'Passenger deleted successfully!');
    }
}
