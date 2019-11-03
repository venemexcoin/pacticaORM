@extends("theme1.$theme5.layouts")

@section("titles")
Usuarios nivel {{$level->name}}
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

@endsection
@section("otros1") {{-- Nompre de la ruta--}}

@endsection
@section("otros2") {{--class par poner--}}

@endsection

@section("styles")

@endsection

@section('content')

 <!-- Main content -->
 <section class="content">
        <div class="container">
                <div class="row">
                    <div class="col-12 my-3 pt-3 shadow">
                        <h3>Posts publicados por: {{$level->name}}</h3>
                        <div class="row">
                        @foreach ($posts as $video)
                            <div class="col-6">
                                <div class="card md-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                          @if($video->image)
                                        <img src="{{ $video->image->url }}" class="card-img">
                                          @else
                                          <img src="{{ asset('fron/img/bg/unlock.jpg')}}" class="elevation-2"width="100%" alt="User Image">
                                          @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                        <h5 class="card-title">{{$video->name }}</h5>
                                        <h6 class="cord-subtitle text-muted">
                                            {{$video->category->name}} |
                                            {{$video->comments_count}}
                                            {{ Str::plural('comentario', $video->comments_count )}}
                                        </h6>
                                        @if($video->tags)
                                        @foreach ($video->tags as $tag)
                                        <span class="badge badge-light">
                                            #{{ $tag->name}}
                                        </span>
                                        @endforeach
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                  </div>
                </div>
          </div>
          <!-- /poost -->
          <!-- videos -->

          <div class="container">
                <div class="row">
                    <div class="col-12 my-3 pt-3 shadow">
                    <h3>Videos publicados por: {{$level->name}}</h3>
                        <div class="row">
                        @foreach ($videos as $video)
                            <div class="col-6">
                                <div class="card md-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                          @if($video->image)
                                        <img src="{{ $video->image->url }}" class="card-img">
                                          @else
                                          <img src="{{ asset('fron/img/bg/unlock.jpg')}}" class="elevation-2"width="100%" alt="User Image">
                                          @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                        <h5 class="card-title">{{$video->name }}</h5>
                                        <h6 class="cord-subtitle text-muted">
                                            {{$video->category->name}} |
                                            {{$video->comments_count}}
                                            {{ Str::plural('comentario', $video->comments_count )}}
                                        </h6>
                                        @if($video->tags)
                                        @foreach ($video->tags as $tag)
                                        <span class="badge badge-light">
                                            #{{ $tag->name}}
                                        </span>
                                        @endforeach
                                        @endif
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                  </div>
                </div>
          </div>
           <!-- /videos -->


@endsection

@section('scripts')

@endsection





