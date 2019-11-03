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


        <!-- CSS personal -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset("fron/css/app.css")}}">
    @yield('styles')

</head>
<body class="hold-transition sidebar-mini sidebar-collapse">


        <!-- Site wrapper -->
        <div class="wrapper">
          <!-- Navbar -->
          @include("errors/$theme2/404/header")
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          @include("errors/$theme2/404/aside")
          <!-- /. Main Sidebar Container -->

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="e404title">@yield("titles")</h1>
                  </div>

                </div>
              </div><!-- /.container-fluid -->
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
            <main class="py-4">

                    @yield('content')

            </main>
          </div>
          <!-- /.content-wrapper -->
        </div>


          <!-- Footer -->
          @include("errors/$theme2/404/footer")
          <!--/.Footer -->

        <!-- jQuery -->
        <script src="{{asset("fron/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("fron/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("fron/$theme/dist/js/adminlte.min.js")}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


        <!-- AdminLTE for demo purposes -->
        <script src="{{asset("fron/$theme/dist/js/demo.js")}}"></script>
        <script src="{{asset("fron/js/app.js")}}"></script>


        @yield('scripts')

</body>
</html>



