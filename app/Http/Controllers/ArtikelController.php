<?php

namespace App\Http\Controllers;

use App\Models\posting;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function artikel(){
        $artikel = posting::all();
        return view('user.gallery',compact(['artikel']));
    }

    public function update($id, Request $request){
        $posting = Posting::find($id);
    
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
