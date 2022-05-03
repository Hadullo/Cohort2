@include('partials.admin._head')
@include('partials.admin._header')
@include('partials.admin._sidebar')
@include('partials.admin._login_logout')

        <div class="content">
          @yield('content')
       </div>

@include('partials.admin._footer')
