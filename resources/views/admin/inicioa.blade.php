<x-app-layout>
    
    {{-- Es Admin --}}
    <section class="d-flex align-items-center p-3 mb-2 mt-2">
        <i class="fa-solid fa-user fa-2xl"></i>
        <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
    </section>

    {{-- Buscar usuario --}}
    <form class="container" action="{{ route('buscausuario') }}" method="POST">
        @csrf
        <h1>Buscar usuario</h1>
        <label class="form-label">Nombre</label>
        <input class="form-control" type="text" name="name">
        <label class="form-label">Apellido paterno</label>
        <input class="form-control" type="text" name="lastnamef">
        <label class="form-label">Apellido Materno</label>
        <input class="form-control" type="text" name="lastnamem"> <br>
        <input class="btn btn-primary" type="submit" value="Buscar usuario">
    </form> <br>

    <form class="container" action="{{ route('getasistencia') }}" method="POST">
        @csrf
        <h1>Buscar asistencia por id</h1>
        <label class="form-label">ID</label>
        <input class="form-control" type="text" name="asistencia_id"> <br>
        <input class="btn btn-primary" type="submit" value="Buscar asistencia">
    </form>

</x-app-layout>