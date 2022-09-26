<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{   
    // halaman index kategori
    public function index()
    {
        $kategoris = Kategori::where('kategori', 'like', '%%')->get();

        return view('menuadmin.kategori.index',compact('kategoris'));
    }
   
    // edit data
    public function edit($id)
    {
       $kategori = Kategori::find($id);
       return view('menuadmin.kategori.edit',compact('kategori'));
    }
    // tambah data 
    public function tambah()
    {
       return view('menuadmin.kategori.tambah');
    }

    public function update(Request $request ,$id)
    {
        $kategori = Kategori::find($id);
        $kategori->kategori = $request->kategori ;
        $kategori->keterangan = $request->keterangan; 
        $kategori->aktif = ($request->status=='on'?1:0); 
        $kategori->save();
        return redirect()->back();
        // dd($request->all());
    }
    public function updatestatus(Request $request )
    {
        $kategori = Kategori::find($request->statusid);
        
        $kategori->aktif = ($request->status=='on'?1:0); 
        $kategori->save();
        return redirect()->back();
        // dd($request->all());
    }
    public function baru(Request $request)
    {
        $kategori = new Kategori();
        $kategori->kategori = $request->kategori ;
        $kategori->keterangan = $request->keterangan; 
        $kategori->aktif = ($request->status=='on'?1:0); 
        $kategori->gambar = ''; 
        $kategori->save();
        return redirect('/kategori');
        // dd($request->all());
    }
    public function delete(Request $request)
    {
        
        $kategori = Kategori::find($request->id);
        $kategori->delete();
        return redirect()->back();
    }
}
