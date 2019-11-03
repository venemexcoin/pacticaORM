@extends("theme1.$theme5.layouts")

@section("titles")
Perfil Usuario
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


<div class="col-md-8 offset-md-2">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-info">
        <h3 class="widget-user-username">{{auth::user()->name}}</h3>
        <h5 class="widget-user-desc">{{auth::user()->email}}</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="{{auth::user()->avatar}}" alt="User Avatar">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{auth::user()->eth}}</h5>
              <span class="description-text"><a href="#">Saldo</a></span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{auth::user()->vmx}}</h5>
              <span class="description-text"><a href="#">Bonos</a></span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">350$</h5>
              <span class="description-text"><a href="#">Adeudo</a></span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->



@endsection


@section('scripts')


@endsection

