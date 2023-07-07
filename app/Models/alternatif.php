<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;

    protected $fillable = ['alternatif', 'harga', 'rate_umur', 'review', 'size', 'user_download'];
    protected $table = 'alternatif';
}
