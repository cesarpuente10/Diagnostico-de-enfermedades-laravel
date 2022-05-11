<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prediagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fecha',
        'edad',
        'sexo',
        'localidad',
        'peso',
        'estatura'
    ];
}
