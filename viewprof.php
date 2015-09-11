<?php
 session_start();
$emailidv=$_SESSION['emailid'];//$_SESSION['emailid'] -> value come from (loginvoterdata.php) where emailid session is set

//$emailidv=$_SESSION['emailid'];
//echo $emailidv;
$conn=mysqli_connect("127.0.0.1","root","","evoting");
 if(!$conn)
{
 die("Unable to connect");
}
 $result=mysqli_query($conn,"select * from registration where email_id='$emailidv'");
 if(mysqli_num_rows($result)<1)//mysqli_num_rows() function returns the number of rows in a result set
{
 echo "No record found";
 return;
}
 print "<div id='viewprov'>";
while($db_field=mysqli_fetch_array($result))//fetches a result row as an associative array,a numeric array, or both
{
 
 print '<table  cellspacing="30" cellpadding="30">';
print "<tr><td>Reg ID</td><td>". $db_field['reg_id']. "</td></tr>";//direct fetch data from database db_field['field_name']//
print"<tr><td>First Name</td><td>". $db_field['fname'] ."</td></tr>";
print"<tr><td>Middle Name</td><td>". $db_field['mname'] . "</td></tr>";
print"<tr><td>Last Name</td><td>". $db_field['lname'] ."</td></tr>";
print"<tr><td>Father/Husband Name</td><td>". $db_field['fhnamev']."</td></tr>";
print"<tr><td>Mother Name</td><td>". $db_field['mnamev']."</td></tr>";
print"<tr><td>DOB</td><td>". $db_field['dob']."</td></tr>";
print"<tr><td>Gender</td><td>". $db_field['gender']."</td></tr>";
print"<tr><td>Address</td><td>". $db_field['address']."</td></tr>";
print"<tr><td>Card</td><td>". $db_field['cardav']."</td></tr>";
print"<tr><td>Card No</td><td>". $db_field['card_no']."</td></tr>";
print"<tr><td>Country</td><td>". $db_field['country']."</td></tr>";
print"<tr><td>State</td><td>". $db_field['state']."</td></tr>";
print"<tr><td>City</td><td>". $db_field['city']."</td></tr>";
print"<tr><td>Pin code</td><td>". $db_field['pincode_no']."</td></tr>";
print"<tr><td>Mobile No</td><td>". $db_field['mobile_no']."</td></tr>";
print"<tr><td>Emailid</td><td>". $db_field['email_id']."</td></tr>";
print "</tr>";
}
print "</table>";
print "</div>";
mysqli_close($conn);
?>
