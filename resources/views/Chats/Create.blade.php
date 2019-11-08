@extends("theme1.$theme5.layouts")

@section("titles")
Foro Create
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('chat.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Foro
@endsection
@section("otros")  {{--} ruta--}}

@endsection
@section("otros1") {{-- Nompre de la ruta--}}

@endsection
@section("otros2") {{--class par poner--}}

@endsection

@section("styles")

@endsection

@section('content')

<div class="container">

    {!!Form::open(['route' => 'chat.store','files' => true]) !!}
        @include('Chats.partials.form')

    {!!Form::close() !!}




@endsection

@section('scripts')

@endsection
