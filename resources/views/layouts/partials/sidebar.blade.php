<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Navegacion</li>
          @guest
          
          @else
          <li class="active">
              <a href="../home"
              <i class="fa fa-link">
                </i> <span>Dashboard</span></a>
          </li>
          @if(Auth::user()->hasRole('admin')) 
              <li class="active">
                  <a href="../vertabla"
                  <i class="fa fa-link">
                    </i> <span> Usuarios</span></a>
              </li>
              <li class="active">
                  <a href="../registro_libro"
                  <i class="fa fa-link">
                    </i> <span> Libro</span></a>
              </li>
           @endif
  
           @if(Auth::user()->hasRole('user')) 
           <li class="active">
              <a href="../buscarlibro"
              <i class="fa fa-link">
                </i> <span> Buscar Libro</span></a>
          </li>
           <li class="active">
                  <a href="../vertablaL"
                  <i class="fa fa-link">
                    </i> <span> Usuarios</span></a>
              </li>
             <li class="active">
                  <a href="../vertablaP"
                  <i class="fa fa-link">
                    </i> <span>Prestamos</span></a>
              </li>
           @endif
          @endguest
          </li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>
