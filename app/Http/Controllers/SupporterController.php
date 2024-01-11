<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supporter;

class SupporterController extends Controller
{
    public function read(Request $request)
    {
        $support = Supporter::all();

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>$support]);
    }

    public function readById($id)
    {
        $support = Supporter::find($id);

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>$support]);
    }

    public function store(Request $request)
    {
        $support = new Supporter;
        $support->id_supporter = $request->id_supporter;
        $support->nama = $request->nama;
        $support->alamat = $request->alamat;
        $support->tgl_daftar = date('Y-m-d', strtotime($request->tgl_daftar));
        $support->no_telepon = $request->no_telepon;
        if($request->hasFile('foto')){
            $request->file('foto')->move('public/Supporter', $request->file('foto')->getClientOriginalName());
            $support->foto = $request->file('foto')->getClientOriginalName();
        }
        $support->save();

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>$support]);
    }

    public function update(Request $request, $id)
    {
        $support = Supporter::find($id);
        $support->id_supporter = $request->id_supporter;
        $support->nama = $request->nama;
        $support->alamat = $request->alamat;
        $support->tgl_daftar = date('Y-m-d', strtotime($request->tgl_daftar));
        $support->no_telepon = $request->no_telepon;
        if($request->hasFile('foto')){
            $request->file('foto')->move('public/supporter', $request->file('foto')->getClientOriginalName());
            $support->foto = $request->file('foto')->getClientOriginalName();
        }
        $support->update($request->all());
        $support->save();

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>$support]);
    }
    public function destroy($id)
    {
        $support = Supporter::find($id);
        $support->delete();

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>null]);
    }
}
