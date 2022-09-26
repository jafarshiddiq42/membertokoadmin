<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    public function kategoris()
    {
        return $this->hasOne(Kategori::class,'id','idkategori');
    }
    public function subkategoris()
    {
        return $this->hasOne(Subkategori::class,'id','idsubkategori');
    }
}
