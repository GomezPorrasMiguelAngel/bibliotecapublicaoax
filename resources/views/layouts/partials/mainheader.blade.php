<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="{{ url('/home') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">Menu</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"></span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
          {{--  @if (Auth::guest())  --}}
          @guest
          
          @else
        <!-- User Account Menu -->
        <li class="dropdown user user-menu ">
          <!-- Menu Toggle Button -->
          <a class="dropdown-toggle" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <!-- The user image in the navbar-->
            <img src="{{ asset('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">Salir</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
        @endguest
        {{--  @endif  --}}
      </ul>
    </div>
  </nav>
</header>
{{-- @section('scripts')
<script>

</script>
@endsection --}}