<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;

class PengirimanController extends Controller
{
    public function index()
    {
        $pengirimans = Pengiriman::all();
        return view('daftar_pengiriman', compact('pengirimans'));
    }

    public function create()
    {
        return view('kelola_daftar_pengiriman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required|string',
            'alamat_pengirim' => 'required|string',
            'nama_penerima' => 'required|string',
            'alamat_penerima' => 'required|string',
            'detail_barang' => 'required|string',
            'status' => 'required|string|in:pending,processing,shipped,delivered',
        ]);

        $no_resi = 'AE-' . mt_rand(1000, 9999) . '-' . mt_rand(1000, 9999);

        Pengiriman::create([
            'no_resi' => $no_resi,
            'nama_pengirim' => $request->nama_pengirim,
            'alamat_pengirim' => $request->alamat_pengirim,
            'nama_penerima' => $request->nama_penerima,
            'alamat_penerima' => $request->alamat_penerima,
            'detail_barang' => $request->detail_barang,
            'status' => $request->status,
        ]);

        return redirect()->route('pengiriman.index')->with('success', 'Data pengiriman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        return view('edit_pengiriman', compact('pengiriman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengirim' => 'required|string|max:255',
            'alamat_pengirim' => 'required|string',
            'nama_penerima' => 'required|string|max:255',
            'alamat_penerima' => 'required|string',
            'detail_barang' => 'required|string',
            'status' => 'required|string|in:pending,processing,shipped,delivered',
        ]);

        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->update($request->all());

        return redirect()->route('pengiriman.index')->with('success', 'Data pengiriman berhasil diperbarui.');
    }

    public function rekap()
    {
        $pengirimans = Pengiriman::orderBy('created_at', 'desc')->get();
        return view('rekap_pengiriman', compact('pengirimans'));
    }
}
