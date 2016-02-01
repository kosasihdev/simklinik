<?php
include 'header.php';


?>
<link rel="stylesheet" href="style.css">

<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">

    
		<h1 class="form-signin-heading text-muted">LOGIN SIMKLINIK</h1>
		<form class="form-signin" action="proses_login.php" method="POST">
		<input type="text" class="form-control" placeholder="Username" required="" autofocus="" name="username">
		<input type="password" class="form-control" placeholder="Password" required="" name="password">

		<button class="btn btn-lg btn-primary btn-block" type="submit">
			Sign In
		</button>
	</form>

</div>

<?php
include 'footer.php';
?>