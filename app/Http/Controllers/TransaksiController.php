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
        $transaksi = Transaksi::join('kategori', 'kategori.KategoriID','=','transaksi.IdKategori')->get();    
        // query
        // "SELECT * FROM transaksi join kategori ON kategori.KategoriID = transaksi.IdKategori"    
        return view('History.index',compact('transaksi'));
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
    public function report()
    {
        $Pemasukan = Transaksi::where('Tipe','=','Pemasukan')->sum('Jumlah');
        $Pengeluaran = Transaksi::where('Tipe','=','Pengeluaran')->sum('Jumlah');
        $Balance = $Pemasukan - $Pengeluaran;

        return view('Report.index', compact('Balance','Pemasukan','Pengeluaran'));
        // dd($Pemasukan,$Pengeluaran, $Balance);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::find($id);
        $kategoris = Kategori::all();

        // dd($transaksi, $kategoris);
        return view('History.edit',compact('transaksi','kategoris')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Transaksi::where('TransaksiID',$id)->update([
            'Judul' => $request->TransaksiName,
            'Jumlah'=>$request->Nominal,
            'Tipe'=>$request->Type,
            'IdKategori'=>$request->Category,
            'Tanggal'=>$request->Date
        ]);
        return redirect()-> route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        try {
            Transaksi::where('TransaksiID',$id)->delete();
        } catch(\Exception $e){
            dd($e->getMessage());
            return $e->getMessage();
        }
        return redirect()->route('transaksi.index');
    }
}
