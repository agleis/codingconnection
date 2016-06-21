<!DOCTYPE html>
<html>
  @include('includes/head')
  <body>
    <div class="page-wrap">
      <header>
        @include('includes/frontnav')
      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            @include('includes/frontsidebar')
          </div>
          <div class="col-md-9">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    @include('includes/footer')
  </body>
</html>
