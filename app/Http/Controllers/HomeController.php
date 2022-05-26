<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


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
    public function index()
    {
        return view('home');
    }

    public function senddata_user_asistePacientesMedico() {
            $users = User::all();
            return view('asistePacientesMedico')->with('users', $users);
    }

    public function senddata_user_verMasMedicosPaciente() {
        $users = User::all();
        return view('verMasMedicosPaciente')->with('users', $users);
    }
}
