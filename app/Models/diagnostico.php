<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'asistencia_id',
        'diagnostico',
        'senalesemg',
        'reporte',
        'comentario',
        'fecha',
        'ndiagnosticos'
    ];
}
