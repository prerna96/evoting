
<?php
$username="root";
$password="";
$database="evoting";
$server="127.0.0.1";
$myconn=mysqli_connect($server,$username,$password,$database);
if($myconn)
{
 //$candregid=$_GET['candreg_id'];
 $fname=strtoupper($_POST['fname']);//to make password used strtoupper
 $mname=strtoupper($_POST['mname']);
 $lname=strtoupper($_POST['lname']);
 $candfhname=strtoupper($_POST['fhnamec']);
 $mon=$_POST['mon'];
 $date=$_POST['date'];
 $year=$_POST['year'];
 $gender=$_POST['gender'];
 $candcard=$_POST['card'];
 $candcardno=$_POST['cardno'];
 $candaddress=$_POST['txtaddress'];
 $country=$_POST['country'];
 $state=$_POST['state'];
 $city=$_POST['city'];
 $pcode=$_POST['pcode'];
 $candmobno=$_POST['mobileno'];
 $candemailid=$_POST['email_id'];
 $candpost=$_POST['candpost'];
 $candpartyn=$_POST['partyname'];
//$candphotos=$_POST['candphoto'];
//$candsymbol=$_POST['candsymb'];
  //reg id start//
$dt=date('y');//two digit year give
$a=rand(1000,9999);
$c="C";
$str1=substr($fname,0,2);
$str2=substr($lname,0,2);
$regid=$c.$str1.$str2.$dt.$a;
echo $regid;
//red id end//
//password start
$dt=date('m');
$c="C";
$str1=substr($fname,0,3);
$str2=substr($lname,0,2);
$pwd=$c.$str1.$str2.$dt;
echo $pwd;
//reg id end//
//dob start//
$dob=$mon.'-'.$date.'-'.$year;
//dob end//
//photo upload start//
 $target_dir1 = "upload/candidate/candidateimg/";
 $target_dir2 = "upload/candidate/candpartysymbol/";
$target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);//uploads/name of the file with extension
$target_file2 = $target_dir2 . basename($_FILES["fileToUpload2"]["name"]);//uploads/name of the file with extension
                                                       //basename() function returns the filename from a path. basename(path,suffix),suffix Specifies a file extension
//echo "<br> $target_file";
$uploadOk1 = 1;
$uploadOk2 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);//returns only extension
//echo "<br> $imageFileType1";
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);//returns only extension,
//echo "<br> $imageFileType2";
// Check if file already exists
if (file_exists($target_file1)&& file_exists($target_file2)) 
{
    //echo "Sorry, file already exists.";
    echo Header("Location:sfileae.html");

	$uploadOk1 = 0;
    $uploadOk2 = 0;
}
// Check file size
if (($_FILES["fileToUpload1"]["size"] > 500000) && ($_FILES["fileToUpload2"]["size"] > 500000)) 
{
    //echo "Sorry, your file is too large.";
		echo Header("Location:filetolarge.html");


	$uploadOk1 = 0;
    $uploadOk2 = 0;
}
// Allow certain file formats
if(($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" )AND
($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2!= "gif" )) 
{
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  echo Header("Location:filejjpg.html");


	$uploadOk1 = 0;
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if (($uploadOk1 == 0)AND($uploadOk2 == 0)) 
{
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
    if ((move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1))AND(move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2))) 
	{
         "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
         "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
}
}
//end of upload//
//Insert query
 $SQL="Insert into candidateregis(candreg_id,fname,mname,lname,fhnamec,dob,gender,card,cardno,address,country,state,city,pincode_no,mobile_no,email_id,candposition,partynames,candidatephoto,candpartysymb)
 values('$regid','$fname','$mname','$lname','$candfhname','$dob','$gender','$candcard','$candcardno','$candaddress','$country','$state','$city',$pcode,$candmobno,'$candemailid','$candpost','$candpartyn','$target_file1','$target_file2')";
 $result=mysqli_query($myconn,$SQL);
 if($result)
 {
 //echo "<div id='divshow'>You are Successfully Registrated plz click here to visit Home page<a href='home.php'>Click</a></b></div>";
 echo Header("Location:divrsucc.html");
  //echo"<b>Record Inserted Successfully</b>";
 }
else
{
echo Header("Location:recinfail.html");
}		
//echo "<br> To insert another record, please <a href='home.php'>Click</a> here";

//email and password
$SQL1 = "Insert into logincand(emailid,password)value('$candemailid','$pwd')";
$result = mysqli_query($myconn,$SQL1);
if($result)
{
	echo Header("Location:divrsucc.html");
}
else
{
echo Header("Location:recinfail.html");
}



}

else 
{
print 'Database NOT Found';
}
mysqli_close($myconn);
?>
</body>
</html>