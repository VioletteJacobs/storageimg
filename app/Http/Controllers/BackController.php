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
    public function destroy($id){
        $destroy = Back::find($id);
        Storage::delete('public/img/'.$destroy->src);
        $destroy->delete();
        return redirect()->back();
    }
    public function edit($id){
        $edit = Back::find($id);
        return view("edit.blade.php");

    }
    public function update(Request $request, $id){
        $validate=$request->validate([
            "src"=> "required|min:1|max:500"
        ]);
        $update = Back::find($id);
        Storage::delete('public/img/'.$update->src);
        $update->src = $request->file("src")->hashName();
        $update->save();
        Storage::put('public/img/'.$update->src);
        return redirect('/');


    }
    public function download($id){
        $down = Back::find($id);
        return Storage::download('public/img/'.$down->src);
    }
}
