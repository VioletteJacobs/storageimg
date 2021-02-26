<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackController extends Controller
{
    public function index(){
       return view("back"); 
    }
    public function create(){
        return view("pages.fichier");
    }
    public function store(Request $request){
        Storage::put('public/img', $request->file('image'));

    }
}
