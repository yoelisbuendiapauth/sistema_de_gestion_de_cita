@extends('admin')

@section('content')

<section class="content">

<div class="container-fluid mt-3">
<h1 style="color:black;">Usuario:{{$usuario->name}}</h1>
</div>

<hr>

<div class="row">
<div class="col-md-6">

<div class="card  card-danger {{ ($errors->any() || session('mensaje')) ? '' : 'collapsed-card' }}">

<div class="card-header">
<h3 class="card-title">¿Estas seguro de eliminar este registro?</h3>

<div class="card-tools">

<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>

</div>

</div>

<div class="card-body">
<form action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST">
@csrf
@method ('DELETE')
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Nombre del usuario</label>
<input type="text" value = "{{$usuario->name}}" name="name" class="form-control" disabled>
@error('name')
<small style="color:red">{{$message}}</small>
@enderror
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Email</label>
<input type="email" value = "{{$usuario->email}}" name="email" class="form-control" disabled>
@error('email')
<small style="color:red">{{ $message }}</small>
@enderror
</div>
</div>
</div>


<a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">
Cancelar
</a>

<button type="submit" class="btn btn-danger">
Eliminar usuario
</button>

</form>

</div>

</div>

</div>
</div>

</section>

@endsection
