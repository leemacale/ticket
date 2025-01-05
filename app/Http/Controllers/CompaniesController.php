<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $conductors = User::where('role', 'conductor')->get();
 
        return view('conductor_trips.conductor', [
            'conductors' => $conductors
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
}
