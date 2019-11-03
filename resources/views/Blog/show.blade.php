@extends("theme1.$theme5.layouts")

@section("titles")
Blog Perfil Usuario
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

@section("styles")

@endsection
@section('content')
 <div class="row">
     <div class="col-12">
     <h1>{{ $user->name }}</h1>
     <h3>{{ $user->email }}</h3>
     </div>
 </div>
@endsection


@section('scripts')


@endsection

