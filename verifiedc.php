<?php
$conn=mysqli_connect("127.0.0.1","root","","evoting");
if($conn)
 {
 $emailid=$_GET["emailid"];//query string
 //echo $emailid;
 $SQL="UPDATE candidateregis SET status='VERIFIED' where  email_id='$emailid'";
 $result=mysqli_query($conn,$SQL);
 
  if($result)
   {
    echo "Record Successfully Verified";
   }
 
   else
     {
      echo "Record Verified Failed".mysql_error();
     }
   include "viewc.php";
   mysqli_close($conn);
 }

?>