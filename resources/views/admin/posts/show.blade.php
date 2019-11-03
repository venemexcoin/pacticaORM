@extends("theme1.$theme5.layouts")

@section("titles")
Ver Entrada
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('posts.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Entradas
@endsection

@section("styles")

@endsection

@section('content')
<div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              ID de Entradas : {{ $post->id}}
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>Nombre la entrada</h5>
            <p>{{ $post->name }}</p>
            </div>

            <div class="callout callout-info">
              <h5>Url amigable</h5>
              <p>{{$post->slug }}</p>
            </div>

            <div class="callout callout-warning">
                    <h5>Titulo de la entrada</h5>
                    <p>{{$post->excerpt }}</p>
                  </div>

            <div class="callout callout-success">
                    <h5>Contenido de la entrada</h5>
                    <p>{{$post->body}}</p>
                </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

@endsection

@section("scripts")


@endsection
