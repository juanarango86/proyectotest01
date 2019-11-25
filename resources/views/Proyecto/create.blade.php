@extends ('Layouts.layout')
@section('contenido')

<div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Registro</h5>
                                
                                <form class="needs-validation" novalidate>
                                <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                        <label for="validationCustom01" class="">Nombre Proyecto</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre Proyecto" value="" required>
                                                        </div>
                                                        <div class="valid-feedback">
                                                        Correcto!
                                                        </div>
                                                        </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Cliente</label>
                                                    <select name="select" id="exampleSelect" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                    
                                    <div class="col-md-13 mb-4">
                                            <label for="validationCustom02">Descripción</label>
                                            <textarea name="text" id="exampleText" class="form-control" id="validationCustom02" placeholder="Descripcion / Resumen del proyecto" value="Otto" required></textarea>
                                            <div class="valid-feedback">
                                                Correcto!
                                            </div>
                                        </div>
                                     <div class="form-row">
                                        <div class="col-md-2 mb-3">
                                            <label for="validationCustom03">Cantidad de Encuestas</label>
                                            <input type="number" class="form-control" id="validationCustom03" placeholder="Cantidad" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Tipo Poblacion</label>
                                                    <select name="select" id="exampleSelect" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">Estado</label>
                                                    <select name="select" id="exampleSelect" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                </div>
                                    </div>
                                   
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                                    <a href="redirect">hola</a>
                                    @include ('sweet::alert')
                                </form>
            
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
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
