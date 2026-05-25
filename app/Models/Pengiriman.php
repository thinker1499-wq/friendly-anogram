<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';

    protected $fillable = [
        'no_resi',
        'nama_pengirim',
        'alamat_pengirim',
        'nama_penerima',
        'alamat_penerima',
        'detail_barang',
        'status',
    ];
}
