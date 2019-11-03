<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chamocell</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/fontawesome-free/css/all.min.css") }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/jqvmap/jqvmap.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("fron/$theme/dist/css/adminlte.min.css")}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/daterangepicker/daterangepicker.css")}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/summernote/summernote-bs4.css")}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!--mensajes de alerta-->
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/toastr/toastr.min.css")}}">
        <link rel="stylesheet" href="{{asset("fron/$theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
        <!-- CSS personal -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset("fron/css/app.css")}}">
    @yield('styles')

</head>
<body class="hold-transition sidebar-mini sidebar-collapse">


        <!-- Site wrapper -->
        <div class="wrapper">
          <!-- Navbar -->
          @include("theme/$theme/header")
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          @include("theme/$theme/aside")
          <!-- /. Main Sidebar Container -->

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="ftitle">@yield("titles")</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="@yield("homeD")">@yield("homeT")</a></li>
                      <li class="breadcrumb-item"><a href="#">Layout</a></li>
                      <li class="breadcrumb-item active">Collapsed Sidebar</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content ">
              <div class="container-fluid ">
                <div class="row">
                  <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools sidebar-collapse">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                      </div>
                      <div class="card-body">
                        Start creating your amazing application!
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        Footer
                      </div>
                      <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
            </section>
            @if(session('info'))

                <div class="container">
                    <div class="row">
                        <div class="clo-md-8 offset-md-2">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- /.content -->
             <!-- /.mensajes Errores-->
             @if(count($errors))
             <div class="container">
                 <div class="row">
                     <div class="clo-md-8 offset-md-2">
                         <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                         </div>
                     </div>
                 </div>
             </div>
         @endif
          <!-- /.mensajes Errores-->
            <main class="py-4">

                    @yield('content')

            </main>
          </div>
          <!-- /.content-wrapper -->
        </div>


          <!-- Footer -->
          @include("theme/$theme/footer")
          <!--/.Footer -->

        <!-- jQuery -->
        <script src="{{asset("fron/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("fron/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("fron/$theme/dist/js/adminlte.min.js")}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="{{asset("fron/$theme/plugins/summernote/summernote-bs4.min.js")}}"></script>
        <script>
            $(function () {
             // Summernote
            $('.textarea').summernote()
            })
        </script>

        <!-- AdminLTE for demo purposes -->
        <script src="{{asset("fron/$theme/dist/js/demo.js")}}"></script>
        <script src="{{asset("fron/js/app.js")}}"></script>


        @yield('scripts')

</body>
</html>



