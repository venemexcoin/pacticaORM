<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8 offset-md-2">

                    <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Formulario</h3>
                            </div>
                            <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombre del producto', ['class' => 'etiquetaF']) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group">
                                            {{ Form::label('description', 'Descripción del producto', ['class' => 'etiquetaF']) }}
                                            {{ Form::text('description', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                            {{ Form::label('price', 'Precio fiat del Producto', ['class' => 'etiquetaF']) }}
                                            {{ Form::text('price', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                            {{ Form::label('cripto', 'Precio cripto del Producto', ['class' => 'etiquetaF']) }}
                                            {{ Form::text('cripto', null, ['class' => 'form-control']) }}
                                    </div>
                            </div>
                            <!--/.card body-->

                            <!--card futer-->
                            <div class="card-footer">
                                    <div class="form-group">
                                    {{ Form::submit('Guardar', ['class' => 'btn btn-xs btn-primary']) }}
                            </div>
                            </div>
                            <!--/.card futer-->
                        </div>
                    <!-- /.card-header -->
            </div>
          </div>
        </div>
</section>




