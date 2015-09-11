<html>
<head>
<style>

 #divrsucc
 {
   margin-top:160px;
   margin-left:320px;
   margin-bottom:50px;
     
	 padding-top:7px;
     padding-right:4px;
     padding-bottom:5px;
     padding-left:4px;
 
  text-align:center;
   width:50%;
   height:40px;
  font-weight:bold;
  font-size:30px;
  color:Red;
  border:5px solid blue;
  border-radius:6px 6px 6px 6px; 
  box-shadow:1px 2px 7px 7px gray;
 }
</style>
</head>
<body>
<?php
//if(isset($_GET[submit])
$fname=strtoupper($_POST['fname']);//'fname' from userreg.. name given
$mname=strtoupper($_POST['mname']);
$lname=strtoupper($_POST['lname']);//to make password
$fhnv=strtoupper($_POST['fhnamev']);
$mnv=strtoupper($_POST['mnamev']);
$gender=$_POST['gender'];
$card=$_POST['card'];
$crdno=$_POST['cardno'];
$pcode=$_POST['pcode'];
$mobno=$_POST['mobileno'];
$emailid=$_POST['email_id'];
$mon=$_POST['mon'];
$date=$_POST['date'];
$year=$_POST['year'];
$address=$_POST['txtaddress'];
$statename=$_POST['state'];
$cityname=$_POST['city'];
$countryname=$_POST['country'];
//reg id start//
$dt=date('y');//two digit year give
$a=rand(1000,9999);
$v="V";
$str1=substr($fname,0,2);
$str2=substr($lname,0,2);
$regid=$v.$str1.$str2.$dt.$a;
//echo $regid;
//password start
$dt=date('m');
$v="V";
$str1=substr($fname,0,3);
$str2=substr($lname,0,2);
$pwd=$v.$str1.$str2.$dt;
echo $pwd;
//reg id end//

//dob start//
$dob=$mon.'-'.$date.'-'.$year;
echo $dob;
//dob end//

  //photo upload start//
 $target_dir = "upload/voterimg/";//folder to upload photo
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//uploads/name of the file with extension
//echo "<br> $target_file";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);//returns only extension
//echo "<br> $imageFileType";

// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
	echo Header("Location:sfileae.html");
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000)//50000 value is depend upon pixel 
 {
    //echo "Sorry, your file is too large.";
	echo Header("Location:filetolarge.html");
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     echo Header("Location:filejjpg.html");
	$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
	 echo Header("Location:filenotup.html");
	//echo "<div id='divrsucc'> RECORD  NOT INSERTED</div>";
	
	//echo "<a href='useradminreg.html'>Register</a>";
	//Header("Location:useradminreg.html");
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
}
//This for insert data into registration  and get emailid and password //
$user_name = "root";
$password = "";
$database = "evoting";
$server = "127.0.0.1";
$myconn = mysqli_connect($server, $user_name, $password, $database);
/*$mydb = mysql_select_db($database, $myconn);*/
if($myconn)
{
//$id=$_POST["bid"];
//$name=$_POST["bname"];
//$amt=$_POST["bpr"];
$SQL = "Insert into registration(reg_id,fname,mname,lname,fhnamev,mnamev,gender,cardav,card_no,pincode_no,mobile_no,email_id,dob,address,country,state,city,selectphoto) values
('$regid','$fname','$mname','$lname','$fhnv','$mnv','$gender','$card','$crdno',$pcode,$mobno,'$emailid','$dob','$address','$countryname','$statename','$cityname','$target_file')";//databasename,variablename//
$result = mysqli_query($myconn,$SQL);
if($result)
{   
//echo "<div id='divrsucc'> RECORD INSERTED </div>";
      echo Header("Location:divrsucc.html");

  	//echo "<span id='spmsg'>Record Inserted Successfully!";

 //echo "<div id=divshow>";
 
 //echo <b>You are Successfully Registrated <br>plz click here to visit Home page<a href="home.php">Click</a> </b>;
 //echo  "</div>";
}

else 
{
 echo Header("Location:recinfail.html");
//echo "<span id='sperror'>Record Insertion Failed! ". mysqli_error($myconn);
}
    

	
 //echo "<br> To insert another record, please <a href='home.html'>Click</a> here";

//email and password
$SQL1 = "Insert into loginvoter(emailid,password)value('$emailid','$pwd')";
$result = mysqli_query($myconn,$SQL1);
if($result)
{
	echo Header("Location:divrsucc.html");
}
else
{
 echo Header("Location:recinfail.html");
  //echo "To insert another record, please <a href='home.html'>Click</a> here";;
}



}

else 
{
print 'Database NOT Found';
}
mysqli_close($myconn);
}
//end of upload//
 
?>
</body>
</html>