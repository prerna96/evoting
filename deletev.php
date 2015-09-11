<html>
<body>
<title>Deletevoter</title>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
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
	//$res=mysqli_query($conn,"dele")
	
	
	
	$result = mysqli_query($conn,"Select * from registration");

if (mysqli_num_rows($result)<1) // return rows data from table//
{
	echo "No records found";
	return;
}

 
print "<table  id='tdv'>";

print "<tr>";
print "<td>Reg ID</td>";
print "<td>First Name</td>";
print "<td>Middle Name</td>";
print "<td>Last Name</td>";
print "<td class='tddelv'>Father/Husband Name</td>";
print "<td class='tddelv'>Mother Name</td>";
print "<td class='tddelv'>DOB</td>";
print "<td class='tddelv'>Gender</td>";
print "<td class='tddelv'>Address</td>";
print "<td class='tddelv'>Card</td>";
print "<td class='tddelv'>Card No</td>";
print "<td class='tddelv'>Country</td>";
print "<td class='tddelv'>State</td>";
print "<td class='tddelv'>City</td>";
print "<td class='tddelv'>Pin code</td>";
print "<td class='tddelv'>Mobile No</td>";
print "<td class='tddelv'>Emailid</td>";
print "<td class='tddelv'>Photo</td>";
print "<td class='tddelv'>Check</td>";
print "</tr class='trdelv'>";
while ($db_field = mysqli_fetch_array($result) )
 {
print "<tr>";
print "<td><span class='getreg'>". $db_field['reg_id']. "</span></td>";
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
print "<td><img src='".$db_field["selectphoto"]."' width='70' height='70' alt='noimage'></td>";
print "<td><input type='button' class ='getbutton' value='Delete'></td>";
print "</tr>";
}

print "</table>";


mysqli_close($conn);
?>	
</body>
</html>