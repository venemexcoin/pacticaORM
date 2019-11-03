@extends("theme1.$theme5.layouts")

@section("titles")
Crear Entradas
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
{!!Form::open(['route' => 'posts.store', 'files' => true]) !!}

    @include('admin.posts.partials.form')

{!!Form::close() !!}

@endsection

@section("scripts")


@endsection
