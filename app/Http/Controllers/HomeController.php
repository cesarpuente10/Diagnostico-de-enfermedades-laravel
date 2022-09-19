<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\asistencia;
use App\Models\Consultorio;
use App\Models\diagnostico;
use App\Models\prediagnostico;
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

    public function crear_asistencia($request)
    {
        $asistencia = new asistencia();
        $asistencia->paciente_id = $request->paciente_id;
        $asistencia->medico_id = $request->medico_id;
        $asistencia->estado = 'pendiente';
        $asistencia->save();
        return redirect()->back();
    }

    public function update_asistencia($request)
    {
        $asistencia = asistencia::where('id', $request->asistencia_id);
        $asistencia->update([
            $asistencia->estado = $request->estado
        ]);
        if ($request->estado == 'aceptado') {
            $paciente = User::where('id', $request->paciente_id);
            $medico = User::where('id', $request->medico_id);
            $paciente->update([
                $paciente->nasist += 1
            ]);
            $medico->update([
                $medico->nasist += 1
            ]);
        }
    }

    public function create_info_paciente($request) {
        $user = User::where('user_id', $request->paciente_id)->get();
        $prediagnostico = new prediagnostico();
        $prediagnostico->paciente_id = $request->paciente_id;
        $prediagnostico->edad = $request->edad;
        $prediagnostico->sexo = $request->sexo;
        $prediagnostico->peso = $request->peso;
        $prediagnostico->estatura = $request->estatura;
        $prediagnostico->fecha = $request->fecha;
        $prediagnostico->save();

        return redirect()->route('inicio');

        //dd($user); para ver información de la variable
    }

    public function read_info_paciente($request)
    {
        $user = User::where('user_id', $request->paciente_id)->get();
        $prediagnostico = prediagnostico::where('paciente_id', $request->paciente_id)->get();
        return view('perfilp')
        ->with('user', $user)
        ->with('prediagnostico', $prediagnostico);
    }

    public function update_info_paciente($request)
    {
        $user = User::where('user_id', $request->paciente_id)->get();
        $prediagnostico = prediagnostico::where('paciente_id', $request->paciente_id)->get();
        $prediagnostico->update([
            $prediagnostico->paciente_id = $request->paciente_id,
            $prediagnostico->edad = $request->edad,
            $prediagnostico->sexo = $request->sexo,
            $prediagnostico->peso = $request->peso,
            $prediagnostico->estatura = $request->estatura,
            $prediagnostico->fecha = $request->fecha
        ]);
    }

    public function delete_info_paciente($request)
    {
        $user = User::where('user_id', $request->paciente_id)->get();
        $prediagnostico = prediagnostico::where('paciente_id', $request->paciente_id)->get();
        //Buscar y borrar cosas del paciente

        $prediagnostico->delete();
        $user->delete();
    }

    public function create_info_medico($request) {
        $user = User::where('user_id', $request->medico_id)->get();
        $consultorio = new consultorio();
        $consultorio->medico_id = $request->medico_id;
        $consultorio->cedula = $request->cedula;
        $consultorio->calle = $request->calle;
        $consultorio->cp = $request->cp;
        $consultorio->numero = $request->numero;
        $consultorio->tel_fijo = $request->tel_fijo;
        $consultorio->save();

        return redirect()->route('inicio');

        //dd($user); para ver información de la variable
    }

    public function read_info_medico($request)
    {
        $user = User::where('user_id', $request->medico_id)->get();
        $consultorio = consultorio::where('medico_id', $request->medico_id)->get();
        return view('perfilp')
        ->with('user', $user)
        ->with('consultorio', $consultorio);
    }

    public function update_info_medico($request)
    {
        $user = User::where('user_id', $request->medico_id)->get();
        $consultorio = consultorio::where('medico_id', $request->medico_id)->get();
        $consultorio->update([
            $consultorio->medico_id = $request->medico_id,
            $consultorio->edad = $request->edad,
            $consultorio->sexo = $request->sexo,
            $consultorio->peso = $request->peso,
            $consultorio->estatura = $request->estatura,
            $consultorio->fecha = $request->fecha
        ]);
    }

    public function delete_info_medico($request)
    {
        $user = User::where('user_id', $request->medico_id)->get();
        $consultorio = consultorio::where('medico_id', $request->medico_id)->get();
        //Buscar y borrar cosas del medico

        $prediagnostico->delete();
        $user->delete();


    }



    /* //Se mandan los usuarios medicos
    public function senddata_user_verMasMedicosPaciente() {

        $users = User::with('role', 2);

        return view('verMasMedicosPaciente')->with('users', $users);
    }
    //Se mandan los usuarios y las asistencias hechas
    public function senddata_user_iniciomedico() {

        $users = User::all();
        $asistencias = asistencia::all();
        return view('inicio')
        ->with('users', $users)
        ->with('asistencias', $asistencias);
    }
    
    public function diagnostico()
    {
        $diagnostico = diagnostico::find(Auth::id())->get();
    } */
}
