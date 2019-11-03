@extends("theme.$theme.layouts")

@section("titles")
Roles Edit
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

{!!Form::model($role, ['route' => ['roles.update', $role->id],
'method' => 'PUT']) !!}
    @include('roles.partials.form')

{!!Form::close() !!}

@endsection
