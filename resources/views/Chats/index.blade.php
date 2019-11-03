@extends("theme1.$theme5.layouts")

@section("titles")
Chat
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
        <div class="col-md-12">
            <h2>Title</h2>
            <p>Posted 5 hours ago.</p>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Title</h2>
                 <p>Posted 5 hours ago.</p>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Title</h2>
                 <p>Posted 5 hours ago.</p>
        </div>
    </div>
</div>


 @endsection

@section('scripts')

@endsection
