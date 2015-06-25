<?php 

// Connect to the database
require('config.php'); 

// Set username and password variables for this script
$no = mysql_real_escape_string($_POST["username"]);
$pass = mysql_real_escape_string($_POST["password"]); 

// Make sure the username and password match, selecting all the client's
// data from the database if it does. Store the data into $clientdata
$clientdata = mysql_query("SELECT * FROM customer WHERE customer_uname='$no' and customer_pwd='$pass'")
 or die (mysql_error());

// Put the $clientdata query into an array we can work with
$data = mysql_fetch_array($clientdata, MYSQL_ASSOC);

// If the username and password matched, we should have one entry in our
// $clientdata array. If not, we should have 0. So, we can use a simple
// if/else statement
if(mysql_num_rows($clientdata) == 1){
	// Start a new blank session. This will assign the user's server
	// with a session with an idividual ID
	session_start();

	// With our session started, we can assign variables for a logged
	// in user to use until they log out.
	$_SESSION['customer_id'] = $data['customer_id'];
	$_SESSION['customer_uname'] = $no;
	$_SESSION['customer_nm'] = $data['customer_nm'];
	$_SESSION['customer_almt'] = $data['customer_almt'];
	$_SESSION['customer_prov'] = $data['customer_prov'];
	$_SESSION['customer_kdpos'] = $data['customer_kdpos'];
	$_SESSION['customer_telp'] = $data['customer_telp'];
	
	

	// Redirect ke halaman muka
	header('Location: user.php');
}else{
?><script language="javascript">
			alert("username dan password tidak cocok!!");
			document.location="login.php";
			</script><?php
}
?>
