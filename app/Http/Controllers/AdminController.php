<?php

namespace App\Http\Controllers;

use App\Models\posting;
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
    $data = $request->except(['_token', 'submit']);
    $this->handleImageUpload($request, $data);
    posting::create($data);

    return redirect('/admin');
   }

   public function edit($id) {
    $posting = posting::findOrFail($id);
    return view('admin.edit', compact('posting'));
}

public function update($id, Request $request){
 // validasi untuk menghindari SQL INJECTION
 $request -> validate([
    'title' => 'required|string',
    'konten' => 'required|string',
    'admin' => 'required|string',
    'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
]);

    $posting = posting::find($id);

    $data = $request->except(['_token', 'submit', '_method']);
    $this->handleImageUpload($request, $data);

    // $data['konten'] = substr($data['konten'], 0, 499);

    $posting->update($data);
     return redirect('/admin');
}

private function handleImageUpload(Request $request, array &$data)
    {
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            // Memeriksa dan membersihkan nama file gambar
            $gambarName = $this->sanitizeFileName($gambar->getClientOriginalName());

            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $gambarName);

            $data['gambar'] = $gambarName;
        }
    }

    // SQL INJECTION handle
    private function sanitizeFileName($fileName)
    {
        // Membersihkan nama file dari karakter yang tidak diinginkan
        $fileName = preg_replace("/[^a-zA-Z0-9.]/", "", $fileName);
        return $fileName;
    }

    public function destroy($id){
        $posting = posting::find($id);
        $this->deleteImage($posting->gambar);
        $posting->delete();
        return redirect('/admin');
    }

    private function deleteImage($imagePath){
        $imagePath = public_path('images') . '/' .$imagePath;

        if(file_exists($imagePath)){
            unlink($imagePath);
        }
    }
}
