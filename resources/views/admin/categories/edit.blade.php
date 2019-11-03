@extends("theme1.$theme5.layouts")

@section("titles")
Crear categorías
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
Categorías
@endsection

@section("styles")

@endsection

@section('content')
{!!Form::model($category, ['route' => ['categories.update', $category->id],
'method' => 'PUT']) !!}
    @include('admin.categories.partials.form')

{!!Form::close() !!}

@endsection

@section("scripts")


@endsection
