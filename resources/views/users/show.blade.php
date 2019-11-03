@extends("theme1.$theme5.layouts")

@section("titles")
Ver Usuarios
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("homeL")
{{ route('users.index')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
User
@endsection

@section("styles")

@endsection

@section('content')
<div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              ID del Usuario: {{ $user->id}}
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-success">
              <h5>Nombre del usuario</h5>

            <p>{{ $user->name }}</p>
            </div>
            <div class="callout callout-success">
              <h5>Email de usuario</h5>

              <p>{{$user->email}}</p>
            </div>
            <div class="callout callout-danger">
                <h5>Saldo Bitcoin</h5>

                <p>{{$user->btc}}</p>
            </div>
            <div class="callout callout-danger">
                <h5>Saldo Ethereum</h5>

                <p>{{$user->eth}}</p>
            </div>
            <div class="callout callout-danger">
                <h5>Saldo VenemexCoin</h5>

                <p>{{$user->vmx}}</p>
            </div>
            <div class="callout callout-info">
                <h5>Saldo Dolar EEUU</h5>

                <p>{{$user->usd }}</p>
            </div>
            <div class="callout callout-info">
                <h5>Saldo Pesos Mexicanos</h5>

                <p>{{$user->mxn}}</p>
            </div>
            <div class="callout callout-info">
                <h5>Saldo Bolivares S</h5>

                <p>{{$user->bss}}</p>
            </div>
            <div class="callout callout-warning">
                <h5>Avatar</h5>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <!--imagen del avatar---->

              @if($user->avatar == '')
                 <img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image">
              @else
               <img src="{{$user->avatar }}" class="img-circle elevation-3">
              @endif
                 </div>
                </div>
                    <div class="info">
                    <a href="#" class="d-block">{{$user->profile->facebook }}</a>
                    </div>
                  </div>
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
@endsection
