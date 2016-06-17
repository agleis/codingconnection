<!DOCTYPE html>
<html>
  @include('includes/head')
  <body>
    <header>
      @include('includes/frontnav')
    </header>
    @include('includes/frontsidebar')

    @yield('content')
  </body>
</html>
