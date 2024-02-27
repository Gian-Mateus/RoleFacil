<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CliEstablishmentSeed;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('search');
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
        $establishments = CliEstablishmentSeed::where('cli_establishment_seed_city', 'like',  '%'.$request->search.'%')
        ->orWhere('cli_establishment_seed_categories', 'like', '%'.$request->search.'%')
            ->orWhere('cli_establishment_seed_name', 'like', '%'.$request->search.'%')
            ->orWhere('cli_establishment_seed_address_formatted', 'like', '%'.$request->search.'%')
            ->orWhere('cli_establishment_seed_neighborhood', 'like', '%'.$request->search.'%')
            ->get();
            
            return view('search', ['establishments' => $establishments]);
    }

        

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
