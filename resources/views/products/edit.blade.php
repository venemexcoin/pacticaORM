@extends("theme1.$theme5.layouts")

@section("titles")
Product Edit
@endsection
@section("homeD")
{{ route('products.index')}}
@endsection
@section("homeT")
Productos
@endsection

@section("styles")

@endsection

@section('content')

{!!Form::model($product, ['route' => ['products.update', $product->id],
'method' => 'PUT']) !!}
    @include('products.partials.form')

{!!Form::close() !!}

@endsection
