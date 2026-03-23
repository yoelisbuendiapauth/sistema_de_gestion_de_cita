```blade
@extends('admin')

@section('content')

<section class="content">

<div class="container-fluid mt-3">
    <h1 style="color:black;">Registro de una nueva secretaria</h1>
</div>

<hr>

<div class="row">
<div class="col-md-12">

<div class="card card-outline card-primary {{ ($errors->any() || session('mensaje')) ? '' : 'collapsed-card' }}">

    <div class="card-header">
        <h3 class="card-title">Llena los datos</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.usuarios.store') }}" method="POST">
        @csrf

        <div class="row">

            <!-- NOMBRES -->
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nombres</label><b>*</b>
                    <input type="text" value="{{ old('nombres') }}" name="nombres" class="form-control" required>
                    @error('nombres')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- APELLIDOS -->
            <div class="col-md-3">
                <div class="form-group">
                    <label>Apellidos</label><b>*</b>
                    <input type="text" value="{{ old('apellidos') }}" name="apellidos" class="form-control" required>
                    @error('apellidos')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- CÉDULA -->
            <div class="col-md-3">
                <div class="form-group">
                    <label>Cédula</label><b>*</b>
                    <input type="text" value="{{ old('cc') }}" name="cc" class="form-control" required>
                    @error('cc')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- CELULAR -->
            <div class="col-md-3">
                <div class="form-group">
                    <label>Celular</label><b>*</b>
                    <input type="text" value="{{ old('celular') }}" name="celular" class="form-control" required>
                    @error('celular')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>

        </div>

        <div class="row">

            <!-- FECHA NACIMIENTO -->
            <div class="col-md-3">
                <div class="form-group">
                    <label>Fecha de nacimiento</label><b>*</b>
                    <input type="date" value="{{ old('fecha_nacimiento') }}" name="fecha_nacimiento" class="form-control" required>
                    @error('fecha_nacimiento')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
           <div class="col-md-9">
                <div class="form-group">
                    <label>Direccion</label><b>*</b>
                    <input type="text" value="{{ old('Direccion') }}" name="Direccion" class="form-control" required>
                    @error('Direccion')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            
        <div class="row">
            <!-- EMAIL -->
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email</label><b>*</b>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" required>
                    @error('email')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <!-- PASSWORD -->
            <div class="col-md-4">
                <div class="form-group">
                    <label>Password</label><b>*</b>
                    <input type="password" name="password" class="form-control" required>
                    @error('password')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- CONFIRMAR PASSWORD -->
            <div class="col-md-4">
                <div class="form-group">
                    <label>Confirmar Password</label><b>*</b>
                    <input type="password" name="password_confirmation" class="form-control" required>
                    @error('password_confirmation')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
            </div>

       

        <div class="mt-3">
            <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">
                Cancelar
            </a>

            <button type="submit" class="btn btn-primary">
                Registrar usuario
            </button>
        </div>

        </form>

    </div>

</div>

</div>
</div>

</section>

@endsection

