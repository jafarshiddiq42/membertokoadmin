<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public function subkategoris()
    {
        return $this->belongsTo(Subkategori::class);
    }
    public function merchants()
    {
        return $this->belongsTo(Merchant::class);
    }
}
