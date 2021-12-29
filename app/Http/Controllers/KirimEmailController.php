<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Pesan;

class KirimEmailController extends Controller
{
    public function kirim(Request $request)
    {
        $details = [
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ];

        // dd($details);die;

        $pesan = new Pesan;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->pesan = $request->pesan;
        $pesan->save();

        Mail::to($request->email)->send(new MailSend($details));

        return redirect('/');
    }
}
