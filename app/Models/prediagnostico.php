<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prediagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'fecha',
        'edad',
        'sexo',
        'peso',
        'estatura',
        'tel_fijo',
        'celular'
    ];
}
