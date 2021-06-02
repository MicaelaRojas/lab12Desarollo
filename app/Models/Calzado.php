<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calzado extends Model
{
    protected $fillable = ['calzado', 'tipo',
    'color','talla','marca','genero','edades','precio'];
}

