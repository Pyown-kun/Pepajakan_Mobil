<?php

namespace App\Http\Controllers;

use App\Models\perpanjangan450;
use Illuminate\Http\Request;

class perpanjanganController450 extends Controller
{
    public function tabel()
    {
        $perpanjangan = perpanjangan450::simplePaginate(2);
        return view('form.450.tabel450', compact('perpanjangan'));
    }

    public function perpanjangan()
    {
        return view('form.450.perpanjangan450');
    }

    public function tambah(Request $request)
    {
        $perpanjangan = new perpanjangan450();
        $perpanjangan->nama = $request->nama;
        $perpanjangan->alamat = $request->alamat;
        $perpanjangan->lama_perpanjangan = $request->lama_perpanjangan;
        $perpanjangan->tanggal = $request->tanggal;
        $perpanjangan->bunga = $request->bunga;
        $perpanjangan->save();

        return redirect()->intended('dashboard');
    }

    public function hapus($id)
    {
        $perpanjangan = perpanjangan450::find($id);
        $perpanjangan->delete();
        return redirect()->intended('tabel450');
    }
}
