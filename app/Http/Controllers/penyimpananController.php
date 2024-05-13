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
        $penyimpanan = DB::table('penyimpanan')->get();
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
          ]);
          DB::table('penyimpanan')->create($request->all());
          return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
