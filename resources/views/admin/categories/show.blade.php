@extends("theme1.$theme5.layouts")

@section("titles")
Ver Etiquetas
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('categories.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Categorías
@endsection

@section("styles")

@endsection

@section('content')
<div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              ID del Producto: {{ $category->id}}
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>Nombre de la Etiqueta</h5>

            <p>{{ $category->name }}</p>
            </div>
            <div class="callout callout-info">
              <h5>Url amigable</h5>

              <p>{{$category->slug }}</p>
            </div>
            <div class="callout callout-success">
                    <h5>body de categorías</h5>
                    <p>{{$category->body}}</p>
                </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

@endsection

@section("scripts")


@endsection
