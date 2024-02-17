<?php

namespace App\Http\Controllers;

use App\Models\PainelAdm;
use Illuminate\Http\Request;

class PainelAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $dados = [
                'id' => '01',
                'nome' => 'Dudu, dudu e Edu',
                'email' => 'teste@correios.com.br'
                // Outros dados que você queira passar para a view
            ];

            return view('admin.paineladm', compact('dados'));


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
    public function show(PainelAdm $painelAdm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PainelAdm $painelAdm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PainelAdm $painelAdm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PainelAdm $painelAdm)
    {
        //
    }
}
