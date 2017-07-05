
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="123456"; // Mysql password
$db_name="issue_log"; // Database name
$tbl_name="user_info"; // Table name

// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot select DB");
$myusername='';
$mypassword='';
/*if(!$con)
echo "cant connect to database";
else {
  echo "connect successfully";
}*/
// username and password sent from form
if(isset($_POST['login'])){
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
//echo $mypassword;
}

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

/*$myusername = $_POST['username'];
$mypassword = $_POST['password'];*/
$sql="SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword'";
//echo $sql;
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
//echo $count;
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
/* session ni tak tahu apa fungsi dia
$_SESSION['myusername'] = 'username';
$_SESSION['mypassword'] = 'password';
$_SESSION['success'] = 'U r Lucky Person';
*/
header("location:report.php");


}
else {
	
	$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
//window.location.href='index.php';
//header("location:index.php");
echo "Wrong Username or Password";
}
?>
