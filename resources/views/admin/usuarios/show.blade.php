@extends('admin')

@section('content')

<section class="content">

<div class="container-fluid mt-3">
<h1 style="color:black;">Usuario:{{$usuario->name}}</h1>
</div>

<hr>

<div class="row">
<div class="col-md-6">

<div class="card card-outline card-info {{ ($errors->any() || session('mensaje')) ? '' : 'collapsed-card' }}">

<div class="card-header">
<h3 class="card-title">Datos registrados</h3>

<div class="card-tools">

<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>

</div>

</div>

<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Nombre del usuario</label>
<p>{{$usuario->name}}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Email</label>
<p>{{$usuario->email}}</p>
</div>
</div>
</div>

<a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">
Cancelar
</a>

</div>

</div>

</div>
</div>

</section>

@endsection
