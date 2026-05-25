<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = ['judul', 'harga', 'gambar', 'deskripsi', 'kategori'];
}
