@extends ('Layouts.layout')
@section('contenido')

<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.js">
</script>

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Registro</h5>
       
            <div class="form-row">
            </div>
    </div>

    <div class="container">

        <h3>
            <a href="Cliente/create">
                <button class="btn btn-primary btn-lg btn-block">Nuevo

                </button></a></h3>

        <table id="tblclientes" name="tblclientes" class="table table-striped" style="width:100%">
            <br>
            <br>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Decripcion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opciones


                    </th>
                </tr>
            </thead>
            <tbody>
                <!--  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>

                    <td>
                        <a href="#">
                            <button class="btn btn-info">Editar</button></a>

                        <a href="#" data-target="#" data-toggle="modal">
                            <button class="btn btn-danger">Eliminar</button></a>
                    </td>


                    </th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>

                    <td>
                        <a href="#">
                            <button class="btn btn-info">Editar</button></a>

                        <a href="#" data-target="#" data-toggle="modal">
                            <button class="btn btn-danger">Eliminar</button></a>
                    </td>


                    </th>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>

                    <td>
                        <a href="#">
                            <button class="btn btn-info">Editar</button></a>

                        <a href="#" data-target="#" data-toggle="modal">
                            <button class="btn btn-danger">Eliminar</button></a>
                    </td>


                    </th>
                </tr> -->
    </div>
    </tbody>
    <script>
        $(document).ready(function () {
            $('#tblclientes').DataTable({
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

    </table>


    <a href="redirect">hola</a>

    @include ('sweet::alert')
 

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

    </script>
</div>
</div>
@stop
