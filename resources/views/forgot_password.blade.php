<!Doctype html>
<html>
	@include('includes/head')
<body>
  @include('includes/frontnav')
  <div id="body">
      <div>
        <form>
            Email:<br>
        <input type="email" name="email">
        </form>
        <button type="button" onclick="location.href='login.html'">Submit</button>
      </div>
  </div>
  @include('includes/footer')
  </body>
</html>