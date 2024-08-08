<?php

namespace App\Http\Controllers;

use App\Models\pembayaran443;
use Illuminate\Http\Request;

class pembayaranController443 extends Controller
{
    public function tabel()
    {
        $pembayaran = pembayaran443::simplePaginate(2);
        return view('form.443.tabel443', compact('pembayaran'));
    }

    public function pembayaran()
    {
        return view('form.443.pembayaran443');
    }

    public function tambah(Request $request)
    {
        $pembayaran = new pembayaran443();
        $pembayaran->nama = $request->nama;
        $pembayaran->plat_nomor = $request->plat_nomor;
        $pembayaran->jenis_kendaran = $request->jenis_kendaran;
        $pembayaran->tanggal_pembayaran = $request->tanggal_pembayaran;
        $pembayaran->total_harga = $request->total_harga;
        $pembayaran->save();

        return redirect()->intended('dashboard');
    }

    public function hapus($id)
    {
        $pembayaran = pembayaran443::find($id);
        $pembayaran->delete();
        return redirect()->intended('tabel443');
    }
}
