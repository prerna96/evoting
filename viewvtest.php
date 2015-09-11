
<?php
 	$conn=mysqli_connect("127.0.0.1","root","","evoting");
	if(!$conn)
	{
		die("unable to connect to the database");
	}
	/*$mydb=mysql_select_db("bookdb",$conn);
	if(!$mydb)
	{
		die("unable to locate the database");
	}*/
	$result = mysqli_query($conn,"Select * from registration");

if (mysqli_num_rows($result)<1) // bring rows data from table//
{
	echo "No records found";
	return;
}
print '<table border="2">';

print "<tr>
<td>Reg ID</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>Father/Husband Name</td>
<td>Mother Name</td>
<td>DOB</td>
<td>Gender</td>
<td>Address</td>
<td>Card</td>
<td>Card No</td>
<td>Country</td>
<td>State</td>
<td>City</td>
<td>Pin code</td>
<td>Mobile No</td>
<td>Emailid</td>
<td>Check</td>
</tr>";
while ($db_field = mysqli_fetch_array($result) )
 {
print "<tr>";
print "<td>". $db_field['reg_id']. "</td>";
print "<td>". $db_field['fname'] . " </td>";
print "<td>". $db_field['mname'] . " </td>";
print "<td>". $db_field['lname'] ."</td>";
print "<td>". $db_field['fhnamev']."</td>";
print "<td>". $db_field['mnamev']."</td>";
print "<td>". $db_field['dob']."</td>";
print "<td>". $db_field['gender']."</td>";
print "<td>". $db_field['address']."</td>";
print "<td>". $db_field['cardav']."</td>";
print "<td>". $db_field['card_no']."</td>";
print "<td>". $db_field['country']."</td>";
print "<td>". $db_field['state']."</td>";
print "<td>". $db_field['city']."</td>";
print "<td>". $db_field['pincode_no']."</td>";
print "<td>". $db_field['mobile_no']."</td>";
print "<td>". $db_field['email_id']."</td>";
print '<td><input type="checkbox"></td>';
print "</tr>";
}

print "</table>";
mysqli_close($conn);
?>	

