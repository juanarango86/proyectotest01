@extends('layouts.layout')
@section('contenido')
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.js">
</script>
<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-left">
                    <h3>Lista Proyectos</h3>
                </div>


                <a href="{{ route('Proyecto.create') }}" class="btn btn-outline-primary btn-block">Añadir Proyecto</a>

            </div>
            <br>
            
            <div class="table-responsive">
                <table id="tblproyectos" class="mb-0 table table-bordered table-hover table-sm table-responsive" style="width:100%" cellspacing="0">
                    <thead>
                        <!--  <th scope="col">Id</th> -->
                        <th scope="col">Nombre Proyecto</th>
                        <th scope="col">Decripcion</th>
                        <th scope="col">Cliente</th>
                        <th scope="col"># Encuestas</th>
                       {{--  <th scope="col">Direccion</th> --}}
                        <th scope="col">Tipo Poblacion</th>
                        <th scope="col">Editar
                        <th scope="col">Eliminar
                    </thead>
                    <tbody>
                        
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


</section>
<script>
    $(document).ready(function () {
        $('#tblproyectos').DataTable({
            'columnDefs': [
  {
      "targets": 0,// your case first column
      "className": "text-center",
      "width": "0%"
 }, {
      "targets": 1,// your case first column
      "className": "text-center",
      "width": "0%"
 }, {
      "targets": 2,// your case first column
      "className": "text-center",
      "width": "0%"
 },
 {
      "targets": 3,// your case first column
      "className": "text-center",
      "width": "0%"
 },
 {
      "targets": 4,// your case first column
      "className": "text-center",
      "width": "0%"
 },



],
            "language": {
                "lengthMenu": "_MENU_ Registros por pagina",
                "zeroRecords": "Sin Resultados - sorry",
                "search": "Buscar:",
                "info": "Listado _PAGE_ de _PAGES_ Paginas",
                "infoEmpty": "Sin Resultados",
                "infoFiltered": "(Busqueda de un total _MAX_ registros)",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });

</script>


@endsection
