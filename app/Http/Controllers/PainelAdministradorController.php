<?php

namespace App\Http\Controllers;

use App\Models\PainelAdministrador;
use Illuminate\Http\Request;

class PainelAdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/painel-administrador');
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
    }

    /**
     * Display the specified resource.
     */
    public function show(PainelAdministrador $painelAdministrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PainelAdministrador $painelAdministrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PainelAdministrador $painelAdministrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PainelAdministrador $painelAdministrador)
    {
        //
    }
}
