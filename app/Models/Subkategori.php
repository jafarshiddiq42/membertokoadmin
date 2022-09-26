<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    use HasFactory;
    public function kategoris()
    {
        return $this->hasOne(Kategori::class,'id','idkategori');
    }
    public function merchants()
    {
        return $this->belongsTo(Merchant::class);
    }
}
