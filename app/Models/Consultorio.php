<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'medico_id',
        'cedula',
        'calle',
        'cp',
        'numero_ext',
        'numero_int',
        'tel_fijo'
    ];
}
