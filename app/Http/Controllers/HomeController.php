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
        return view('home', [
            'users' => $users
        ]);
    }
}
