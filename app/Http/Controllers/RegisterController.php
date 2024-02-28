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
        return view('/admin/login/register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $api_key = "AIzaSyCFOe8jC0NWPr-qG-55j7II02ZhoBwfKLo";
        // $address_alterado = str_replace(" ", "+", $request->address);
        // $city_alterado = str_replace(" ", "+", $request->city);
        // $neighborhood_alterado = str_replace(" ", "+", $request->neighborhood);
        // $localidade = $address_alterado .'+'. $request->number_address .'+'. $city_alterado .'+'. $neighborhood_alterado;
        // $base_url = "https://maps.googleapis.com/maps/api/geocode/json?key={$api_key}&address={$localidade}&components=coutry%3ABR";
        // $response = json_decode(file_get_contents($base_url));
        // $caminho1 = $response->results;
        // $caminho2 = $caminho1[0];
        // $caminho3 = $caminho2->geometry;
        // $caminho4 = $caminho3->location;
        // $lat = $caminho4->lat;
        // $lng = $caminho4->lng;

        if(!(($request->password != $request->repeatpassword) OR (strlen($request->cnpj) != 14))) {
            $user = User::where('email', '=', $request->email)->first();
            if(!$user) {
                $user = User::where('user_cnpj', '=', $request->cnpj)->first();
                if(!$user) {
                    $user = new User;

                    $user->email = $request->email;
                    $user->password = bcrypt($request->password);
                    $user->user_name = $request->name;
                    $user->user_cnpj = $request->cnpj;
            
                    $user->save();

                    return redirect('login')->with('msg', 'Usuário registrado com sucesso!');                    
                } else {
                    return redirect('register')->with('msg', 'Usuário com esse cnpj já está cadastrado');
                }
            } else {
                return redirect('register')->with('msg', 'Usuário com esse email já existe no banco');
            }
        } else {
            return redirect('register')->with('msg', 'Deu pau');
        }
             // $user = new User;
    
            // $user->email = $request->email;
            // $user->password = bcrypt($request->password);
            // $user->user_name = $request->name;
            // $user->user_cnpj = $request->cnpj;
    
            // $user->save();
        //return redirect('login')->with('msg', 'Usuário registrado com sucesso!');
    }
}
