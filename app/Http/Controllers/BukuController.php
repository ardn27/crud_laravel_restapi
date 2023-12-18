<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function store(Request $request){
        $buku = New Buku();
        $buku->judul = $request->judul;
        $buku->deskripsi = $request->deskripsi;

        if($request->hasFile('cover')){
            $request->file('cover')->move('public/image', $request->file('cover')->getClientOriginalName());
            $buku->cover = $request->file('cover')->getClientOriginalName();
        }
        $buku->save();
        return response()->json(['statusCode'=> 200, 'message'=>'success', 'data' => $buku]);
    }

    public function read(Request $request){
        $buku = Buku::all();
        return response()->json(['statusCode'=> 200, 'message'=>'success', 'data'=> $buku]);
    }

    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();

        return response()->json(['statusCode'=> 200, 'message'=>'success', 'data'=>null]);
    }
}
