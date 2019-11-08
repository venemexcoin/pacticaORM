@extends("theme1.$theme5.layouts")

@section("titles")
Foro descripción
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
            <div class="col-md-8 offset-md-2">
            <h2>{{ $chat->title }}</h2>
                <p>{{$chat->description }}</p>
                <br>
            <label><a href=" {{ $chat->url }}"> {{ $chat->url }}</a> </label>

                <p>Posted {{$chat->created_at->diffForHumans() }}.</p>


                <label><a href="{{ route('profil',  [$chat->user->id])}}"> Publicado por: {{ $chat->user->name }}</a></label>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">

             @if(Auth::guest())

             please log in to you accound to comment,

             @else

                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-primary">
                         <div class="card-header">
                            <h3 class="card-title">Direct Chat</h3>
                                <div class="card-tools">
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                    </button>
                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i>
                                 </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                         <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            @foreach ($chat->comments as $comment)
                            <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">{{ $comment->user->name}}</span>
                                        <span class="direct-chat-timestamp float-right">{{$comment->created_at->diffForHumans() }}</span>
                                    </div>
                                     <!-- /.direct-chat-infos -->

                                        <div class="image">
                                     @if($chat->user->avatar == 'php artisan ')
                                     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                     <div class="image">
                                        <img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image">
                                           </div>
                                     </div>
                                     @else

                                            <img class="direct-chat-img" src="{{ $comment->user->avatar }}" alt="message user image">
                                     @endif
                                        </div>

                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                            {{ $comment->body}}
                                          </div>
                                          <!-- /.direct-chat-text -->

                            </div>
                            @endforeach


                            </div>
                            <!--/.direct-chat-messages-->
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                            <form action="{{ route('create_comment_path', ['chat' => $chat->id]) }}" method="POST">
                                    @csrf
                        <div class="input-group">
                          <input type="text" name="comment" placeholder="Type Message ..." class="form-control">
                          <input type="hidden" name="nombredato" value="App\Chat">
                          <span class="input-group-append">
                            <button type="sudmit" class="btn btn-primary">Send</button>
                          </span>
                        </div>
                      </form>
                    </div>
                    <!-- /.card-footer-->
                  </div>
                  <!--/.direct-chat -->

            @endif
            </div>
        </div>

    </div>
</div>

@endsection

@section('scripts')

@endsection
