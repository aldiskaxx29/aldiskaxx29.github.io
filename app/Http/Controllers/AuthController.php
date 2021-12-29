<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        // dd($request->all());

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // if (Auth::user()->status == 1) {
                Alert::success('Success', 'Welcome Admin');
                return redirect('dashboard-admin');
            // } else {
            //     Alert::error('Gagal', 'Akun belum di aktifkan');
            //     return redirect('admin-loginin');
            // }
        } else {
            Alert::error('Gagal', 'Email Atau Password Salah');
            return redirect('admin-loginin');
        }   
    }

    public function logout(Request $requst){
        Auth::logout();
        Alert::success('Success','Anda Berhasil Logout');
        return redirect('/admin-loginin');
    }
}
