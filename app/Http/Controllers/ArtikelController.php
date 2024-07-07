<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function artikel(){
        $artikel = posting::all();
        return view('user.gallery',compact(['artikel']));
    }

    public function update($id, Request $request){
        // validasi untuk menghindari SQL INJECTION
        $request -> validate([
            'title' => 'required|string',
            'konten' => 'required|string',
            'admin' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

        $posting = posting::findOrFile($id);
    
        $data = $request->except(['_token','submit','_method']);
        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $gambarName);
    
            $data['gambar'] = $gambarName;
         }
    
         $posting->update($data);
         return redirect('/admin');
    }

    public function lengkap($id) {
        $posting = posting::findOrFail($id);
        return view('user.singlepost', compact('posting'));
    }
}
