<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\asistencia;
use App\Models\diagnostico;
use App\Models\medico;
use App\Models\paciente;
use App\Models\prediagnostico;
use App\Models\preguntas;
use App\Models\reporte;
use App\Models\senalesemg;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //Se mandan los usuarios pacientes 
    public function senddata_user_asistePacientesMedico() {

            $users = User::all();
            
            return view('asistePacientesMedico')->with('users', $users);
    }
    //Se mandan los usuarios medicos
    public function senddata_user_verMasMedicosPaciente() {

        $users = User::with('role', 2);

        return view('verMasMedicosPaciente')->with('users', $users);
    }
    //Se mandan los usuarios y las asistencias hechas
    public function senddata_user_iniciomedico() {

        $users = User::all();
        $asistencias = asistencia::all();
        return view('inicioMedico')
        ->with('users', $users)
        ->with('asistencias', $asistencias);
    }
    
    public function diagnostico()
    {
        $diagnostico = diagnostico::find(Auth::id())->get();
    }

    public function asistencia()
    {
        $diagnosticos = diagnostico::where('user_id', Auth::id())->get();
        foreach($diagnosticos as $diagnostico){
            $reportes = reporte::find($diagnostico->reporte_id)->get();
        }
        return view('diagnosticosPaciente')
        ->with('diagnosticos', $diagnosticos)
        ->with('reportes', $reportes);
    }
}
