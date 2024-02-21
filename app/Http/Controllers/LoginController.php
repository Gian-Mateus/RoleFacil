<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/login/logar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::where('user_email', '=', $request->email)->first();
        if($user) {
            if(password_verify($request->password, $user->user_password)) {
                return $user;
            } else {
                echo "Senha errada";
            }
        } else {
            echo "Não existe usuário com esse email";            
        }
    }
}
