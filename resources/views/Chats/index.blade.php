@extends("theme1.$theme5.layouts")

@section("titles")
Foro
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('blog')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Blog
@endsection
@section("otros")  {{--} ruta--}}
{{ route('chat.create')}}
@endsection
@section("otros1") {{-- Nompre de la ruta--}}

Crear

@endsection
@section("otros2") {{--class par poner--}}
breadcrumb-item active
@endsection

@section("styles")

@endsection

@section('content')

 <!-- Main content -->
 <section class="content">

     <div class="container">
         <div class="row">
             <div class="col-md-8 offset-md-2">
        @foreach ($chats as $chat)
            <div class="row">
                    <div class="user-block">
                            @if($chat->user->avatar)
                            <img class="img-circle" src="{{$chat->user->avatar}}" alt="User Image">
                            @else
                            <img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image">
                            @endif
                    </div>

                <div class="col-md-12">
                <br>
                <h2><a href="{{ route('chat.show', ['chat' => $chat->id]) }}">{{$chat->title}}</a> </h2>


                     @if($chat->wasCreatedBy(Auth::user() ))  {{--metodo de validacion creado en chat.php --}}

                    <small class="float-right">

                        <a href="{{ route('chat.edit', $chat->id) }}" class="btn btn-block btn-primary btn-xs">
                                    Editar
                        </a>

                        @can('chat.destroy')

                        {!!Form::open(['route' => ['chat.destroy', $chat->id],
                        'method' => 'DELETE'])!!}
                            <button class="btn btn-xs btn-danger">
                                Eliminar
                            </button>
                        {!!Form::close() !!}
                        @endcan
                    </small>

                    @endif

                <p>Posted {{$chat->created_at->diffForHumans() }} by {{ $chat->user->name }} </p>
                </div>
            </div>
        <hr>

     @endforeach

            {{ $chats->render() }}
    </div>
     </div>
     </div>

 @endsection

@section('scripts')

@endsection
