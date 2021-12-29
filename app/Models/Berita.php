<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $visible = ['judul', 'isi', 'id_kategori', 'id_user', 'gambar_artikel', 'komentar'];
    protected $fillable = ['judul', 'isi', 'id kategori', 'id_user', 'gambar_artikel', 'komentar'];
    public $timestamps= true;

    public function kategori()
    {
        // data dari Model "Book" bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }

    public function user()
    {
        // data dari Model "Book" bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function image()
    {
        // jika ada data dari cover dan juga file yang di folder public images books itu ada
        // yang sesuai dengan namanya,maka kita akan memanngil file nya di dalam image book nama foto
        if ($this->gambar_artikel && file_exists(public_path('images/berita/' . $this->gambar_artikel))) {
            return asset('images/berita/' . $this->gambar_artikel);
        } else {
            return asset('images/no_images.jpg');
        }
    }
    public function deleteImages()
    {
        if ($this->gambar_artikel && file_exists(public_path('images/berita/' . $this->gambar_artikel))) {
            return unlink(public_path('images/berita/' . $this->gambar_artikel));
        }

    } 

}

