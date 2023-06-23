<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index',compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 
            "CategoryName" => 'required|min:3|max:20'
        ]);

        Kategori::insert([
            'namaKategori' => $request->CategoryName
        ]);

        return redirect()->route('kategori.index');
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
        // $kategori = Kategori::where('KategoriID',$id)->first();
        // $kategori = DB::statement('insert from kategori values('insert from kategori value.....')');
        $kategori = Kategori::find($id);
        return view('kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kategori::where('KategoriID',$id)->update([
            'namaKategori' => $request->CategoryName
        ]);

        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Kategori::where('KategoriID',$id)->delete();
        } catch(\Exception $e){
            dd($e->getMessage());
            return $e->getMessage();
        }
        return redirect()->route('kategori.index');
    }
}