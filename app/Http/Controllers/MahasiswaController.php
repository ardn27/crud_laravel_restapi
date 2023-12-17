<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http\Models\Mahasiswa;
use Illuminanate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function showData(Request $request){
        $data = Mahasiswa::all();
    }

    public function editData($id){

        $data = Mahasiswa::find($id);

        return view('edit');
    }

    public function store(Request $request){
        $data = new Mahasiswa();

        $data->nama = $request->nama;
        $data->nbi = $request->nbi;
        $data->jurusan = $request->jurusan;
        $data->save();

        return redirect('/index');
    }

    public function edit(Request $request){
        $data = Mahasiswa::findOrFail($request->id);

        $data->nama = $request->nama;
        $data->nbi = $request->nbi;
        $data->jurusan = $request->jurusan;

        $data->save();
        return redirect('/edit');
    }

    public function destroy(){
        $data = Mahasiwa::find($id);
        $data->delete();

        return view('/index');
    }

    public function handle(Request $request, Closure $next): Response
    {
        return Auth::onceBasic() ?: $next($request);
    }
}
