<html>
<head>
<style>
table
{
 border-collapse: collapse;
 background-color:lightpink;
}
*
{
margin:0px;

padding:0px;
}
body
{
background-color:white;
}

#div1
{
position:absolute;
top:20px;
left:450px;
border:2px solid;
height:100px;
width:240px;
}
#t1
{
 position:absolute;
top:150px;
left:0px;
border:2px solid;
height:100px;
width:240px;
}
</style>
</head>
<body>
<div id=div1><h3>VOTER VERIFICATION</h3>
  
<form action="testvoting.php" method="get">

		   <select name="Verification">
           <option>SELECT</option>
		   <option>VERIFIED</option>
           <option>NON VERIFIED</option>
           </select>
		   <input type="submit"name="submit" value='submit'>
		</form>
		
</div>
<div id="t1">
<?php

if(isset($_GET['submit']))//to check press key come or not 
{
$s=$_GET['Verification'];
echo "$s";
 $conn=mysqli_connect("127.0.0.1","root","","evoting");
 if(!$conn)
{
 die("unable to connect to the database");
}
if($s=="VERIFIED")//
$result=mysqli_query($conn,"Select *from candidateregis where status='YES' ");
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
<td>Party Name</td>
<td>Party symbol</td>
<td>Current post Cand</td>
<td>Checkbox</td>
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
print "<td>". $db_field['email_id']."</td>";
print "<td>". $db_field['partynames']."</td>";
print "<td>". $db_field['candpartysymb']."</td>";
print "<td>". $db_field['candposition']."</td>";
print '<td><input type="checkbox" name="check"></td>';
print "</tr>";
}
print "</table>";

mysqli_close($conn);
}
?>

</div> 
</body>
</html>
