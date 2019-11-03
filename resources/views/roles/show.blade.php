@extends("theme.$theme.layouts")

@section("titles")
Roles
@endsection
@section("homeD")
{{ route('roles.index')}}
@endsection
@section("homeT")
Roles
@endsection

@section("styles")

@endsection

@section('content')
<div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              ID del Producto: {{ $role->id}}
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>Nombre del roleo</h5>

            <p>{{ $role->name }}</p>
            </div>
            <div class="callout callout-info">
                    <h5>slug de la ruta</h5>

                    <p>{{$role->slug}}</p>
                  </div>
            <div class="callout callout-info">
              <h5>Descripción de roleo</h5>

              <p>{{$role->description}}</p>
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
@endsection
