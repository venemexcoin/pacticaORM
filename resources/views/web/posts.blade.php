@extends("theme1.$theme5.layouts")

@section("titles")
Blog
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
Foros
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
            <section class="content ">

                <div class="row">
                  <div class="col-md-8 offset-md-2">
                  @foreach ($posts as $post)

                    <!-- Default box -->
                    <div class="card">
                    <!--card header -->
                    <div class="card-header blog-header">
                        {{$post->name}}
                    </div>
                    <!--/.card header -->
                    <!--card body -->
                      <div class="card-body">
                       @if($post->file)
                       <img src="{{ $post->file }}" class="img-fluid">
                       @endif

                       {{ $post->excerpt }}

                      <a href="{{ route('post', $post->slug ) }}" class="float-right">Lee más</a>
                      <hr>
                      <p>Posted {{$post->created_at->diffForHumans() }}</p>
                      </div>
                    <!--/.card body -->
                    <!-- /.card-body -->
                      <div class="card-footer">

                      </div>
                      <!-- /.card-footer-->
                      @endforeach
                    </div>

                      {{ $posts->render()}}

                </div><hr/>
              </div>

            </section>


@endsection

@section('scripts')
<script>

</script>

@endsection

