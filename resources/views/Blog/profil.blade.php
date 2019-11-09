@extends("theme1.$theme5.layouts")

@section("titles")
{{$user->name}}
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

 <!-- Main content -->
 <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Perfil personal</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>

            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Numero de Post</span>
                        <span class="info-box-number text-center text-muted mb-0">20</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">comentarios</span>
                        <span class="info-box-number text-center text-muted mb-0">2000</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Nivel</span>
                      <span class="info-box-number text-center text-muted mb-0">
                        @if($user->level)
                      <a href="{{route('level', $user->level->id)}}">
                        {{$user->level->name}}
                      </a> <span>
                        @else
                        ----
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <h4>Recent Activity</h4>
                      <div class="video">
                        <div class="user-block">
                            @if($user->avatar)
                            <img class="img-circle" src="{{$user->avatar}}" alt="User Image">
                            @else
                            <img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image">
                            @endif
                          <span class="username">
                            <a href="#">{{$user->name}}</a>
                          </span>
                          <br>
                          <span class="description"><p><b>Usuario desde</b> {{$user->created_at->diffForHumans() }}</span>
                        </div>
                        <!-- /.user-block -->
                        <br>
                        <br>
                        <br>
                        <p><br> <strong>Grupos a los que pertenece:</strong></p>

                            @forelse ($user->groups as $group)
                                <span class="badge badge-primary">{{ $group->name }}</span>
                            @empty

                          <span class="badge badge-primary"><b>NO pertenese a ningun grupo</b></span>
                            @endforelse
                        <p>
                          <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                        </p>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur enim et sed necessitatibus eos,
                           est quam consequatur voluptate perferendis modi porro omnis, explicabo praesentium rerum vitae dolores
                            quisquam hic.</p>

                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <h3 class="text-primary"><i class="fas fa-paint-brush"></i>Biografía</h3>
                <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                <br>
                <div class="text-muted">
                  <p class="text-sm">Imagen Cliente</p>
                   @if($user->image)
                   <img src="{{$user->image->url}}"class="d-block float-center rounded-circle mr-3">
                    @else
                  <img src="{{ asset('fron/img/bg/unlock.jpg')}}" class="img-circle elevation-2"width="30%" alt="User Image">
                    @endif
                    <br/>
                  <p class="text-sm">Pais
                   @if( $user->location)
                   <b class="d-block">{{ $user->location->country }}</b>
                   @else
                  <b class="d-block">País Desconocido</b>
                  @endif
                  </p>
                </div>

                <h5 class="mt-5 text-muted">Project files</h5>
                <ul class="list-unstyled">
                  <li>
                  @if($user->profile )
                  <a href="{{url($user->profile->facebook)}}" class="btn-facebook"><i class="fa fa-facebook"></i>acebook</a>
                  @else
                  <i class="far fa-fw fa-facebook"></i><b>No tiene Facebook</b>
                  @endif
                 </li>
                  <li>
                    @if($user->profile)
                    <a href="{{url($user->profile->instagram)}}" class="btn-instagram"><i class="fa fa-instagram"></i>instagram</a>
                    @else
                    <i class="far fa-fw fa-instagram"></i><b>No tiene Instagram</b>
                    @endif
                </li>
                  <li>
                    @if($user->email)
                    <i class="far fa-fw fa-envelope"></i>{{$user->email}}</a>
                    @else
                    <i class="far fa-fw fa-image"></i><b>No tiene correo</b>
                    @endif
                  </li>
                  <li>
                    @if($user->profile)
                    <a href="" class="btn-link text-secondary"><i class="fas fa-mobile-alt "></i> {{ $user->profile->telefon}}</a>
                    @else
                     <i class="far fa-fw fa-image"></i><b>No tiene Teléfono</b>
                    @endif
                </li>
                  <li>
                    @if($user->profile)
                        <a href="" class="btn-link text-secondary"><i class="fas fa-at"></i> {{ $user->profile->web}}</a>
                    @else
                    <i class="far fa-fw fa-image"></i><b>No tiene Pagina Web</b>
                    @endif
                </li>
                </ul>
                <div class="text-center mt-5 mb-3">
                  <a href="#" class="btn btn-sm btn-primary">Add files</a>
                  <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
      <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">
                <h3>Posts publicados por: {{$user->name}}</h3>
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
                    <h3>Videos publicados por: {{$user->name}}</h3>
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

