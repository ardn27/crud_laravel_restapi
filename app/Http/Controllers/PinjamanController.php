<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Pinjaman;
use App\Models\Buku;

class PinjamanController extends Controller
{
    public function show(Request $request)
    {
        $pinjaman = Pinjaman::with('mahasiswa', 'buku')->get();
        return response()->json(['statusCode'=> 200, 'message'=>'success', 'data'=> $pinjaman ]);
    }

    public function showDetail($id)
    {
        $pinjaman = Pinjaman::with('mahasiswa', 'buku')->find($id);

        if (!$pinjaman) {
            return response()->json(['statusCode' => 404, 'message' => 'Pinjaman not found'], 404);
        }

        return response()->json(['statusCode' => 200, 'message' => 'success', 'data' => $pinjaman]);
    }


    public function create(Request $request)
    {
        $pinjaman = new Pinjaman();
        $pinjaman->mahasiswa_id = $request->mahasiswa_id;
        $pinjaman->buku_id = $request->buku_id;
        $pinjaman->tgl_pinjam = date('Y-m-d', strtotime($request->tgl_pinjam));
        $pinjaman->kondisi = $request->kondisi;
        $pinjaman->save();
        return response()->json(['statusCode'=> 200, 'message'=> 'success', 'data'=>$pinjaman]);
    }

    public function update(Request $request, $id)
    {
        $pinjaman = Pinjaman::find($id);
        $pinjaman->mahasiswa_id = $request->mahasiswa_id;
        $pinjaman->buku_id = $request->buku_id;
        $pinjaman->tgl_pinjam = date('Y-m-d', strtotime($request->tgl_pinjam));
        $pinjaman->kondisi = $request->kondisi;
        $pinjaman->update($request->all());
        return response()->json(['statusCode'=> 200, 'message'=> 'success', 'data'=>$pinjaman]);
    }

    public function delete($id)
    {
        $pinjaman = Pinjaman::find($id);
        $pinjaman->delete();

        return response()->json(['statusCode'=> 200, 'message'=>'success', 'data'=>null]);
    }
}
