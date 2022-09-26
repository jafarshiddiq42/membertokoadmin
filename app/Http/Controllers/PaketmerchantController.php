<?php

namespace App\Http\Controllers;

use App\Models\Paketmerchant;
use Illuminate\Http\Request;

class PaketmerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paketmerchants = Paketmerchant::all();
        return view('menuadmin.paketmerchant.index',compact('paketmerchants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menuadmin.paketmerchant.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paketmerchants = new Paketmerchant();
        $paketmerchants->namapaket = $request->namapaket;
        $paketmerchants->harga = $request->harga;
        $paketmerchants->durasi = $request->durasi;
        $paketmerchants->gambar = '-';
        $paketmerchants->keterangan = $request->keterangan;
        $paketmerchants->aktif = ($request->status=='on'?1:2);
        $paketmerchants->save();
        return redirect('/paketmerchant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paketmerchant = Paketmerchant::find($id);
        return view('menuadmin.paketmerchant.edit',compact('paketmerchant'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paketmerchants =  Paketmerchant::find($id);
        $paketmerchants->namapaket = $request->namapaket;
        $paketmerchants->harga = $request->harga;
        $paketmerchants->durasi = $request->durasi;
        $paketmerchants->gambar = '-';
        $paketmerchants->keterangan = $request->keterangan;
        $paketmerchants->aktif = ($request->status=='on'?1:2);
        $paketmerchants->save();
        return redirect('/paketmerchant');
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $paketmerchants = Paketmerchant::find($request->id);
        $paketmerchants->delete();
        return redirect()->back();
    }
    public function updatestatus(Request $request)
    {
        $paketmerchants = Paketmerchant::find($request->statusid);
        $paketmerchants->aktif = ($request->status=='on'?1:0); 
        $paketmerchants->save();
        return redirect()->back();
         
    }
}
