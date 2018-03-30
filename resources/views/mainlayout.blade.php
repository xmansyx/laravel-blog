<!doctype html>
<html lang="en">

  @include('Partials._head')

  <body>
    
    @include('Partials._navbar')
        
      <!-- the container -->
      <div class="container">
        @if(Session::has("success"))
        <div class="alert alert-success">
          success {{Session::get('success')}}
        </div>
        @endif
        
        @yield('content')
        
      </div>

    <!-- Optional JavaScript -->
    @include('Partials/_script')

  </body>
</html>