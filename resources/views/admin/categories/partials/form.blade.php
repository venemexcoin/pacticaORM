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
                                        {!! Form::label('name', 'Nombre del Etiqueta', ['class' => 'etiquetaF']) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group">
                                            {{ Form::label('slug', 'Slug de categoría', ['class' => 'etiquetaF']) }}
                                            {{ Form::text('slug', null, ['class' => 'form-control']) }}
                                    </div>
                                    <!-- Main content -->
                                    <section class="content">
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                    {{ Form::label('body', 'Descripción del permission ', ['class' => 'etiquetaF']) }}

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

                                                    {{ Form::textarea('body', null, ['class' => "textarea",
                                                 'style'=>'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'])}}
                                                    </div>
                                                    <p class="text-sm mb-0">
                                                         Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                                                        information.</a>
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                             <!-- /.col-->
                                            </div>
                                         <!-- ./row -->
                                        </section>
                                        <!-- /.content -->

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
@section('scripts')
<script src="{{ asset("fron/vendor/jquery.stringToSlug.min.js")}}"></script>
<script>
//console.log('conectado desde el formulario');
$(document).ready(function(){
    $("#name, #slug").stringToSlug({
        callback: function(text){
            $("#slug").val(text);
        }
    });
});
</script>
@endsection
