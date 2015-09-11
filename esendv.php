<html>
<head>
</head>
<body>
<?php
$status=$_GET["status"];
$username="root";
$password="";
$database="evoting";
$server="127.0.0.1"
$conn=mysqli_connect($server,$username,$password,$database);
 if(!$conn)
{
 echo "Unable to connect database";
}
$result=mysqli_query($conn,"SELECT email_id FROM registration WHERE status='VERIFIED'");
 if(mysqli_num_rows($result)<1)
  {
   echo "No records found";
    return;
 }



print "<div id='divemailv'>";
print "Select email:<select name='email'>";

echo for($i=0;$i<count($emailidlist);$i++)
{
 print "<option><?php echo $emailidlist[$i] ?></option>";
}

print"</select>";
print "</div>";


mysqli_close($conn);
</body>
</html>