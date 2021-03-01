<?php

namespace App\Http\Controllers;

use App\Models\Back;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $doc = Back::all();
        return view("welcome", compact("doc"));
    }
}
