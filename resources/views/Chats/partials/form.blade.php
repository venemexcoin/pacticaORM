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
                                        {!! Form::label('title', 'Nombre de titulo', ['class' => 'etiquetaF']) !!}
                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}

                                    </div>

                                     <!-- Main content -->
                                     <section class="content">
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                    {{ Form::label('description', 'Descrición de la publicación ', ['class' => 'etiquetaF']) }}

                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                            title="Collapse">
                                                        <i class="fas fa-minus"></i></button>
                                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                            title="Remove">
                                                        <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                 <div class="mb-3">

                                                    {{-- {{ Form::textarea('description', null, ['class' => "textarea",
                                                 'style'=>'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'])}}
                                                    </div>
                                                    <p class="text-sm mb-0">
                                                         Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                                                        information.</a>
                                                    </p> --}}
                                                    <div class="form-group">
                                                            {{ Form::label('description', 'Descripcion del foro', ['class' => 'etiquetaF']) }}
                                                            {{ Form::textarea('description', null, ['class' => 'form-control titleC', 'rows' => '2']) }}
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                             <!-- /.col-->
                                            </div>
                                         <!-- ./row -->
                                        </section>
                                        <!-- /.content -->
                                        <div class="form-group">
                                                {{ Form::label('url', 'Url referencia', ['class' => 'etiquetaF']) }}
                                                {{ Form::text('url', null, ['class' => 'form-control']) }}
                                        </div>
                                        <!--card futer-->
                            <div class="card-footer">
                                    <div class="form-group">
                                    {{ Form::submit('Guardar', ['class' => 'btn btn-xs btn-primary']) }}
                            </div>
                            </div>
                            <!--/.card futer-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @section('scripts')
                <script>
                $(document).ready(function() {
                $('.textarea').summernote();
                });
                </script>

                @endsection
