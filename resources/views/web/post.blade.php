@extends("theme1.$theme5.layouts")

@section("titles")
Blog
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('blog')}}
@endsection
@section("otros")  {{--} ruta--}}

@endsection
@section("otros1") {{-- Nompre de la ruta--}}

@endsection
@section("otros2") {{--class par poner--}}

@endsection
@section("homeT")
Home
@endsection
@section("layout")
Blog
@endsection

@section("styles")

@endsection
@section('content')
<div class="row">
<div class="col-md-8 offset-md-2">
    <!-- Box Comment -->
    <div class="card card-widget">
      <div class="card-header">
        <div class="user-block">
            @if($post->user->avatar == '')
                <img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image">
            @else
          <img class="img-circle" src="{{$post->user->avatar}}" alt="User Image">
            @endif

        <span class="username"><p><a href="{{ route('profil',  [$post->user->id])}}"><b>{{$post->user->name }}</b></a></p>
          <span class="description">{{$post->name}}</span>
          <hr>
           <span class="blog-header">Categorías</span>
           <br>
        <a href="{{ route('category',$post->category->slug) }}">{{ $post->category->name }}</a>
        </div>
        <!-- /.user-block -->
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
            <i class="far fa-circle"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>


        </div>
        <!-- /.card-tools -->

      </div>
      <!-- /.card-header -->
      <div class="card-body">
          @if($post->file)
        <img class="img-fluid pad" src="{{asset("$post->file")}}" alt="Photo)}}">
          @endif

        <p>{!!$post->body !!}</p>
        <hr>
         <span>Etiquetas</span>
         @foreach ($post->tags as $tag)
         <a href="{{ route('tag',$tag->slug) }}">
            {{$tag->name }}
         </a>

         @endforeach
        <hr>
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
        <span class="float-right text-muted">127 likes - 3 comments</span>
      </div>
      {{-- <!-- /.card-body -->
      <div class="card-footer card-comments">
        <div class="card-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="{{asset("fron/$theme/dist/img/user3-128x128.jpg")}}" alt="User Image">

          <div class="comment-text">
            <span class="username">
              Maria Gonzales
              <span class="text-muted float-right">8:03 PM Today</span>
            </span><!-- /.username -->
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.card-comment -->
        <div class="card-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="{{asset("fron/$theme/dist/img/user4-128x128.jpg")}}" alt="User Image">

          <div class="comment-text">
            <span class="username">
              Luna Stark
              <span class="text-muted float-right">8:03 PM Today</span>
            </span><!-- /.username -->
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.card-comment -->
      </div>
      <!-- /.card-footer --> --}}
      {{-- <div class="card-footer">
        <form action="#" method="post">
          <img class="img-fluid img-circle img-sm" src="{{asset("fron/$theme/dist/img/user4-128x128.jpg")}}" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
          </div>
        </form>
      </div>
      <!-- /.card-footer --> --}}

        </div>
    <!-- /.card -->
  </div>
</div>
@endsection

@section('scripts')
<script>

</script>

@endsection





