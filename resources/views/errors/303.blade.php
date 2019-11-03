@extends("errors/$theme6/303/layouts")

@section("titles")
Error 303
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active">303 Error Page</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="error-page">
            <h2 class="headline text-danger">303</h2>

            <div class="error-content">
              <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

              <p>
                We will work on fixing that right away.
              Meanwhile, you may <a href="{{'home'}}">return to dashboard</a> or try using the search form.
              </p>

              <form class="search-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
                <!-- /.input-group -->
              </form>
            </div>
          </div>
          <!-- /.error-page -->

        </section>
        <!-- /.content -->
      </div>
@endsection

@section("scripts")

@endsection
