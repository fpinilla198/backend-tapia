<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phones extends Model
{
    use HasFactory;
    protected $fillable = ['model', 'color', 'price', 'stock','store'];
}
