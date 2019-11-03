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

<h1 class="prueba">User system</h1>


<div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Nombre</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td width="12px">
                @can('users.show')
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-xs btn-default">
                        Ver
                </a>
                @endcan
                </td>
                <td width="12px">
                    @can('users.edit')
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-default">
                                Editar
                    </a>
                    @endcan
                </td>
                <td width="12px">
                    @can('users.destroy')
                    {!!Form::open(['route' => ['users.destroy', $user->id],
                    'method' => 'DELETE'])!!}
                        <button class="btn btn-xs btn-danger">
                            Eliminar
                        </button>
                    {!!Form::close() !!}
                    @endcan
                </td>

                </tr>
                @endforeach
            </tbody>
          </table>

        </div>

        <!-- /.card-body -->
      </div>
      {{ $users->render() }}
      <!-- /.card -->
    </div>
  </div>

  @endsection


  @section("scripts")

  @endsection
