@extends("theme1.$theme5.layouts")

@section("titles")
Crear 
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("homeL")
{{ route('user.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
blog
@endsection

@section("styles")

@endsection

@section('content')

{!!Form::open(['route' => 'products.store','files' => true]) !!}
    @include('products.partials.form')

{!!Form::close() !!}

@endsection
