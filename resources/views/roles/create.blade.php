@extends("theme.$theme.layouts")

@section("titles")
Roles New
@endsection
@section("homeD")
{{ route('roles.index')}}
@endsection
@section("homeT")
Productos
@endsection

@section("styles")

@endsection

@section('content')

{!!Form::open(['route' => 'roles.store']) !!}
    @include('roles.partials.form')

{!!Form::close() !!}

@endsection
