<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesan;
use Alert;

class PesanController extends Controller
{
    public function index(){
        $pesan = Pesan::all();
        return view('admin.pesan.index', compact('pesan'));
    }

    public function ubahStatus(Request $request, $id){
        $pesan = Pesan::find($id);
        $pesan->status = $request->status;
        $pesan->save();

        Alert::success('Success', 'Data Berhasil Di Ubah');
        return redirect('data_pesan');
    }
}
