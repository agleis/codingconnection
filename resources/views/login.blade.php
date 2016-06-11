<!Doctype html>
<html>
    @include('includes/head')
    <body>
	<script>initialize()</script>
    @include('includes/frontnav')
	@include('includes/frontsidebar')
    <div id="username-field">
        <form>
            Username:
        <input id="username" type="text" name="username">
        <br>
            Password:
        <input id="password" type="password" name="psw">
        </form>
         <button type="button" onclick="login()">Login</button>
        <button type="button" onclick="location.href='forgotpassword'">Forgot Password</button>
        <button type="button" onclick="location.href='signup'">Sign Up Now!</button>
    </div>
	@include('includes/footer')
    </body>
</html>