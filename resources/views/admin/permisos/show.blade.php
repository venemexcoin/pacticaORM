@extends("theme1.$theme5.layouts")

@section("titles")
Ver Permisos
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('admin.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Permission
@endsection

@section("styles")

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-3 pt-3 shadow">
            <div class="col-md-6">
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-bullhorn"></i>
                      ID del Permiso: {{ $permiso->id }}
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="callout callout-danger">
                      <h5>Nombre del permiso</h5>

                    <p>{{ $permiso->name }}</p>
                    </div>
                    <div class="callout callout-info">
                      <h5>Url amigable</h5>

                      <p>{{$permiso->slug }}</p>
                    </div>
                    <div class="callout callout-success">
                            <h5>Descripcion del permido</h5>
                            <p>{{$permiso->description}}</p>
                        </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
        </div>
    </div>
</div>

@endsection

@section("scripts")

@endsection
