<?php

namespace App\Http\Controllers;

use App\Models\Penyimpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penyimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyimpanan = Penyimpanan::get();
        return view('penyimpanan', compact('penyimpanan'));
    }

    public function create()
    {
      return view('tambahPenyimpanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isian' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'moto_kerja' => 'required',
          ] ,[
            'isian.required' => 'Isian tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'no_hp.required' => 'Nomor Hp tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'moto_kerja.required' => 'Moto Kerja tidak boleh kosong',
          ]);

          Penyimpanan::create($request->all());
          return redirect()->route('penyimpanan.index')
            ->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $penyimpanan = Penyimpanan::findOrFail($id);

        //render view with post
        return view('ubahPenyimpanan', compact('penyimpanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'isian' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'moto_kerja' => 'required',
          ] ,[
            'isian.required' => 'Isian tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'no_hp.required' => 'Nomor Hp tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'moto_kerja.required' => 'Moto Kerja tidak boleh kosong',
          ]);

          $penyimpanan = Penyimpanan::findOrFail($id);
           //update product without image
           $penyimpanan->update([
            'isian' => $request->isian,
            'nama' => $request-> nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'moto_kerja' => $request->moto_kerja,
        ]);

        return redirect()->route('penyimpanan.index')->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penyimpanan::where('id',$id)->delete();
        return redirect()->route('penyimpanan.index')->with('success','Data berhasil dihapus!');
    }
}