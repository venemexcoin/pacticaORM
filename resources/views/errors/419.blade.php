@extends("errors/$theme3/419/layouts")

@section("titles")
419 Error Page
@endsection
@section("homeD")
{{ route('login')}}
@endsection
@section("homeT")
Panel Admi
@endsection

@section("styles")

@endsection

@section('content')
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
                  <li class="breadcrumb-item active">419 Error Page</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="error-page">
            <h2 class="headline text-warning"> 419</h2>

            <div class="error-content">
              <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! your section has expired.</h3>

              <p>This session has expired due to inactive time
                    Please try to login.
                In the meantime, you can <a href={{'home'}}"> go back to the login page </a> or register your
                 account.</p>

              <form class="search-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
                <!-- /.input-group -->
              </form>
            </div>
            <!-- /.error-content -->
          </div>
          <!-- /.error-page -->
        </section>
        <!-- /.content -->
      </div>


@endsection

@section("scripts")

@endsection


