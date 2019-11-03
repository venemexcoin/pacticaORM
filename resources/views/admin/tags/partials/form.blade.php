<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8 offset-md-2">

                    <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Formulario categorías</h3>
                            </div>
                            <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombre del categorías', ['class' => 'etiquetaF']) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'id ' => 'name']) !!}

                                    </div>
                                    <div class="form-group">
                                            {{ Form::label('slug', 'Url amigable', ['class' => 'etiquetaF']) }}
                                            {{ Form::text('slug', null, ['class' => 'form-control', 'id ' => 'slug']) }}
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
