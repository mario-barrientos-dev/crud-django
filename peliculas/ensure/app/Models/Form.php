<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable = ['nombre', 'apellido', 'email', 'mobil', 'factura', 'n_factura'];
}
