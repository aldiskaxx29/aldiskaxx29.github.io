<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.users.index', compact('user'));
    }

    public function tambah(Request $request){
        // dd($request->all());

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|same:konfirmasipassword',
            'konfirmasipassword' => 'required|min:6|same:password'
        ]);

        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        Alert::success('Success', 'Data berhsail di tambahkan');
        return redirect('users');
    }
}
