<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Kasir::all();
        return view('kasir.index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir.create');
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
            'nama_pelanggan'=>'required',
            'nama_menu'=>'required',
            'total_harga'=>'required',
            'nama_pegawai'=>'required'
        ]);

        Kasir::create($request->all());
        return redirect()->route('kasir.index')
                        ->with('success','Berhasil Menyimpan !');
        // return "asdfasdfdaf";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function show(Kasir $kasir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function edit(Kasir $kasir)
    {

        return view('kasir.edit',compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasir $kasir)
    { 
        $request->validate([
            'nama'=>'required',
            'username'=>'required',
            'password'=>'required',
            'role'=>'required'
        ]);

        $kasir->update($request->all());
        return redirect()->route('kasir.index')
                        ->with('success','Berhasil Update !');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasir $kasir)
    {
        $kasir->delete();

        return redirect()->route('kasir.index')
                        ->with('success','Berhasil Hapus !');
    }
}
