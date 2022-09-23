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
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;

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

     //Se mandan los usuarios y las asistencias hechas
    public function senddata_user_inicio() {
        $asistencias = $this->read_asistencias();
        if(Auth::user()->role == 1){
            $hasPrediagnostico = false;
            //es un paciente y se manda a la pantalla de paciente
            $medicos = User::where('role', 2)->orderBy('n_asist', 'ASC')->limit(10)->get();
            $prediagnostico = prediagnostico::where('paciente_id', Auth::user()->id)->first();
            if($prediagnostico != null)
                $hasPrediagnostico = true;
            //dd($hasPrediagnostico);
            return view('iniciop')->with('medicos', $medicos)->with('asistencias', $asistencias)->with('hasPrediagnostico', $hasPrediagnostico);
        }elseif(Auth::user()->role == 2){
            //es un medico y se manda a la pantalla de medico
            return view('iniciom')->with('asistencias',$asistencias);
        }
    }

    public function create_asistencia(Request $request)
    {
        //dd($request);
        $asistencia = new asistencia();
        $asistencia->paciente_id = $request->paciente_id;
        $asistencia->medico_id = $request->medico_id;
        $asistencia->estado = 'pendiente';
        $asistencia->save();
        return redirect()->back();
    }

    public function read_asistencias()
    {
        if(Auth::user()->role == 2)
        {
            $asistencias = asistencia::where('medico_id', Auth::id())->get();
            foreach ($asistencias as $asistencia) {
                $user = User::where('id', $asistencia->paciente_id)->first();
                $name = $user->name . " " . $user->lastnamef . " " . $user->lastnamem;
                $asistencia->nombrepaciente = $name;
            }
        }else if(Auth::user()->role == 1){
            $asistencias = asistencia::where('paciente_id', Auth::id())->get();
            foreach ($asistencias as $asistencia) {
                $user = User::where('id', $asistencia->medico_id)->first();
                $name = $user->name . " " . $user->apellidop . " " . $user->apellidom;
                $asistencia->nombremedico = $name;
            }
        }
        return $asistencias;
    }
    
     //Se mandan los médicos con los que realizó asistencia
     public function senddata_paciente_asistencias() {
        $asistencias = $this->read_asistencias();
        //es un paciente y se manda a la pantalla de paciente
        $medicos = User::where('role', 2)->get();
        return view('asistenciaspaciente')->with('medicos', $medicos)->with('asistencias', $asistencias);
    }

    public function senddata_medico_pacientes() {
        $asistencias = $this->read_asistencias();
        //es un médico y se manda a la pantalla de los pacientes que tiene
        $pacientes = User::where('role', 1)->get();
        return view('verpacientes')->with('pacientes', $pacientes)->with('asistencias', $asistencias);
    }

    //Valores aceptados por una asistencia: "aceptado", "rechazado", "enProceso", "cancelada"
    public function update_asistencia(Request $request)
    {
        $asistencia = asistencia::find($request->id);
        //dd($asistencia->estado);
        $asistencia->update([
            $asistencia->estado = $request->estado
        ]);
        if ($request->estado == 'aceptado') {
            $paciente = User::find($asistencia->paciente_id);
            $medico = User::find($asistencia->medico_id);
            //$paciente = User::where('id', $asistencia->paciente_id);
            //$medico = User::where('id', $asistencia->medico_id);
            //dd($paciente->name);
            $paciente->update([
                $paciente->n_asist += 1
            ]);
            $medico->update([
                $medico->n_asist += 1
            ]);
        }
        //dd($asistencia->estado);        
        return redirect()->back();
    }

    public function delete_asistencia($id)
    {
        $asistencia = asistencia::find($id);
        $asistencia->delete();
        return redirect()->back();
    }

    public function create_info_paciente(Request $request) {
        $user = User::find(Auth::id());
        $user->update([
            $user->name = $request->name,
            $user->lastnamef = $request->lastnamef,
            $user->lastnamem = $request->lastnamem
        ]);
        $prediagnostico = new prediagnostico();
        $prediagnostico->paciente_id = $request->paciente_id;
        $prediagnostico->edad = $request->edad;
        $prediagnostico->sexo = $request->sexo;
        $prediagnostico->peso = $request->peso;
        $prediagnostico->estatura = $request->estatura;
        $prediagnostico->fecha = $request->fecha;
        $prediagnostico->tel_fijo = $request->tel_fijo;
        $prediagnostico->celular = $request->celular;
        $prediagnostico->save();

        return redirect()->route('inicio');

        //dd($user); para ver información de la variable
    }

    public function read_info_paciente($id)
    {
        $user = User::find($id);
        $prediagnostico = prediagnostico::where('paciente_id', $id)->first();
        //dd($prediagnostico);
        return view('perfilp')
        ->with('user', $user)
        ->with('prediagnostico', $prediagnostico);
    }

    public function read_info_paciente_edit($id)
    {
        $user = User::find($id);
        //$prediagnostico = prediagnostico::find($id);
        $prediagnostico = prediagnostico::where('paciente_id', $id)->first();
        return view('perfilpedit')
        ->with('user', $user)
        ->with('prediagnostico', $prediagnostico);
    }

    public function update_info_paciente(Request $request)
    {
        $user = User::where('id', $request->paciente_id)->first();
        $prediagnostico = prediagnostico::where('paciente_id', $request->paciente_id)->first();
        $user->update([
            $user->name = $request->name,
            $user->lastnamef = $request->lastnamef,
            $user->lastnamem = $request->lastnamem,
            $user->email = $request->email
        ]);
        $prediagnostico->update([
            $prediagnostico->paciente_id = $request->paciente_id,
            $prediagnostico->edad = $request->edad,
            $prediagnostico->sexo = $request->sexo,
            $prediagnostico->peso = $request->peso,
            $prediagnostico->estatura = $request->estatura,
            $prediagnostico->fecha = $request->fecha
        ]);
        return redirect()->back();
    }

    public function delete_info_paciente($request)
    {
        $user = User::where('user_id', $request->paciente_id)->get();
        $prediagnostico = prediagnostico::where('paciente_id', $request->paciente_id)->get();
        //Buscar y borrar cosas del paciente

        $prediagnostico->delete();
        $user->delete();
        return redirect()->back();
    }

    public function create_info_medico(Request $request) {
        $medico = User::find(Auth::id());
        $consultorio = new consultorio();
        $consultorio->medico_id = $request->medico_id;
        $consultorio->calle = $request->calle;
        $consultorio->cp = $request->cp;
        $consultorio->numero_ext = $request->numero_ext;
        $consultorio->numero_int = $request->numero_int;
        $consultorio->tel_fijo = $request->tel_fijo;
        if($request->hasFile("cedula")){
            $file = $request->file('cedula');
            $filename = $medico->name.$medico->lastnamef.$medico->lastnamem.$medico->id.'.pdf';
            $file-> move(public_path('cedulas'), $filename);
        }
        $consultorio->cedula = $filename;
        $consultorio->save();

        return redirect()->route('inicio');

        //dd($user); para ver información de la variable
    }

    public function read_info_medico($id)
    {
        $user = User::find($id);
        $consultorio = consultorio::where('medico_id', $id)->first();
        //dd($consultorio);
        return view('perfilm')
        ->with('user', $user)
        ->with('consultorio', $consultorio);
    }

    public function read_info_medico_edit($id)
    {
        $user = User::find($id);
        $consultorio = consultorio::where('medico_id', $id)->first();
        //dd($consultorio);
        return view('perfilmedit')
        ->with('user', $user)
        ->with('consultorio', $consultorio);
    }

    public function update_info_medico(Request $request)
    {
        $user = User::where('id', $request->medico_id)->first();
        $consultorio = consultorio::where('medico_id', $request->medico_id)->first();
        $user->update([
            $user->name = $request->name,
            $user->lastnamef = $request->lastnamef,
            $user->lastnamem = $request->lastnamem,
            $user->email = $request->email
        ]);
        $consultorio->update([
            $consultorio->medico_id = $request->medico_id,
            $consultorio->calle = $request->calle,
            $consultorio->cp = $request->cp,
            $consultorio->numero_ext = $request->numero_ext,
            $consultorio->numero_int = $request->numero_int,
            $consultorio->tel_fijo = $request->tel_fijo
        ]);
        if($request->hasFile("cedula")){
            $file = $request->file('cedula');
            $filename = $consultorio->cedula;
            $file-> move(public_path('cedulas'), $filename);
        }
        return redirect()->route('perfilm', ['id' => $request->medico_id]);
    }

    public function delete_info_medico($request)
    {
        $user = User::where('user_id', $request->medico_id)->get();
        $consultorio = consultorio::where('medico_id', $request->medico_id)->get();
        //Buscar y borrar cosas del medico

        $consultorio->delete();
        $user->delete();
        return redirect()->back();

    }



    /* //Se mandan los usuarios medicos
    public function senddata_user_verMasMedicosPaciente() {

        $users = User::with('role', 2);

        return view('verMasMedicosPaciente')->with('users', $users);
    }
    
    
    public function diagnostico()
    {
        $diagnostico = diagnostico::find(Auth::id())->get();
    } */
}
