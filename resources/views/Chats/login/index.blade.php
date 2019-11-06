<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("fron/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("fron/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="#"><b>Chamocell</b>Chat</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">{{ Auth::user()->name }}</div>

  <!-- START LOCK SCREEN ITEM -->

  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image user-panel mt-3 pb-3 mb-4 d-flex">
     @if(Auth::user()->avatar == '')
        <a href="3"><img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image"></a>
     @else
      <img src="{{Auth::user()->avatar }}" class="img-circle elevation-2">
     @endif
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
        {!!Form::open(['route' => 'chatlogin.store','class' => 'lockscreen-credentials']) !!}
         <div class="input-group">


          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'UserChat']) !!}

          {!!Form::close() !!}
        <div class="input-group-append">
          <button type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>

      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>

  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Coloque el nombre de su usuario en el chat
  </div>
  <div class="text-center">
    <a href="login.html">Regresar </a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2019 <b><a href="http://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="{{asset("fron/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("fron/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>








