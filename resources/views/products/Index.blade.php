@extends("theme1.$theme5.layouts")

@section("titles")
Permisos
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

<h1 class="prueba">Product system</h1>


<div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
         @can('productd.create')
         <a href="{{ route('products.create')}}" class="btn btn-xs btn-primary ">
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
                <th>Nombre</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td width="10px">
                @can('products.show')
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-xs btn-default">
                        Ver
                </a>
                @endcan
                </td>
                <td width="10px">
                    @can('products.edit')
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-xs btn-default">
                                Editar
                    </a>
                    @endcan
                </td>
                <td width="10px">
                    @can('products.destroy')
                    {!!Form::open(['route' => ['products.destroy', $product->id],
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
      {{ $products->render() }}
      <!-- /.card -->
    </div>
  </div>

@endsection

@section('scripts')
<script>

</script>
@endsection
