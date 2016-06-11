<!Doctype html>
<html>
    @include('includes/head')
    <body>
	<script>initialize()</script>
	<div class="page-wrap">
		@include('includes/frontnav')
      <div>
		@include('includes/frontsidebar')
        <center>
        <form>
            <br>
            <br>
            <br>
            User name:<br>
        <input id="username" type="text" name="username">
        <br>
            Password:<br>
        <input id="password" type="password" name="psw">
        <br>
            First Name:<br>
        <input id="first" type="text" name="first">
        <br>
            Last Name:<br>
        <input id="last" type="text" name="last">
        <br>
            Age:<br>
        <input id="age" type="text" name="age">
        <br>
            Email:<br>
        <input id="email" type="text" name="email">
        <br>
			GWC Chapter:<br>
		<select id="gwc-chapter" name="gwc-chapter">
			<option value="none">None</option>
			<option value="Cornell GWC">Cornell GWC</option>
		</select>
        <br>
        <input type="radio" name="account_type" value="Student" checked>Student
        <br>
        <input type="radio" name="account_type" value="Parent">Parent
        <br>
        <input type="radio" name="account_type" value="Mentor">Mentor
            
            
        </form>
        </center>
      </div>
      <br>
      
      <div>
        <center>
        <button type="button" onclick="createUser()">Submit</button>
        </center>
      </div>
	  </div>
	@include('includes/footer')
    </body>
</html>