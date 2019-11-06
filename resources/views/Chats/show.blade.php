@extends("theme1.$theme5.layouts")

@section("titles")
Chat descripción
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2>{{ $chat->title }}</h2>
                <p>{{$chat->description }}</p>
                <br>
            <label><a href=" {{ $chat->url }}"> {{ $chat->url }}</a> </label>

                <p>Posted {{$chat->created_at->diffForHumans() }}.</p>

                <br>
                <label><a href="{{ route('profil',  [$chat->user->id])}}"> Publicado por: {{ $chat->user->name }}</a></label>

            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
