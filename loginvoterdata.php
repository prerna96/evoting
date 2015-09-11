<html>
<body>
<?php
session_start();
$user_name="root";
$password="";
$database="evoting";
$server = "127.0.0.1";
$myconn=mysqli_connect($server,$user_name,$password,$database);
if($myconn)
{
$emailidv=$_GET['emailid'];//form
$passwordv=$_GET['pass'];//form
//$pwddb=strrev($passwordv);
$type=$_GET['type'];//form
if($type=="VOTER")
{
$SQL="select * from loginvoter where emailid='$emailidv' and password='$passwordv'";
}
else if($type=="CANDIDATE") 
{
$SQL="select * from logincand where emailid='$emailidv' and password='$passwordv'";
}
else{
$SQL="select * from loginadmin where emailid='$emailidv' and password='$passwordv'";
}
//echo $type . "<br>";
$result=mysqli_query($myconn,$SQL); //mysqli_query() function performs a query against the database.
                                         //->mysqli_query(connection,query); 

$dbrec=mysqli_fetch_assoc($result); //fetches a result row as an associative array,a numeric array, or both
                                    //Associative arrays - Arrays with named keys
                                    // eg array(key=>value);
//$result=mysqli_fetch_assoc($result);

//passwordcheck //
//voter type wrong password then voting will not count//
$dbpass=strrev($dbrec['password']);//reverse password,('password')is come from database
if(strcmp($passwordv,$dbpass)) //strcmp for comparing password with db password
 {                              //$passwordv->form 
  header("Location:fakedata.php");
 }
 else
 {
   $_SESSION['emailid']=$emailidv; // variable giving value to session and 
                                     //set a session,$emailidv=$_GET['emailid']
 header("Location:logintest.php");
 }
if($dbrec==TRUE and $type=="VOTER")
{
 echo 'Record Found';
$_SESSION['emailid']=$emailidv; //variable giving value to session and
                                  // set session
 header("Location:logintest.php");
}
else if ($dbrec==TRUE and $type=="CANDIDATE")
{
echo 'Record Found';
$_SESSION['emailid']=$emailidv; // variable giving value to session and 
                                    //set session
 header("Location:logintestc.php");
}
else if ($dbrec==TRUE and $type=="ADMIN")
{
 echo 'Record Found';
 $_SESSION['emailid']=$emailidv; //giving value to session and set a session
 header("Location:logintesta.php");
}
else
{
 echo 'error in input';
}
}
else
{
 print 'Database Not Found';
}
mysqli_close($myconn);
?>
</body>
</html>
