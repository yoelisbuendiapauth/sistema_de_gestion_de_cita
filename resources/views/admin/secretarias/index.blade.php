@extends('admin')

@section('content')

<section class="content">
    <div class="container-fluid mt-3">
        <div class="row">
        <h1 style="color:blook;">Listado de secretarias</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-10">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Secretarias registrados</h3>

                <div class="card-tools">
    <a href="{{ route('admin.secretarias.create') }}" class="btn btn-primary">
        Registrar nuevo
    </a>
</div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id ="example1" class ="table table-striped table-bordered table-hover">
        <thead style="background-color: lightgray;">
  
    <tr>
       <tr>
    <td style="text-align:center"><b>Nro</b></td>
    <td style="text-align:center"><b>Nombres</b></td>
    <td style="text-align:center"><b>Apellidos</b></td>
    <td style="text-align:center"><b>Celular</b></td>
    <td style="text-align:center"><b>Fecha de nacimiento</b></td>
    <td style="text-align:center"><b>Direccion</b></td>
    <td style="text-align:center"><b>Email</b></td>
    <td style="text-align:center"><b>Acciones</b></td>
</tr>
    </tr>
  </thead>
  <tbody>
<?php $contador= 1; ?>
   @foreach($secretarias as $secretaria)
<tr>
    <td style="text-align:center">{{ $contador++ }}</td>
    <td>{{ $secretaria->nombres}}</td>
    <td>{{ $secretaria->apellidos}}</td>
    
    <td style="text-align:center"><div class="btn-group" role="group" aria-label="Basic example">
<a href="{{ route('admin.secretarias.show', $secretaria->id) }}"  class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>

<a href="{{ route('admin.secretarias.edit', $secretaria->id) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
  <a href="{{ route('admin.secretarias.confirmDelete', $secretaria->id) }}" class="btn btn-danger btn-sm"> <i class="bi bi-trash3"></i></a>

</div></td>
</tr>
@endforeach
  </tbody>


</table>
<script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                     "info": "Mostrando _START_ a _END_ de _TOTAL_ Secretarias",
                                     "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                      "infoFiltered": "(Filtrado de _MAX_ total Secretarias)",
                                     "thousands": ",",
                                     "lengthMenu": "Mostrar _MENU_ Secretarias",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</section>

@endsection