<?php //include('checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Issue Log</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
		body {
		margin:0;
		padding:0;
		height:100%;
		font:14px Arial;
		background-image: url("background.jpg");
		background-attachment: fixed;
		background-size: cover;
	}
	#page-content{
		float:center;
		width:95%;
		padding:20px 25px 25px 20px;
		border: 2px solid maroon;
		border-radius: 5px;
		margin: 30px 30px 50px 30px;
		box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		-moz-box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		-webkit-box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		-o-box-shadow: 0px 0px 7px rgba(0,0,0,0.3);
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px; -o-border-radius: 5px;
		background-color: #fff;

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
	.style1 {color: #FF0000;}
</style>
<body>
<header>
<a href="index.php"><img src="logo.png" alt="logo-rac"></a>&nbsp &nbsp &nbsp Railway Assets Corporation
</header>

<div class="wrapper">
<div id="page-content" style="background-color:"white">
 <form action="index.php">
 <fieldset>
 <!-- Tak siap lagi isset ni , tgok utube ler -->
<?php if(isset($_SESSION['success'])): ?>

	<?php echo "<script type='text/javascript'>alert('You Are Successfully Logged in');</script>"; ?>
<?php endif ?>
  <legend><strong>Issue Log Report</strong></legend>
  <table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-10" for="id">Number</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>

	<tr>
    <td class="col-sm-6"><input type="text" class="form-control" id="id" placeholder="" name="id" disabled></td>
	</tr>
	</table>
	<p>&nbsp;</p>

   <table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2" for="problem_description">Problem Description</label></td>
	</tr>

	<tr>
    <td  class="col-sm-6"><textarea class="form-control" rows="4" id="problem_description"></textarea></td>
	</tr>
	</table>
	<p>&nbsp;</p>

    <table width="1400" border="0">
    <tr>
	<td class="form-group"><label class="control-label col-sm-5" for="submitters_name">Submitters Name</label></td>
	<td class="form-group"><label class="control-label col-sm-2" for="date_raised">Date Raised</label></td>
	</tr>

	<tr>
    <td class="col-sm-6"><input type="text" class="form-control" id="submitters_name" placeholder="" name="submitters_name"></td>
	<td class="col-sm-6"><input type="date" class="form-control" id="date_raised" placeholder="" name="email"></td>
	</tr>
	</table>
	<p>&nbsp;</p>

	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2" for="password">Password</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for="confirm_psw">Confirm Password</label></td>
	</tr>

	<tr>
    <td class="col-sm-6"><input type="password" class="form-control" id="password" placeholder="" name="password"></td>
	<td class="col-sm-6"><input type="password" class="form-control" id="confirm_psw" placeholder="" name="confirm_psw"></td>
	</tr>
	</table>
	<p>&nbsp;</p>

	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2" for="severity">Severity</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>

	<tr>
    <td class="col-sm-6"><select class="form-control" id="severity">
	<option>Choose.. </option>
    <option>Low</option>
    <option>Medium</option>
	<option>High</option>
	</select>
	</td>
	</tr>
	</table>
	<p>&nbsp;</p>

	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-6" for="target_finish">Target Finish</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for="actual_finish">Actual Finish</td>
	</tr>

	<tr>
    <td class="col-sm-6"><input type="date" class="form-control" id="target_finish" placeholder="" name="target_finish"></td>
	<td class="col-sm-6"><input type="date" class="form-control" id="actual_finish" placeholder="" name="actual_finish"></td>
	</tr>
	</table>
	<p>&nbsp;</p>

	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-10" for="problem_resolution_accepted_by">Problem Resolution Accepted By</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>

	<tr>
    <td class="col-sm-6"><input type="text" class="form-control" id="problem_resolution_accepted_by" placeholder="" name="problem_resolution_accepted_by"></td>
	</tr>
	</table>
	<p>&nbsp;</p>

	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-10" for="problem_resolution_accepted_date">Problem Resolution Accepted Date</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>

	<tr>
    <td class="col-sm-6"><input type="date" class="form-control" id="problem_resolution_accepted_date" placeholder="" name="problem_resolution_accepted_date"></td>
	</tr>
	</table>
	<p>&nbsp;</p>


	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2" for="comment">Comment</label></td>
	</tr>
	<tr>
    <td  class="col-sm-6"><textarea class="form-control" rows="4" id="comment"></textarea></td>
	</tr>
	</table>
	<p>&nbsp;</p>

	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2" for="status">Status</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>

	<tr>
    <td class="col-sm-6"><select class="form-control" id="status" disabled>
    <option>Pending</option>
    <option>In-Progress</option>
    <option>Hold</option>
	<option>Complete</option>
	</select>
	</td>
	</tr>
	</table>
	<p>&nbsp;</p>



	<div class="control-label col-sm-10" >
    <button type="submit" class="btn btn-warning">Submit</button>&nbsp &nbsp &nbsp
	<button type="reset" class="btn btn-primary">Reset</button>&nbsp &nbsp &nbsp
	<button type="submit" class="btn btn-danger">Cancle</button>
	</div>
	</fieldset>
  </form>

</div>
</div>
</body>
</html>
