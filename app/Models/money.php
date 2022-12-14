<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class money extends Model
{
    use HasFactory;

    protected $table = "money";
    protected $fillable = ['nis', 'nama', 'rayon', 'uang'];
}
