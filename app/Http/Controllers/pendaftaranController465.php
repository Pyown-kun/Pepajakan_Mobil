<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran465;
use Illuminate\Http\Request;

class pendaftaranController465 extends Controller
{
    public function tabel()
    {
        $pendaftaran = pendaftaran465::simplePaginate(2);
        return view('form.465.tabel465', compact('pendaftaran'));
    }

    public function pendaftaran()
    {
        return view('form.465.pendaftaran465');
    }

    public function tambah(Request $request)
    {
        $pendaftaran = new pendaftaran465();
        $pendaftaran->nama = $request->nama;
        $pendaftaran->nik = $request->nik;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->save();

        return redirect()->intended('dashboard');
    }

    public function hapus($id)
    {
        $pendaftaran = pendaftaran465::find($id);
        $pendaftaran->delete();
        return redirect()->intended('tabel465');
    }
}
