<html>
<head>
<title>candidate registration</title>
</head>
<body>
<?php
$username="root";
$password="";
$database="evoting";
$server="127.0.0.1";
$myconn=mysqli_connection($server,$username,$password,$database);
if($myconn)
{
 $candregid=$_GET['candreg_id'];//coming from page
 $fname=$_GET['fname'];
 $mame=$_GET['mname'];
 $lname=$_GET['lname'];
 $candfhname=$_GET['fhnamec'];
 $mon=$_GET['mon'];
 $gender=$_GET['gender'];
 $candcard=$_GET['card'];
 $candcardno=$_GET['cardno'];
 $candaddress=$_GET['txtaddress'];
 $country=$_GET['country'];
 $state=$_GET['state'];
 $city=$_GET['city'];
 $pcode=$_GET['pcode'];
 $candmobno=$_GET['mobileno'];
 $candemailid=$_GET['email_id'];
 $candpost=$_GET['candpost'];
/*$candphotos=$_GET['candphoto'];
  $candsymbol=$_GET['candsymb'];*/
 $SQL="Insert into candidateregis(candreg_id,fname,mname,lname,fhnamec,dob,gender,card,cardno,address,country,state,city,pincode_no,mobile_no,email_id,candpoistion)
 values
 (,'fname','mname','lname','candfhname','mon','gender','candcard','candcardno','candaddress','country','state','city',pcode,candmobno,'candemailid')";
 $result=mysqli_query($myconn,$SQL);//query
 if($result)
 {
  echo"<b>Record Inserted Successfully</b>";
 }
else
{
 echo "Record Insert Failed".mysqli_error($myconn);
}
mysqli_close($myconn);
//echo "<br> To insert another record, please <a href='inshome.html'>Click</a> here";
}
else
{
 print "Database Not Found";
}
?>
</body>
</html>