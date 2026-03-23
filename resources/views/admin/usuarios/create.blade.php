@extends('admin')

@section('content')

<section class="content">

<div class="container-fluid mt-3">
<h1 style="color:black;">Registro de un nuevo usuario</h1>
</div>

<hr>

<div class="row">
<div class="col-md-6">

<div class="card card-outline card-primary {{ ($errors->any() || session('mensaje')) ? '' : 'collapsed-card' }}">

<div class="card-header">
<h3 class="card-title">Complete los datos</h3>

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
<div class="col-md-6">
<div class="form-group">
<label>Nombre del usuario</label><b>*</b>
<input type="text" value = "{{old('name')}}" name="name" class="form-control" required>
@error('name')
<small style="color:red">{{$message}}</small>
@enderror
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Email</label><b>*</b>
<input type="email" value = "{{old('email')}}" name="email" class="form-control" required>
@error('email')
<small style="color:red">{{ $message }}</small>
@enderror
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Password</label><b>*</b>
<input type="password" value = "{{old('password')}}" name="password" class="form-control" required>
@error('password')
<small style="color:red">{{ $message }}</small>
@enderror
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Confirmar Password</label><b>*</b>
<input type="password" name="password_confirmation" class="form-control" required>
@error('password_confirmation')
<small style="color:red">{{ $message }}</small>
@enderror
</div>
</div>
</div>

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
