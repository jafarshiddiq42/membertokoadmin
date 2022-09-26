<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Subkategori;
use Illuminate\Http\Request;

class SubkategoriController extends Controller
{
    public function index()
    {
        $subkategoris = Subkategori::all();
// dd($subkategoris);
        return view('menuadmin.subkategori.index',compact('subkategoris'));
    }

    public function edit($id)
    {
        $kategori = Kategori::all();
        $subkategori = Subkategori::find($id);
        // dd($subkategori);
        return view('menuadmin.subkategori.edit',compact('kategori','subkategori'));
    }
    public function update(Request $request)
    {

        // dd($request->all());
        $subkategori = Subkategori::find($request->id);
        $subkategori->idkategori = $request->kategori;
        $subkategori->sub_kategori = $request->subkategori;
        $subkategori->keterangan = $request->keterangan;
        $subkategori->gambar = '';
        $subkategori->save();
        return redirect('/subkategori');
    }


    public function create()
    {
       
        $kategori = Kategori::all();
        return view('menuadmin.subkategori.tambah',compact('kategori'));
    }
    public function tambah(Request $request)
    {
       
        $subkategori = new Subkategori();
        $subkategori->idkategori = $request->kategori;
        $subkategori->sub_kategori = $request->subkategori;
        $subkategori->keterangan = $request->keterangan;
        $subkategori->gambar = '';
        $subkategori->save();
        return redirect('/subkategori');
    }
    public function delete(Request $request)
    {
        $subkategori = Subkategori::find($request->id);
        $subkategori->delete();
        return redirect('/subkategori');
        
    }
    public function updatestatus(Request $request)
    {
        $subkategori = Subkategori::find($request->statusid);
        $subkategori->aktif = ($request->status == 'on'?1:0 );
        $subkategori->save();
        return redirect('/subkategori');
        // dd($request->all()); 
    }
}
