<?php
 session_start();
 $emailidv=$_SESSION['emailid'];//$_SESSION['emailid'] -> value come from loginvaoterdata.php wherer emailid session is set
 //$emailidv=$_SESSION['emailid'];
 
 $conn=mysqli_connect  ("127.0.0.1","root","","evoting");
 if(!$conn)
  {
    die("Unable to connect");
  }
  $result=mysqli_query($conn,"select * from candidateregis where email_id ='$emailidv'");
  if(mysqli_num_rows($result)<1)
   {
     echo "No record found";
      return;
   }
   while ($db_field=mysqli_fetch_array($result))
 {
  print'<table cellspacing="30" cellspacing="30">';
 print "<tr><td>candreg_id</td><td>".$db_field['candreg_id']."</td></tr>";
print "<tr><td>First Name</td><td>". $db_field['fname'] . "</td></tr>";
print"<tr><td>Middle Name</td><td>". $db_field['mname'] ."</td></tr>";
print"<tr><td>Last Name</td><td>". $db_field['lname'] ."</td></tr>";
print"<tr><td>Father/Husband Name</td><td>". $db_field['fhnamec']."</td></tr>";
print"<tr><td>DOB</td><td>". $db_field['dob']."</td></tr>";
print"<tr><td>Gender</td><td>". $db_field['gender']."</td></tr>";
print"<tr><td>Card</td><td>". $db_field['card']."</td></tr>";
print"<tr><td>Card NO</td><td>". $db_field['cardno']."</td></tr>";
print"<tr><td>Address</td><td>". $db_field['address']."</td></tr>";
print"<tr><td>Country</td><td>". $db_field['country']."</td></tr>";
print"<tr><td>State</td><td>". $db_field['state']."</td></tr>";
print"<tr><td>City</td><td>". $db_field['city']."</td></tr>";
print"<tr><td>Pin code</td><td>". $db_field['pincode_no']."</td></tr>";
print"<tr><td>Mobile No</td><td>". $db_field['mobile_no']."</td></tr>";
print"<tr><td>Emailid</td><td>". $db_field['email_id']."</td></tr>";
//print"<tr><td>Candidatephoto</td><td>"<img src=.$db_field['candidatephoto']. width='70' height='70' alt='no image'>"</td></tr>"
//print"<tr><td>Party symbol</td><td>"<img src='.$db_field['candpartysymb'].'width='70' height='70' alt='no image'>"</td></tr>";
print"<tr><td>Party Name</td><td>". $db_field['partynames']."</td></tr>";
print"<tr><td>Current post Cand</td><td>". $db_field['candposition']."</td></tr>";
}
print "</table>";
mysqli_close($conn);
?>