<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Alert;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function tambah(Request $request){
        // dd($request->all());

        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori = new Kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        Alert::success('Berhasil', 'Data Berhasil Di Tambahkan');
        return redirect('data_kategori');

        // $request->validate([
        //     'foto_kategori' =>'required|file|image|mimes:jpeg,png,jpg|max:128',
        //     'kategori' => 'required',
        //     'deskripsi' => 'required',
        // ]);

        // if ($request->hasFile('foto_kategori')) {
        //     $poto = $request->file('foto_kategori');
        //     $ext = $poto->getClientOriginalExtension();
        //     $potoName = $request->name . date('Ymd') . '.' .$ext;
        //     $path = public_path('img/');
        //     $poto->move($path, $potoName);
        // } else {
        //     $potoName = 'default.jpg';
        // }

        // $kategori = new Kategori;
        // $kategori->foto_kategori = $potoName;
        // $kategori->kategori = $request->kategori;
        // $kategori->deskripsi = $request->deskripsi;
        // $kategori->sattus = $request->status;
        // $kategori->save();
        
        // Alert::success('Succes', 'Data Berhasil Di Tambahkan');
        // return redirect('data_kategori');
    }
}
