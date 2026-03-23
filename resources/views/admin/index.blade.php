@extends('admin')

@section('content')
<section class="content">
    <div class="container-fluid mt-3">
        <h1 style="color:black;">Modulos del sistema</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> {{$total_usuarios}}</h3>

                <p>Usuario</p>
              </div>
              <div class="icon">
                <i class="ion fas bi bi-file-person"></i>
              </div>
              <a href="{{url('admin/usuarios')}}" class="small-box-footer">Mas informacion <i class="fas bi bi-file-person"></i></a>
            </div>
          </div>
    </div>
</section>
@endsection