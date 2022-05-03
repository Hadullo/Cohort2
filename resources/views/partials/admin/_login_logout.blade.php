
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">


            <ol class="breadcrumb float-sm-right">


                @if(Route::has ('login'))
                @auth
                    @if(Auth::user()->utype==='ADM')


            <div class="dropdown">
                <button class="dropbtn"> <li class=""><a href="{{route('login')}}"><i class='fa fa-user' style="font-size:20px"></i>&nbsp;&nbsp;({{ Auth::user()->name }})</a></li></button>
                <div class="dropdown-content">
                    <a href="">Edit Profile</a>
                    <li><a href="{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'></i>Log Out</a></li>
                    <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                       @csrf
                   </form>
                   @else

                   <li class=""><a href="{{route('login')}}">My Account({{ Auth::user()->name }})</a></li>

                   <li><a href="{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'></i>Log Out</a></li>
                    <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                       @csrf</form>

                    @endif

                </div>
              </div>


                @else
                <li><a href="{{ route('login') }}">Log In</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
             @endif

            </ol>



          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
