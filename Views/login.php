<?php
/**
 * FileName: login.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 8:54 PM
 */
?>

<h1>Login to continue</h1>
<form method="post" action="/login/submit">

	<div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<button type="submit">Login</button>
		<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	</div>

	<div class="container" style="background-color:#f1f1f1">
		<span class="psw">Forgot <a href="#">password?</a></span>
	</div>
</form>
