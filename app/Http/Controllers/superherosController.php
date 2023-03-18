<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\superheros;

class superherosController extends Controller
{
    public function index(){
        $page_title = "Super Heros";

        $superheros = superheros::all();

       // $men = superheros::where('gender', '=', 'Male')->get();

        return view('herosView', compact('page_title', 'superheros'));
    }

    public function indexw(){
        $page_title = "Super Heros Only Famale";

        $superheros = superheros::where('gender', '=', 'Famale');

        return view('herosViewW', compact('page_title', 'superheros', 'women'));
    }

    public function indexm(){
        $page_title = "Super Heros Only Male";

        $superheros = superheros::where('gender', '=', 'Male');

        return view('herosViewM', compact('page_title', 'superheros', 'men'));
    }

}
