@extends("theme1.$theme5.layouts")

@section("titles")
Categorias
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("homeL")
{{ route('blog')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
blog
@endsection

@section("styles")

@endsection

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Categorías</h3>
          @can('categories.create')
        <a href="{{route("categories.create")}}" class="btn btn-sm btn-primary float-right">Crear</a>
          @endcan
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Nombre</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                @can("categories.show")
                    <td width="10px">
                    <a href="{{ route("categories.show", $category->id)}}" class="btn btn-sm btn-defaul">
                        <span class="botonV">Ver</span>
                    </a>
                    </td>
                @endcan
                @can("categories.edit")
                <td width="10px">
                <a href="{{ route("categories.edit", $category->id)}}" class="btn btn-sm btn-defaul">
                    <span class="botonE">Edit</span>
                </a>
                </td>
                @endcan
                @can("categories.")
                <td width="10px">
                    {!! Form::open(['route' => ['categories.destroy', $category->id],
                    'method' => 'DELETE'])!!}
                        <button class="btn btn-sm btn-defaul">
                                <span class="botonD">Eliminar</span>
                        </button>
                    {!!Form::close()!!}
                </td>
                @endcan
                </tr>
                @endforeach

            </tbody>
          </table>

        </div>
        <!-- /.card-body -->
      </div>
      {{ $categories->render() }}
      <!-- /.card -->
    </div>
  </div>

@endsection


@section("scripts")

@endsection
