<?php
session_start();
$eamilidv=$_SESSION['emailid'];

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
$fileToUpload=$_POST['fileToUpload'];
//$dob=$date.'-'.$mon.'-'.$year;

//start upload file//

  $target_dir = "upload/voterimg/newvimg/";//folder to upload photo
$target_file = $target_dir . $_FILES["fileToUpload"]["name"];//uploads/name of the file with extension
//echo "<br> $target_file";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);//returns only extension
//echo "<br> $imageFileType";

// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
	print_r($target_file);
	//echo Header("Location:sfileae.html");
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
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

}
 //end of upload file//

 $username="root";
$password="";
$database="evoting";
$server="127.0.0.1";
$conn=mysqli_connect($server,$username,$password,$database);

  if(!conn)
  {
   die("Unable to connect");
  }

   $SQL="UPDATE registration SET(reg_id=$regid,fname=$fname,mname=$mname,lname=$lname,fhnamev=$fhnv,mnamev=$mnv,gender=$gender,cardav=$card,card_no=$crdno,pincode_no=$pcode,mobile_no=$mobno,email_id='$emailid',dob='$dob',address='$address',country='$countryname',state='$statename',city='$cityname',selectphoto='$target_file')
 WHERE email_id='$emailidv'";
   $result1=mysqli_query($conn,$SQL);
   if($result)
    {   

      echo Header("Location:divrsuccup.html");
    }

	else
	{
	  echo Header("Location:divrfaileup.html");
	  //echo "<br> To update another record, please <a href='useradminreg.html'>Click</a> here";
	}
mysqli_close();
}
?>