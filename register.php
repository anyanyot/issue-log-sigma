<!DOCTYPE html>
<html lang="en">
<head>
  <title>Issue Log</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
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
 <form action="register_process.php">
 <fieldset>
  <legend>Register New Account</legend>
   <table width="1400" border="0">
    <tr>
	<td class="form-group"><label class="control-label col-sm-2">Name</label></td>
	<td class="form-group"><label class="control-label col-sm-2">Email</label></td>
	</tr>
	
	<tr>
    <td class="col-sm-6"><input type="text" class="form-control" id="name" placeholder="" name="name"></td>
	<td class="col-sm-6"><input type="email" class="form-control" id="email" placeholder="" name="email"></td>
	</tr>
	</table>
	<p>&nbsp;</p>
	
	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2">Password</label></td>
	<td class="form-group"><label class="control-label col-sm-6">Confirm Password</label></td>
	</tr>
	
	<tr>
    <td class="col-sm-6"><input type="password" class="form-control" id="password" placeholder="" name="password"></td>
	<td class="col-sm-6"><input type="password" class="form-control" id="confirm_psw" placeholder="" name="confirm_psw"></td>
	</tr>
	</table>
	<p>&nbsp;</p>
	
	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2">Identity Card</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>
	
	<tr>
    <td class="col-sm-6"><input type="text" class="form-control" id="ic" placeholder="Example: 900907015276" name="ic"></td>
	</tr>
	</table>
	<p>&nbsp;</p>
	
	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2">Address</label></td>
	</tr>
	
	<tr>
    <td  class="col-sm-6"><textarea class="form-control" rows="3" id="address"></textarea></td>
	</tr>

	</table>
	<p>&nbsp;</p>
	
	<table width="1400" border="0">
    <tr>
	<td class="form-group"><label class="control-label col-sm-2">Postcode</label></td>
	<td class="form-group"><label class="control-label col-sm-2">State</label></td>
	</tr>
	
	<tr>
    <td class="col-sm-6"><input type="text" class="form-control" id="postcode" placeholder="" name="postcode"></td>
	<td class="col-sm-6"><input type="text" class="form-control" id="state" placeholder="" name="state"></td>
	</tr>
	</table>
	<p>&nbsp;</p>
	
	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2">Country</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>
	
	<tr>
    <td class="col-sm-6"><select class="form-control" id="country">
	<option>Choose</option>
    <option>Johor</option>
    <option>Kedah</option>
    <option>Kelantan</option>
	<option>Kuala Lumpur</option>
    <option>Labuan</option>
    <option>Melaka</option>
    <option>Negeri Sembilan</option>
	<option>Pahang</option>
    <option>Perak</option>
    <option>Perlis</option>
    <option>Pulau Pinang</option>    
	<option>Putrajaya</option>
	<option>Sabah</option>
    <option>Sarawak</option>
    <option>Selangor</option>
    <option>Terengganu</option>
	</select>
	</td>
	</tr>
	</table>
	<p>&nbsp;</p>
	
	<table width="1400" border="0">
    <tr>
	<td class="form-group"><label class="control-label col-sm-5">Phone Number</label></td>
	<td class="form-group"><label class="control-label col-sm-5">Home Number</label></td>
	</tr>
	
	<tr>
    <td class="col-sm-6"><input type="text" class="form-control" id="phone_num" placeholder="" name="phone_num"></td>
	<td class="col-sm-6"><input type="text" class="form-control" id="home_num" placeholder="" name="home_num"></td>
	</tr>
	</table>
	<p>&nbsp;</p>
	
	<table width="1400" border="0">
	<td class="form-group"><label class="control-label col-sm-2">Role</label></td>
	<td class="form-group"><label class="control-label col-sm-6" for=""></td>
	</tr>
	
	<tr>
    <td class="col-sm-6"><select class="form-control" id="Role">
	<option>Choose</option>
    <option>Project Manager</option>
    <option>Team Members</option>
	</select>
	</td>
	</tr>
	</table>
	<p>&nbsp;</p>
	
	<div class="control-label col-sm-10">
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
