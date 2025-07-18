<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $table = 'berita';
    protected $fillable = [
        'judul',
        'isi_berita',
        'tanggal',
        'thumbnail'
    ];
    protected $casts = [
        'thumbnail' => 'array',
    ];
}
