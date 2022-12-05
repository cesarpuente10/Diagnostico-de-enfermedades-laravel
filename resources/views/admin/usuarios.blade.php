<x-app-layout>
    <form class="container" action="{{ route('buscausuario') }}" method="POST">
        @csrf
        <h1>Buscar otro usuario</h1>
        <label class="form-label">Nombre</label>
        <input class="form-control" type="text" name="name">
        <label class="form-label">Apellido paterno</label>
        <input class="form-control" type="text" name="lastnamef">
        <label class="form-label">Apellido Materno</label>
        <input class="form-control" type="text" name="lastnamem"> <br>
        <input class="btn btn-primary" type="submit" value="Buscar">
    </form>
    <table class="table table table-hover table-cont">
        <thead>
            <tr>
                <th scope="col">#id del usuario</th>
                <th scope="col">Paciente</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
                <th scope="col">información</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr data-bs-toggle="collapse" href="#collapseExample{{ $user->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">

                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }} {{ $user->lastnamef }} {{ $user->lastnamem }}</td>
                <td>{{ $user->email }}</td>
                @if ($user->role == 1)
                    <td>Paciente</td>
                @elseif($user->role == 2)
                    <td>Médico</td>
                @elseif($user->role == 3)
                    <td>Administrador</td>
                @endif
                
                <td><div class="collapse" id="collapseExample{{ $user->id }}">
                    <div class="card card-body drop">
                        <p>
                        <i class="fa-solid fa-user fa-4x"></i>
                        </p>
                        <div class="lineaCont"></div>
                        <div class="buttons-verPacientes">
                            <p>
                            Fecha de registro <br>
                            {{ date('d/M/Y', strtotime($user->created_at))}}
                            </p>
                            @if ($user->role == 1)
                            <a href ="/diagnosticospaciente/{{ $user->id }}">
                                <p class="fa-xl">Diagnósticos</p>
                            </a>
                            <a href ="/asistenciaspaciente/{{ $user->id }}">
                                <p class="fa-xl">Asistencias</p>
                            </a>
                            <a href="/perfilp/{{ $user->id }}">
                                <p>Ver información del Usuario</p>
                            </a>
                            @elseif($user->role == 2)
                            <a href ="/pacientes/{{ $user->id }}">
                                <h6 class="fa-xl">Asistencias</h6>
                            </a>
                            <a href="/perfilm/{{ $user->id }}">
                                <p>Ver información del Usuario</p>
                            </a>
                            @endif
                        </div>
                        
                </div></td> 
            </tr>
            @endforeach
        </tbody>
    </table>



</x-app-layout>