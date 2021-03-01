<?php

namespace App\Http\Controllers;

use App\Models\Back;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackController extends Controller
{
    public function index(){
         $files = Back::all();
       return view("back", compact ("files")); 
    }
    public function create(){
        return view("pages.fichier");
    }
    public function store(Request $request){
        $store = new Back;
        $store ->src = $request->file("src")->hashName();
        $store ->save();
        Storage::put('public/img', $request->file('src'));
        return redirect()-> back();

    }
}
