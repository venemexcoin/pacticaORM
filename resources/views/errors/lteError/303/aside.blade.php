 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
          <img src="{{asset("fron/$theme/dist/img/AdminLTELogo.png")}}"
               alt="AdminLTE Logo"
               class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light chamocell">Chamocell</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth::user()->avatar == '')
                <a href="#"><img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image"></a>
                @else
                 <img src="{{Auth::user()->avatar }}" class="img-circle elevation-2">
                @endif
                   </div>
                   <div class="info">
                     <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>
           
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div>
                <a href="#" class="d-block"><span class="saldo">Tu saldo en ETH es:<br/> {{ Auth::user()->eth }}</span></a>
        </div>
    </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->



              <li class="nav-item has-treeview">
                  @can('admin.index')
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Administración
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                    @endcan


                <ul class="nav nav-treeview">
                    @can('products.index')
                  <li class="nav-item">
                  <a href="{{ route('products.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Productos</p>
                    </a>
                  </li>
                  @endcan
                  @can('users.index')
                  <li class="nav-item">
                    <a href="{{ route('users.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Usuarios</p>
                    </a>
                  </li>
                  @endcan
                  @can('roles.index')
                  <li class="nav-item">
                    <a href="{{ route('roles.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roles</p>
                    </a>
                  </li>
                  @endcan
                </ul>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{ route('logout')}}" class="nav-link"
                    onclick="event.preventDefault();
                                document.getElementById('loguot-form').submit();">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login</p>
                    </a>
                <form id="loguot-form" action="{{ route('logout') }}" method="POST"
                        style="display:none">
                        @csrf
                    </form>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
