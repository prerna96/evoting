<?php
session_start();
$user_name="root";
$password="";
$database="evoting";
$server = "127.0.0.1";
$conn=mysqli_connect($server,$user_name,$password,$database);
  if($conn)
{

 //$emailidv=$_GET['emailid'];
 //$password=$_GET['pass'];
 $password="pass";
 $revs=strrev('$password');
 $SQL="SELECT * FROM loginvoter WHERE emailid='prerna@gmail.com' and password='$password'";

   //$result=mysqli_query($conn,$SQL);
   //$dbrec=mysqli_fetch_assoc($result);
  
 /*if($dbrec==TRUE and $type=="VOTER")
  {
    echo 'Record Found';
    $_SESSION['emailid']=$emailidv;
    header("Location:logintest.php");
  }//
 //if
 {
 echo " please enter  email and password";
 }*/
  
 if($revs==$password)
 {
  echo"Incorrect password";
}
}
?>
<html>
<body>
<form  action="password.php"  method="get">
           <table  cellspacing="20" cellpadding="20">
         <tr class="if"><td>Emailid:</td>
           <td><input type="text" name="emailid" placeholder="enteremailid" value=""><span id="sp1"></span></td>
         </tr>
           
	<tr class="if"><td>Password Name:</td>
           <td><input type="text" name="pass" placeholder="enter password" value=""><span id="sp2"></span></td>
         </tr>   
            
        <tr><td></td><td><input type="submit" value="submit"></td></tr>
        </table>
</body>
</html>