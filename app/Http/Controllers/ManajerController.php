<?php

namespace App\Http\Controllers;

use App\Models\Manajer;
use App\Models\Kasir;
use Illuminate\Http\Request;

class ManajerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Manajer::all();
        return view('manajer.index',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manajer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_menu'=>'required',
            'harga'=>'required',
            'deskripsi'=>'required',
            'ketersediaan'=>'required'
        ]);

        Manajer::create($request->all());
        return redirect()->route('manajer.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manajer  $manajer
     * @return \Illuminate\Http\Response
     */
    public function show(Manajer $manajer)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manajer  $manajer
     * @return \Illuminate\Http\Response
     */
    public function edit(Manajer $manajer)
    {
        return view('manajer.edit',compact('manajer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manajer  $manajer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manajer $manajer)
    {
        $request->validate([
            'nama_menu'=>'required',
            'harga'=>'required',
            'deskripsi'=>'required',
            'ketersediaan'=>'required'
        ]);

        $manajer->update($request->all());
        return redirect()->route('manajer.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manajer  $manajer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manajer $manajer)
    {
        $manajer->delete();

        return redirect()->route('manajer.index')
                        ->with('success','Berhasil Hapus !');
    }
    public function laporan(){
        $transaksi = Kasir::all();
        return view('manajer.show',compact('transaksi'));
    }
}
