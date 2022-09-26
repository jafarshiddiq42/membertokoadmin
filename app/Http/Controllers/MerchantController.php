<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
       $merchants = Merchant::all();
        return view('menuadmin.merchant.index',compact('merchants'));
    }
    public function verifikasi()
    {
       $merchants = Merchant::where('verifikasi','=',0)->get();
       return view('menuadmin.merchant.verifikasi',compact('merchants'));
       
    }
}
