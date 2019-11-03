@extends("theme1.$theme5.layouts")

@section("titles")
Ediatar usuario
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("homeL")
{{ route('users.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Usuarios
@endsection

@section("styles")

@endsection

@section('content')

{!!Form::model($user, ['route' => ['users.update', $user->id],
'method' => 'PUT','files' => true]) !!}
    @include('users.partials.form')

{!!Form::close() !!}

@endsection
