<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rw extends Model
{
    protected $table = 'rw';
    protected $fillable = [
        'nama_rw',
        'ketua_rw',
        'alamat',
        'kontak',
    ];
}
