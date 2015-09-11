<?php
//echo "Hello";
$a=$_GET['regid'];//as a rquery string from (votervd.php)
$email="";
$conn=mysqli_connect("127.0.0.1","root","","evoting");
	if(!$conn)
	{
		die("unable to connect to the database");
	}
	
	$result = mysqli_query($conn,"Delete from registration where reg_id='$a'");
	
	$result1=mysqli_query($conn,"select email_id from registration where reg_id='$a'");
	while($dbrec=mysqli_fetch_assoc($result1))
{
 $email=$dbrec[email_id];
}

$result2=mysqli_query($conn,"Delete from loginvoter where emailid='$email'"); 
 /*if($result2)
{
 alert("Record deleted successfully");
 mysqli_close($conn);

}*/
	
	
	
	
	
	if($result && $result2)
	{
		//echo "Record Deleted";
	mysqli_close($conn);
	   // include "viewv.php";
	}
	else
	{
		echo (mysqli_error($conn));
	mysqli_close($conn);
	}
	

?>