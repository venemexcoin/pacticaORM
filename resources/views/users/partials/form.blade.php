@section('styles')
<link rel="stylesheet" href="{{ asset("fron/vendor/bootstrap-fileinput/css/fileinput.min.css")}}">
@endsection
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
                                        {!! Form::label('name', 'Nombre del Usuario', ['class' => 'etiquetaF']) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}

                                    </div>

                                    <h3 class="formuclas mt-5">Lista de roles</h3>
                                    <div class="form-group">
                                        <ul>
                                        @foreach ($roles as $role)

                                        <label>
                                            {{ Form::checkbox('roles[]', $role->id, null) }}
                                            {{ $role->name }}
                                            <em>({{ $role->description ?: 'N/A' }})</em>

                                        </label>
                                        <br>

                                        @endforeach
                                        </ul>
                                    <hr>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('email', 'Email del cliente', ['class' => 'etiquetaF']) }}
                                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('btc', 'Saldo en Bitcoin del cliente', ['class' => 'etiquetaF']) }}
                                        {{ Form::text('btc', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('eth', 'Saldo en Ethereum del cliente', ['class' => 'etiquetaF']) }}
                                        {{ Form::text('eth', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vmx', 'Saldo en VenemexCoin del cliente', ['class' => 'etiquetaF']) }}
                                        {{ Form::text('vmx', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('usd', 'Saldo en Dolar EEUU del cliente', ['class' => 'etiquetaF']) }}
                                        {{ Form::text('usd', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('mxn', 'Saldo en Pesos Mexicanos del cliente', ['class' => 'etiquetaF']) }}
                                        {{ Form::text('mxn', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('bss', 'Saldo en Bolivares S del cliente', ['class' => 'etiquetaF']) }}
                                        {{ Form::text('bss', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            {{ Form::label('avatar', 'archivo')}}
                                            {{ Form::file('avatar')}}
                                        </div>
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

 <script>

 </script>
</section>
@section('scripts')

@endsection




