<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd("ini halaman history");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('transaksi.create',compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "TransaksiName" => 'required|min:3',
            "Nominal" => 'required',
            "Type" => 'required',
            "Category" => 'required',
            "Date" => 'required',
        ]);

        // dd($request);

        Transaksi::insert([
            'Tanggal' => $request->Date,
            'IdKategori' => $request->Category,
            'Tipe' => $request->Type,
            'Jumlah' => $request->Nominal,
            'Judul' => $request->TransaksiName,
        ]);
        return redirect()->route("transaksi.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
