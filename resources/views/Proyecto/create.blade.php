@extends('Layouts.layout')
@section('contenido')

<div class="main-card mb-3 card">
    <div class="card-body">
        <!-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
					@endforeach
					
                </ul>
            </div>
            @endif -->


        @if(Session::has('success'))
        <div class="alert alert-info">
            {{Session::get('success')}}
        </div>
        @endif

        <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Proyecto</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
<<<<<<< HEAD
                        <form class="needs-validation" novalidate method="POST" action="{{route('proyectosstore')}}">
=======
                        <form   method="POST" action="{{route('proyectosstore')}}">
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
                        
                            @csrf
                           
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group form-rounde">
                                        <input type="text" name="nombre" class="form-control form-rounded" id="validationCustom03"
                                            placeholder="Nombre" required placeholder="Nombre"
                                            value="{{old('nombre')}}">
                                        <div class="invalid-feedback">
<<<<<<< HEAD
                                            Debe ingresar el nombre completo del cliente o el nombre de la empresa
=======
                                            Debe ingresar el nombre completo del ciente o el nombre de la empresa
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
                                        </div>
                                        <!--  {!! $errors->first('nombre','<span style=color:blue;">:message</span>')!!} -->

                                    </div>

                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="descripcion" class="form-control" id="validationCustom03"
                                            placeholder="descripcion" required value="{{old('descripcion')}}">
                                        <div class="invalid-feedback">
                                            Debe ingresar el numero de telefono del cliente
                                        </div>
                                        <!-- {!! $errors->first('descripcion','<span style=color:blue;">:message</span>')!!} -->
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="id_cliente" class="form-control" id="validationCustom03"
                                            placeholder="id_cliente" required value="{{old('id_cliente')}}">
                                        <div class="invalid-feedback">
                                            Debe ingresar el numero de celular del cliente
                                        </div>
                                        <!-- {!! $errors->first('id_cliente','<span style=color:blue;">:message</span>')!!} -->
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="cantidad_encuestas" class="form-control" id="validationCustom03"
                                            placeholder="cantidad_encuestas" required value="{{old('cantidad_encuestas')}}">
                                        <div class="invalid-feedback">
                                            Debe ingresar la direccion del cliente
                                        </div>
                                        <!-- {!! $errors->first('cantidad_encuestas','<span style=color:blue;">:message</span>')
                                        !!} -->
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="poblacion" class="form-control" id="validationCustom03"
                                            placeholder="poblacion" required value="{{old('poblacion')}}">
                                        <div class="invalid-feedback">
                                            Debe ingresar una cuenta de correo electronico valida
                                        </div>
                                        <!-- {!! $errors->first('poblacion','<span style=color:blue;">:message</span>')
                                        !!} -->
                                    </div>
                                </div>
                                
<<<<<<< HEAD
                            </div>
                            <br>

                            <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" value="Guardar" class="mb-2 mr-2 btn-transition btn btn-outline-primary btn-block"">
                                    <a href="{{ route('Proyecto.index') }}" class="mb-2 mr-2 btn-transition btn btn-outline-info btn-block">Atrás</a>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" value="Guardar" class="mb-2 mr-2 btn-transition btn btn-outline-primary btn-block"">
                                    <a href="{{ route('Proyecto.index') }}" class="mb-2 mr-2 btn-transition btn btn-outline-info btn-block">Atrás</a>
                                </div>
=======
                            </div>
                            <br>

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" value="Guardar" class="mb-2 mr-2 btn-transition btn btn-outline-primary btn-block"">
                                    <a href="{{ route('Proyecto.index') }}" class="mb-2 mr-2 btn-transition btn btn-outline-info btn-block">Atrás</a>
                                </div>

                            </div>
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
                           
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</section>
@endsection

<<<<<<< HEAD
 <script>
=======
{{-- <script>
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
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

<<<<<<< HEAD
</script>
=======
</script> --}}
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
</div>
</div>
