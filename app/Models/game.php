<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'category', 'size', 'age_rating', 'review'];
    protected $table = 'game';
}