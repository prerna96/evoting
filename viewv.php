
<html>
<head>
<title>Viewvoter</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php
        $status=$_GET["status"];//qury string through(votervd.php)
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
	$result = mysqli_query($conn,"Select * from registration where status='$status'");

        if (mysqli_num_rows($result)<1) // bring rows data from table//
         {
	  echo "No records found";
	  return;
         }
print '<div id="viewvt">';		 
print '<table id="tvv">';

print "<tr class='trdelv'>";
print "<td id='tddelv'>Reg ID </td>";
print"<td width='50'>Full Name</td>";

print"<td>Father/Husband Name</td>";
//print"<td>Mother Name</td>";
print"<td>DOB</td>";
print"<td>Gender</td>";
print"<td>Address</td>";
print"<td>Card</td>";
//print"<td>Card No</td>";
print"<td>Country</td>";
print"<td>State</td>";
//print"<td>City</td>";
//print"<td>Pin code</td>";
//print"<td>Mobile No</td>";
print"<td>Emailid</td>";
print"<td>Photo</td>";
print"<td>Check</td>";
print"</tr>";
while ($db_field = mysqli_fetch_array($result) )
 {
 $fname=$db_field['fname'];
 $mname=$db_field['mname'];
 $lname=$db_field['lname'];
 $fullname=$fname." ". $mname ." ". $lname;
 
 $cardv=$db_field['cardav'];
 $cardno=$db_field['card_no'];
 $card=$cardv ." ".$cardno;
 
print "<td width='10'>". $db_field['reg_id']. "</td>";
print "<td width='30'>". $fullname. " </td>";

print "<td width='30'>". $db_field['fhnamev']."</td>";
//print "<td width='30'>". $db_field['mnamev']."</td>";
print "<td width='30'>". $db_field['dob']."</td>";
print "<td width='10'>". $db_field['gender']."</td>";
print "<td width='30'>". $db_field['address']. $db_field['pincode_no']. "</td>";
print "<td>". $card."</td>";
print "<td>". $db_field['country']."</td>";
print "<td>". $db_field['state']."</td>";
//print "<td>". $db_field['city']."</td>";
print "<td>". $db_field['pincode_no']."</td>";
//print "<td>". $db_field['mobile_no']."</td>";
print "<td><span class='getemailid'>". $db_field['email_id']."</span></td>";
print "<td><img src='".$db_field['selectphoto']."'width='70'height='70' alt='noimage'></td>";
print '<td><input type="button" class="getbutton" value="Verified"></td>';
print "</tr>";

}

print "</table>";
print "</div>";
mysqli_close($conn);
?>	
</body>
</html>