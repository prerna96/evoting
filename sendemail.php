<html>
<style>


#divmain
{
    
	font-size:25px;
	color: blue;
	font-weight: bold;
	border:5px solid green;
	background-color:white;
    margin-top:150px;
    margin-left:320px;
	width: 400px;
	padding-top:15px;
	padding-left:20px;
	
}

#divsend
{ display:inline;
 margin-top:15px;
 margin-left:150px;
  border:2px black;
}

#submesend
{ 
  margin-top:30px;
  margin-left:180px;
  
}
</style>
<body>
<?php
include './mail.php';

if(isset($_POST['submit'])){
$to="evoting1515@gmail.com";
$emailidv=$_POST['email'];
//$passwordv=$_POST['pass'];//form
 $username="root";
 $password="";
 $dbpass="";
 $database="evoting";
$server="127.0.0.1";
$conn=mysqli_connect($server,$username,$password,$database);

 if(!$conn)	
 {
   echo "Not able to connect ";  
}
echo "Email".$emailidv;
//password send//
$SQL="select password from loginvoter where emailid='$emailidv'";
$result=mysqli_query($conn,$SQL);//query executed
 $dbrec=mysqli_fetch_assoc($result);
  
    //$dbemail=($bdrec['email_id']);
	echo $dbrec['password'];

	
   //echo "Hello";
   //echo "Pwd"$dbpass;
   $subject ="Thanks for registration";
   $body = "Here,your password is:".$dbrec['password'];
   echo $body;
	
    send_mail($to,$subject,$body,'');	
   
}
$status="";
$username="root";
$password="";
$database="evoting";
$server="127.0.0.1";
$conn=mysqli_connect($server,$username,$password,$database);
        //$status=$_GET["status"];

 if(!$conn)
  {
    die("Unable to connect to the database");
  }
 
 $result=mysqli_query($conn,"SELECT email_id FROM registration WHERE status='VERIFIED'");
 echo "<div id='divmain'>";
  
 echo "Select email:"; 
 echo "<form method='POST' action='sendemail.php'>";
 echo "<div id='divsend'>";
 echo "<select name='email'>";
 echo "<option>Select email id</option>";
 //echo "<table>";
 while($dbrec=mysqli_fetch_assoc($result))
 {
  
 echo "<option value=".$dbrec['email_id'].">".$dbrec['email_id']."</option>";

}
 
  echo "</select>";
  echo "</div>";
   echo "<div id='submesend'>";
  //echo "&nbsp;&nbsp;&nbsp";
  
  print "<input type='submit' name='submit' id='getemails' value='submit'/>";
 //echo "</table>";
  echo "</div>";
 
 echo "</form>";
 echo "</div>";

  mysqli_close($conn);
 ?>

</body>
</html>
