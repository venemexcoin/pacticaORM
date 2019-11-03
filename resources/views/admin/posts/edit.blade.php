@extends("theme1.$theme5.layouts")

@section("titles")
Ediatar Entradas
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
Entrada
@endsection

@section("styles")

@endsection

@section('content')
{!!Form::model($post, ['route' => ['posts.update', $post->id],
'method' => 'PUT','files' => true]) !!}
    @include('admin.posts.partials.form')

{!!Form::close() !!}

@endsection

@section("scripts")


@endsection
