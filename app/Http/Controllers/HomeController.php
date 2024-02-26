<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // $users = User::all();
        // return view('home')->with('users', json_decode($users, true));
        
        $json = file_get_contents('../details_places/db_addressAlter.json');
        $data = json_decode($json, true);
        $users = $data["results"];
        // $folder_images = preg_replace('/[^a-zA-Z0-9]/', '_', $input);

        // Random Establishment
        $establishment = [];
        for( $i = 0 ; $i < 10; $i++ ){
            array_push($establishment , $users[rand(0, count($users)-1)]);
        }

        // Filter Bakerys (padarias)
        $bakery = [];
        foreach($users as $user){
            if(in_array("bakery", $user["types"])){
                array_push($bakery,$user);
            }
        }

        // Filter Restaurants 
        $restaurants = [];
        foreach($users as $user){
            if(in_array("restaurant", $user["types"])){
                array_push($restaurants,$user);
            }
        }

        // Filter Bar 
        $bar = [];
        foreach($users as $user){
            if(in_array("bar", $user["types"])){
                array_push($bar,$user);
            }
        }

        return view('home', [
            'users' => $users,
            'establishment' => $establishment,
            'bakery' => $bakery,
            'restaurants' => $restaurants,
            'bar' => $bar,
        ]);
    }
}
