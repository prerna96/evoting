
<?php
  $status=$_GET["status"];//query string
 $conn=mysqli_connect("127.0.0.1","root","","evoting");
 if(!$conn)
{
 die("unable to connect to the database");
}
$result=mysqli_query($conn,"Select *from candidateregis where status='$status'");
 if(mysqli_num_rows($result)<1)
{
 echo"No Records Found";
 return;
}
print'<table border="2">';
print"<tr>
  <td>candreg_id</td>
  <td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>Father/Husband Name</td>
<td>DOB</td>
<td>Gender</td>
<td>Card</td>
<td>Card NO</td>
<td>Address</td>
<td>Country</td>
<td>State</td>
<td>City</td>
<td>Pin code</td>
<td>Mobile No</td>
<td>Emailid</td>
<td>Candidatephoto</td>
<td>Party symbol</td>
<td>Party Name</td>
<td>Current post Cand</td>
<td>Check</td>
</tr>";

while ($db_field = mysqli_fetch_array($result) )
{
 print"<tr>";
 print "<td>".$db_field['candreg_id']."</td>";
 print "<td>". $db_field['fname'] . " </td>";
print "<td>". $db_field['mname'] . " </td>";
print "<td>". $db_field['lname'] ."</td>";
print "<td>". $db_field['fhnamec']."</td>";
print "<td>". $db_field['dob']."</td>";
print "<td>". $db_field['gender']."</td>";
print "<td>". $db_field['card']."</td>";
print "<td>". $db_field['cardno']."</td>";
print "<td>". $db_field['address']."</td>";
print "<td>". $db_field['country']."</td>";
print "<td>". $db_field['state']."</td>";
print "<td>". $db_field['city']."</td>";
print "<td>". $db_field['pincode_no']."</td>";
print "<td>". $db_field['mobile_no']."</td>";
print "<td><span class='getemailid'>". $db_field['email_id']."</span></td>";
print "<td><img src='".$db_field['candidatephoto']."' width='70' height='70' alt='no image'></td>";
print "<td><img src='".$db_field['candpartysymb']."'width='70' height='70' alt='no image'></td>";
print "<td>". $db_field['partynames']."</td>";
print "<td>". $db_field['candposition']."</td>";
print '<td><input type="button" class="getbutton" value="Verified"></td>';
print "</tr>";
}
print "</table>";

mysqli_close($conn);
?>
