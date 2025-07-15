<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    //
    protected $table = 'Umkm';
    protected $fillable = [
        'nama_umkm',
        'pemilik',
        'kategori',
        'deskripsi',
        'alamat',
        'kontak',
        'foto',
        'instagram',
        'whatsapp',
        'shopee',
        'tokopedia',
        'tiktok',
        'rw_id'
    ];

    protected $casts = [
        'foto' => 'array',
    ];
}
