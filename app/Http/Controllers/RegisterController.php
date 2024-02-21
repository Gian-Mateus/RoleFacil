<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/login/register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->user_email = $request->email;
        $user->user_password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->user_name = $request->name;
        $user->user_cnpj = $request->cnpj;
        $user->user_description = $request->description;
        $user->user_zipcode = $request->zipcode;
        $user->user_complement = $request->complement;
        $user->user_address = $request->address;
        $user->user_number_address = $request->number_address;
        $user->user_city = $request->city;
        $user->user_neighborhood = $request->neighborhood;
        $user->user_uf = $request->uf;
        $user->user_facebook_link = $request->facebook_link;
        $user->user_instagram_link = $request->instagram_link;
        $user->user_celular = $request->celular;
        $user->user_ddd_celular = $request->ddd_celular;
        $user->user_telefone_fixo = $request->telefone_fixo;
        $user->user_ddd_telefone_fixo = $request->ddd_telefone_fixo;

        $user->save();
        return redirect('login/logar')->with('success', 'Registro inserido com sucesso');
    }
}
