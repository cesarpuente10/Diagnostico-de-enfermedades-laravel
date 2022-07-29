<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preguntas;
use App\Models\medico;
use App\Models\User;

class MedicoController extends Controller
{
    public function algo()
    {
        $algo = User::all();
        return view('inicio')->with('algo', $algo);
    }
}
