<?php //include('checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Issue Management Log</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body {
		background-image: url("background.jpg");
		background-attachment: fixed;
		background-size: cover;
	}
	#page-content{
		float:left;
		width:35%;
		padding:15px 20px 8px 20px;
		border: 2px solid maroon;
		border-radius: 5px;
		margin: 210px 0px 0px 55px;
		box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		-moz-box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		-webkit-box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		-o-box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px; -o-border-radius: 5px;
		background-color: #fff;
		opacity:0.9;
		-moz-opacity:0.9;
		-khtml-opacity:0.9;
		filter:alpha(opacity=90);
	}
	header {
		color: white;
		background-color: #700A3D;
		clear: left;
		text-align: left;
	}

	header {
		font-size: 170%;
		font: bold 170% sans-serif;
	}
	img {
		margin:10px 0px 6px 25px;

	}

	a:link {
		color: black;
		text-decoration: none;
	}

	a{
		color: black;
		text-decoration: none;
	}

	glyphicon {
		color: grey;
	}

	.footer-distributed{
		color: white;
		box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
		box-sizing: border-box;
		width: 100%;
		text-align: left;
		font: bold 12px sans-serif;
		background:#700A3D;
		position:absolute;
		bottom:0;
		padding: 12px 20px 12px 20px;
	}

	@media (max-width: 880px) {
		.footer-distributed{
			font: bold 14px sans-serif;
	}
	.wrapper{
		min-height:100%;
		position:relative;
	}
</style>
<?php


if(isset($_GET['issue_log'])){

	// Is this a valid login token?
	$user = User::findByToken($_GET['issue_log']);

	if($user){

		// Yes! Login the user and redirect to the reports page.

		$user->login();
		redirect('report.php');
	}

	// Invalid token. Redirect back to the login form.
	redirect('index.php');
}
?>


<body>
<header>
<a href="index.php"><img src="logo.png" alt="logo-rac"></a>&nbsp &nbsp &nbsp Issue Management Log
</header>

<div class="wrapper">
  <div id="page-content" style="background-color:"#fcfcfc">
  <h3><center><strong>Login into Issue Log System</strong></center></h3>
	  <hr>
  <form class="form-horizontal" action="checklogin.php" method="post"  >
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control"  placeholder="Enter username" name="username">
		  </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control"  placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class=" btn  btn-default" name="login">Log in</button>&nbsp &nbsp
		<span class="glyphicon">&#xe008;</span>&nbsp<a href="register.php">Register new account</a>
		<?php //include('checklogin.php'); ?>
      </div>
    </div>
  </form>
</div>
    <footer class="footer-distributed">Copyright &copy; 2017 - All Rights Reserved</footer>
</div>
</body>
</html>
