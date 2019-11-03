@extends("theme1.$theme5.layouts")

@section("titles")
Crear Etiquetas
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('categories.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
categorías
@endsection

@section("styles")

@endsection

@section('content')
{!!Form::open(['route' => 'categories.store']) !!}
    @include('admin.categories.partials.form')

{!!Form::close() !!}

@endsection

@section("scripts")


@endsection
