<?php
session_start();
$emailidv=$_SESSION['emailid'];//session set 
//echo $emailidv;
$conn=mysqli_connect("127.0.0.1","root","","evoting");
if(!$conn)
 {
  die("Unable to connect");
 }
 $result=mysqli_query($conn,"select * from candidateregis where email_id='$emailidv'");
if(mysqli_num_rows($result)<1)
 {
  echo "No record found";
 }
 print '<div id="editprofv">';
while($db_field=mysqli_fetch_array($result))
{
 print'<form action="candupdatedata.php" method="post">';
 print'<table cellspacing="30" cellpadding="30">';

print'<tr><td><b>First Name</b></td><td><input type="text" name="fname"value='. $db_field['fname'] .'></td></tr>';

print'<tr><td><b>Middle Name</b></td><td><input type="text"name="mname"value='. $db_field['mname'] .'></td></tr>';

print'<tr><td><b>Last Name</b></td><td><input type="text"name="lname"value='. $db_field['lname'] .'></td></tr>';

print'<tr><td><b>Father/Husband Name</b></td><td><input type="text" name="fhnamec" value='. $db_field['fhnamec'].'></td></tr>';

print'<tr><td><b>DOB</b></td><td><input type="text" name="dob" value='. $db_field["dob"].'></td></tr>';

print "<tr><td><b>Gender</b></td>
<td><select name='gender'>
<option value=". $db_field['gender'].">".$db_field['gender']."</option>
<option>Male</option>
<option>Female</option>
</select>
</td></tr>";

print"<tr><td><b>Card</b></td>
<td><select name='card'>
<option value=". $db_field['card'].">".$db_field['card']."</option>
<option>Aadhar card</option>
<option>Voter id card</option>
</select>
</td></tr>";
print'<tr><td><b>Card No</b></td><td><input type="text" name="cardno" value='. $db_field['cardno'].' min="6" max="10"></td></tr>';
print"<tr><td><b>Address</b></td>
<td>
<textarea rows='4' cols='30' name='txtaddress' value=
". $db_field['address'].">".$db_field['address']."
</textarea>
</td></tr>";
print "<tr><td><b>Country</b></td><td>
<select name='country'>
<option value=". $db_field['country'].">". $db_field['country']."
</option>

</select>
</td></tr>";
print"<tr><td><b>State</b></td>
<td>
<select name='state'>
<option value=". $db_field['state'].">".$db_field['state']."</option>
<option value="MadhyaPradesh">Madhya Pradesh</option></select>
</td></tr>";
print"<tr><td>City</td><td>";
print "<select name='city'>";
print "<option value=".$db_field['city'].">". $db_field['city']."</option>";
print '<option value="Bhopal">Bhopal</option>
<option value="Bhurhanpur">Bhurhanpur</option>
<option value="Bhind">Bhind</option>
<option value="Betul">Betul</option>
<option value="Chhindwara">Chhindwara</option>
<option value="Chhatarpur">Chhatarpur</option>
<option value="Dewas">Dewas</option>
<option value="Damoh">Damoh</option>
<option value="Datia">Datia</option>
<option value="Gwalior">Gwalior</option>
<option value="Hoshangabad">Hoshangabad</option>
<option value="Indore">Indore</option>
<option value="Itarsi">Itarsi</option>
<option value="Jabalpur">Jabalpur</option>
<option value="Khandwa">Khandwa</option>
<option value="Khargone">Khargone</option>
<option value="Murwara">Murwara</option>
<option value="Morena">Morena</option>
<option value="Mandsaur">Mandsaur</option>
<option value="Neemuch">Neemuch</option>
<option value="Nagda">Nagda</option>
<option value="Pithampur">Pithampur</option>
<option value="Ratlam">Ratlam</option>
<option value="Rewa">Rewa</option>
<option value="Sagar">Sagar</option>
<option value="Satna">Satna</option>
<option value="Singrauli">Singrauli</option>
<option value="Sehor">Sehor</option>
<option value="Seoni">Seoni</option>
<option value="Ujjain">Ujjain</option>
<option value="Vidisha">Vidisha</option>

</select>';
print "</td></tr>";
print'<tr><td><b>Pin code</b></td><td><input type="text" name="pcode" value='. $db_field['pincode_no'].'></td></tr>';
print'<tr><td><b>Mobile No</b></td>
<td><input type="text" name="mobileno" maxlength="10" value='. $db_field['mobile_no'].'></td></tr>';
print'<tr><td><b>Emailid</b></td><td><input type="text"name="email_id" value='. $db_field['email_id'].'></td></tr>';
print'<tr><td><b>Party name</b></td><td><input type="text" name="partyname" value='.$db_field['partynames'].'></td></tr>';
print'<tr><td>Current post Cand</td><td><input type="text" name="candpost" value='. $db_field['candposition'].'></td></tr>';
print '<tr><td><input type="submit" name="submit" value="Save"></td></tr>';
}
print '</table>';
print '</from>';
print '</div>';
mysqli_close($conn);
?>
