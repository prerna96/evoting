<?php

 $conn=mysqli_connect("127.0.0.1","root","","evoting");
 if($conn)
{
 $emailid=$_GET["emailid"];//getting query string from (votervd.php)
 echo $emailid;
 
 $SQL="update registration set status='VERIFIED' where  email_id='$emailid'";
 $result=mysqli_query($conn,$SQL);
  if($result)
 {
  // echo $emailid;
   echo "Record Successfully Verified ";
    
 }
  
  else
  {
    echo "Record Verified Failed".mysql_error();
  }
 include "viewv.php";
 mysqli_close($conn);
}

?>