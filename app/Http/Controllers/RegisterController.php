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
        $api_key = "AIzaSyCFOe8jC0NWPr-qG-55j7II02ZhoBwfKLo";
        $address_alterado = str_replace(" ", "+", $request->address);
        $city_alterado = str_replace(" ", "+", $request->city);
        $neighborhood_alterado = str_replace(" ", "+", $request->neighborhood);
        $localidade = $address_alterado .'+'. $request->number_address .'+'. $city_alterado .'+'. $neighborhood_alterado;
        $base_url = "https://maps.googleapis.com/maps/api/geocode/json?key={$api_key}&address={$localidade}&components=coutry%3ABR";
        $response = json_decode(file_get_contents($base_url));
        $caminho1 = $response->results;
        $caminho2 = $caminho1[0];
        $caminho3 = $caminho2->geometry;
        $caminho4 = $caminho3->location;
        $lat = $caminho4->lat;
        $lng = $caminho4->lng;

        $user = new User;

        $user->email = $request->email;
        $user->password = bcrypt($request->password);
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
        $user->user_latitude = $lat;
        $user->user_longitude = $lng;
        $user->user_facebook_link = $request->facebook_link;
        $user->user_instagram_link = $request->instagram_link;
        $user->user_celular = $request->celular;
        $user->user_telefone_fixo = $request->telefone_fixo;

        $user->save();
        return redirect('login')->with('msg', 'Usuário registrado com sucesso!');
    }
}
