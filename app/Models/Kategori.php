<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;
    
    public function berita()
    {
        return $this->belongsTo('App\Models\Berita', 'id_kategori');

    }

}
