@extends("theme1.$theme5.layouts")

@section("titles")
Crear Entrada
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('tags.index')}}
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
{!!Form::model($tag, ['route' => ['tags.update', $tag->id],
'method' => 'PUT']) !!}
    @include('admin.tags.partials.form')

{!!Form::close() !!}

@endsection

@section("scripts")


@endsection
