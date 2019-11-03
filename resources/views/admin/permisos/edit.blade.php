@extends("theme1.$theme5.layouts")

@section("titles")
Crear permisos
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
Permisos
@endsection

@section("styles")

@endsection

@section('content')
{!!Form::model($permiso, ['route' => ['admin.update', $permiso->id],
'method' => 'PUT']) !!}
    @include('admin.permisos.partials.form')

{!!Form::close() !!}

@endsection

@section("scripts")


@endsection
