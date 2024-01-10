<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Klub;

class KlubController extends Controller
{
    public function read(Request $request)
    {
        $klub = Klub::all();
        return response()->json(['statusCode'=> 200, 'message'=> 'success', 'data'=> $klub]);
    }

    public function readById($id)
    {
        $klub = Klub::find($id);
        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>$klub]);
    }

    public function store(Request $request)
    {
        $klub = new Klub;
        $klub->id_klub = $request->id_klub;
        $klub->nama_klub = $request->nama_klub;
        $klub->tgl_berdiri = date('Y-m-d', strtotime($request->tgl_berdiri));
        $klub->kondisi_klub = $request->kondisi_klub;
        $klub->kota_klub = $request->kota_klub;
        $klub->peringkat = $request->peringkat;
        $klub->harga_klub = $request->harga_klub;
        $klub->save();

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>$klub]);
    }

    public function update(Request $request, $id)
    {
        $klub = Klub::find($id);
        $klub->update($request->all());
        $klub->save();

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=>$klub]);
    }

    public function destroy($id)
    {
        $klub = Klub::find($id);
        $klub->delete();

        return response()->json(['statusCode'=>200, 'message'=>'success', 'data'=> null]);
    }
}
