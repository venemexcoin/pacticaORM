@extends("theme.$theme.layouts")

@section("titles")
Roles
@endsection
@section("homeD")
{{ route('admin.index')}}
@endsection
@section("homeT")
Panel Admi
@endsection

@section("styles")

@endsection

@section('content')

<h1 class="prueba">Roles system</h1>


<div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
         @can('roled.create')
         <a href="{{ route('roles.create')}}" class="btn btn-xs btn-primary ">
            crear
        </a>
         @endcan


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
                <th>Role</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td width="10px">
                @can('roles.show')
                <a href="{{ route('roles.show', $role->id) }}" class="btn btn-xs btn-default">
                        Ver
                </a>
                @endcan
                </td>
                <td width="10px">
                    @can('roles.edit')
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-xs btn-default">
                                Editar
                    </a>
                    @endcan
                </td>
                <td width="10px">
                    @can('roles.destroy')
                    {!!Form::open(['route' => ['roles.destroy', $role->id],
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
      {{ $roles->render() }}
      <!-- /.card -->
    </div>
  </div>

@endsection

@section('scripts')
<script>

</script>
@endsection
