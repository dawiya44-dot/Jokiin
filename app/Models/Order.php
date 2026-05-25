<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nama', 'kontak', 'layanan', 'layanan_id',
        'harga', 'catatan', 'foto_referensi', 'status'
        ];
}
