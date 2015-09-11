<?php
$a=$_GET['candreg_id'];
$conn=mysqli_connect("localhost","root","","evoting");
 if(!$conn)
{
  die("Unable to connect to the database");
}
 $result=mysqli_query($conn,"Delete from candidateregis where candreg_id='$a'");
   $result1=mysqli_query($conn,"select email_id from candidateregis where  candreg_id ='$a'");
   while($dbrec=mysqli_fetch_assoc($result1))
    {
      $email = $dbrec[email_id];
}
 $result2=mysqli_query($conn,"Delete from logincand where emailid ='$email'");
  if($result && $result2)
   {
     mysqli_close($conn);
      include "viewc.php";
   }
    else
     {
       echo (mysqli_error($conn));
      
       mysqli_close($conn);
     }
 ?>