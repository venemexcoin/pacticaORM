{{ Form::hidden('user_id', auth()->user()->id) }}



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
                                            {!! Form::label('category_id', 'Categorías')!!}
                                            {!!Form::select('category_id', $categories, null, ['class' => 'form-control'])!!}
                                        </div>
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombre del Entrada', ['class' => 'etiquetaF']) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group">
                                            {{ Form::label('slug', 'Slug de entrada', ['class' => 'etiquetaF']) }}
                                            {{ Form::text('slug', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imagen</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                  {{Form::file('image',['class' => 'custom-file-input', 'id' => 'exampleInputFile'])}}
                                                <label class="custom-file-label" for="exampleInputFile">image file</label>
                                              </div>
                                              <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('status', 'Estado') }} <br/>
                                        <label>
                                            {{ Form::radio('status', 'PUBLISHED')}}  Publicado
                                        </label>
                                        <label>
                                            {{ Form::radio('status', 'DRAFT')}}  Borrador
                                        </label>
                                    </div>
                                    <!--chech box-->
                                    <div class="form-group">
                                        {{ Form::label('tags', 'Etiquetas') }}
                                        <div>
                                            @foreach ($tags as $tag)
                                                <label>
                                                    {{Form::checkbox('tags[]', $tag->id)}} {{ $tag->name }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>


                                    <div class="form-group">
                                            {{ Form::label('excerpt', 'Titulo de entrada', ['class' => 'etiquetaF']) }}
                                            {{ Form::textarea('excerpt', null, ['class' => 'form-control titleC', 'rows' => '2']) }}
                                    </div>
                                    <!-- Main content -->
                                    <section class="content">
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                    {{ Form::label('body', 'Descripción de las entradas ', ['class' => 'etiquetaF']) }}

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
                                                    {{-- <p class="text-sm mb-0">
                                                         Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                                                        information.</a>
                                                    </p> --}}

                                                    <div class="form-group">
                                                            <label for="exampleInputFile">.zip .rar</label>
                                                                <div class="input-group">
                                                                  <div class="custom-file">
                                                                      {{Form::file('zip',['class' => 'custom-file-input', 'id' => 'exampleInputFile'])}}
                                                                    <label class="custom-file-label" for="exampleInputFile">Archivo file</label>
                                                                  </div>
                                                                  <div class="input-group-append">
                                                                    <span class="input-group-text" id="">Upload</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                </div>

                                            </div>
                                             <!-- /.col-->
                                            </div>
                                         <!-- ./row -->
                                         <div class="row">
                                                <div class="col-5">
                                                        {{ Form::label('price', 'Precio de archivo', ['class' => 'etiquetaF']) }}
                                                        {{ Form::text('price', null, ['class' => 'form-control']) }}

                                                      </div>
                                                      <div class="col-5">
                                                            {{ Form::label('cripto', 'Precio de archivo en cripto', ['class' => 'etiquetaF']) }}
                                                            {{ Form::text('cripto', null, ['class' => 'form-control']) }}

                                                          </div>
                                              </div>
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

