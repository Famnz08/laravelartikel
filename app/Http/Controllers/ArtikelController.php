<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\isi;
use DB;
class ArtikelController extends Controller
{
    public function artikel(){
        $artikel=Artikel::all();
        return view('artikel/artikel',compact(['artikel']));
    }
    public function create(){

        return view('artikel/tambah');
    }
    public function store(Request $request){
        
        $artikel=Artikel::create([
            'id_artikel' => $request->id_artikel,
            'nama_artikel' => $request->nama_artikel,
            'kategori'=> $request->kategori
        ]);

        $isi=Isi::create([
            'artikel' => $request->artikel          
        ]);
        return redirect('artikel');
    }
    
    public function berita(){
        return view('index');
    }
    public function edit($id){
        $artikel = Artikel::find($id);
        return view('artikel/edit',compact(['artikel']));
    }public function update($id, request $request){
        $artikel = Artikel::find($id);
        $artikel->update($request->except('_token','Edit'));
        return redirect('artikel');
    }
            public function destroy($id){
        $artikel= Artikel::find($id);
        $artikel->delete();
        return redirect('artikel');
    }

}
