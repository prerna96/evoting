<?php
session_start();
$emailidv=$_SESSION['emailid'];//$_SESSION['emailid'] -> value come from (loginvoterdata.php) where emailid session is set
$conn=mysqli_connect("127.0.0.1","root","","evoting");
if(!$conn)
{
 die("Unable to connect");
}
$result=mysqli_query($conn,"select * from registration where email_id='$emailidv'");//
if(mysqli_num_rows($result)<1)//function returns the number of rows in a result set
{
 echo "No record found";
}
while($db_field=mysqli_fetch_array($result))//fetches a result row as an associative array,a numeric array, or both
{
 print'<form action="regupdatedata.php" method="post">';
 print '<table  cellspacing="30" cellpadding="30">';

 print '<tr><td>First Name:</td><td><input type="text" name="fname"value='.$db_field['fname'].'>
  </td></tr>';
print '<tr><td>Middle Name:</td>
<td><input type="text" name="mname" value='.$db_field['mname'].'></td></tr>';

print '<tr><td>Last Name:</td>
<td><input type="text" name="lname" value='.$db_field['lname'].' ></td></tr>';
print '<tr><td>Father/Husband:</td>
<td><input type="text" name="fhnamev" value='. $db_field['fhnamev'].'></td></tr>';
print'<tr><td>Mother Name:</td>
<td><input type="text" name="mnamev" value='. $db_field['mnamev'].'></td></tr>';
print'<tr><td>DOB:</td>
<td><input type="text" name="dob" value='.$db_field['dob'].'></td></tr>';

print "<tr><td>Gender:</td>
<td><select name='gender'>
<option value=". $db_field['gender'].">".$db_field['gender']."</option>
 <option>Male</option>
 <option>Female</option>
</select>
 </td></tr>";
 
print "<tr><td>Address:</td>

<td><textarea rows='4' cols='30' name='txtaddress' value=". $db_field['address'].">". $db_field['address']."</textarea></td></tr>";
print "<tr><td>Card:</td>

<td><select name='card'>
<option value=". $db_field['cardav'].">". $db_field['cardav']."</option>
 <option>Aadhar id Card</option>
 <option>Voter id Card</option>
 </select>
</td></tr>";
print '<tr><td>Card No.</td>
<td><input type="text" name="cardno" value='. $db_field['card_no'].' min="6" max="10"></td></tr>';

print "<tr><td>Country:</td><td><select name='country'>
<option value=".$db_field['country'].">".$db_field['country']."</option>
</select>
</td>
</tr>";
print "<tr><td>State:</td>
<td>
<select name='state'>
<option value=".$db_field['state'].">".$db_field['state']."</option>
</select>
</td></tr>";
print "<tr><td>City:</td>";
print "<td>";
print "<select name='city'>";
print "<option value=".$db_field['city'].">".$db_field['city']."</option>";
print'<option value="Bhopal">Bhopal</option>
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
print'<tr><td>Pin code:</td>
<td><input type="text" name="pcode" value='.$db_field['pincode_no'].'></td></tr>';
print'<tr><td>Mobile No:</td>
<td><input type="text"name="mobileno"  maxlength="10" value='. $db_field['mobile_no'].'></td></tr>';
print'<tr><td>Email id:</td>
<td><input type="text" name="email_id" value='. $db_field['email_id'].'></td></tr>';
print '<tr><td>Select photo</td><td>
<input type="file" name="fileToUpload" id="fileToUpload">
</td></tr>';
  
print '<tr><td><input type="submit" name="submit" value="Save"></td></tr>';
}
print '</table>';
print '</form>';
mysqli_close($conn);
?>