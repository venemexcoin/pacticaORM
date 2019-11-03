@extends("theme1.$theme5.layouts")

@section("titles")
Crear Etiquetas
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
Etiquetas
@endsection

@section("styles")

@endsection

@section('content')
{!!Form::open(['route' => 'tags.store']) !!}

    @include('admin.tags.partials.form')

{!!Form::close() !!}

@endsection

@section("scripts")


@endsection
