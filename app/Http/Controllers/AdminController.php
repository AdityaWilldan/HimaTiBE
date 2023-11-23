<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    $posting = posting::all();
    return view('admin.index', compact(['posting']));
   }

   public function create(){
    return view('admin.create');
   }

   public function store(Request $request){
    posting::create($request->except(['_token','submit']));
    return redirect('/admin');
   }

   public function edit($id) {
    $posting = Posting::findOrFail($id);
    return view('admin.edit', compact('posting'));
}

public function update($id, Request $request){
    $posting = Posting::find($id);

    $data = $request->except(['_token','submit','_method']);

    $data['konten'] = substr($data['konten'], 1, 355);
    if($request->hasFile('gambar')){
        $gambar = $request->file('gambar');
        $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('images'), $gambarName);

        $data['gambar'] = $gambarName;
     }

     $posting->update($data);
     return redirect('/admin');
}

    public function destroy($id){
        $posting = Posting::find($id);
        $posting->delete();
        return redirect('/admin');
    }

}
