<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaApiController extends Controller
{
    public function showData(Request $request){
        $sortColumn = $request->query('sort', 'created_at');
        $mahasiswa = Mahasiswa::orderBy($sortColumn)->get();
        return response()->json(['message'=> 'Success', 'data' =>$mahasiswa]);
    }

    public function show($id){
        $mahasiswa = Mahasiswa::find($id);
        return response()->json(['message'=> 'Success', 'data' =>$mahasiswa]);
    }

    public function store(Request $request){

       $mahasiswa = new Mahasiswa();
       $mahasiswa->nama = $request->nama;
       $mahasiswa->nbi = $request->nbi;
       $mahasiswa->jurusan = $request->jurusan;
       $mahasiswa->tgl_lahir = date('Y-m-d', strtotime($request->tgl_lahir));
       $mahasiswa->alamat = $request->alamat;
       $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
       if ($request->hasFile('image')){
        $request->file('image')->move('public/image', $request->file('image')->getClientOriginalName());
        $mahasiswa->image = $request->file('image')->getClientOriginalName();
       }
       $mahasiswa->save();
       return response()->json(['statusCode'=>200, 'message'=> 'Success Create', 'data' => $mahasiswa]);
    }


    public function edit(Request $request, $id)
    {
    $mahasiswa = Mahasiswa::find($id);
    $mahasiswa->tgl_lahir = date('Y-m-d', strtotime($request->tgl_lahir));
    if ($request->hasFile('image')) {
        $imagePath = 'public/image';
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move($imagePath, $imageName);
        $mahasiswa->image = $imageName;
    }
    $mahasiswa->update($request->all());
    $mahasiswa->save();
    return response()->json(['statusCode' => 200, 'message' => 'Success Update', 'data' => $mahasiswa]);
}

    public function destroy($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return response()->json(['message'=> 'Success Deleted', 'data' =>null]);
    }
}
