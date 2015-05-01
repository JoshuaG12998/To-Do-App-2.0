<?php
	require_once(__DIR__ ."/../model/config.php");
?>

<h1>Login</h1>
<!-- creates the login page for users to sign in -->
<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
	<divclass="fillin">
		<!-- input box for user's username  -->
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>
	<div class="fillin">
		<!-- input box for user's password -->
		<label for="password">Password: </label>
		<input type="password" name="password"/>
	</div>
	<div>
		<!-- button to submit previous two input values -->
		<button type="submit" class="btn btn-primary btn-lg button" data-toggle="modal" data-target="#myModal">
			Submit
		</button>
	</div>
</form>

<footer>	
	Created by Maxwell Karp
</footer>