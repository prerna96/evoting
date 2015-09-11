<?php
$$username="root";
$password="";
$database="evoting";
$server="127.0.0.1";
$conn=mysqli_connect($server,$username,$password,$database);

 if($conn)
{
 $upemailid=$_POST['email_id'];
 $result1="Select * from candidateregis where  emailid='$upemailid'";
 if(mysqli_fetch_assoc((mysqli_query($conn,$result1))==false))
{
 echo "<h2>No record found </h2>";
 return;
}
$upfname=($_POST['fname']);
$upmname=($_POST['mname']);
$uplname=($_POST['lname']);
$upfhname=($_POST['fhname']);
$updob=($_POST['dob']);
$upgender=($_POST['gender']);
$upcand=($_POST['card']);
$upcardno=($_POST['cardno']);
$uptxtaddress=($_POST[txtaddress]);
$upcountry=($_POST['country']);
$upstate=($_POST['state']);
$upcity=($_POST['city']);
$uppcode=($_POST['pcode]');
$upmobno=($_POST['mobileno']);
$upemailid=($_POST['email_id']);
$uppartyname=($_POST['partyname']);
$upcandpost=($_POST['candpost']);
$SQL="Update candidateregis set fname='$upfname',mname='$upmname',lname='$uplname',fhname='$upfhname',dob='$updob',gender='$upgender',card='$upcand',cardno='$upcardno',address='$uptxtaddress',country='$upcountry',state='$upstate',city='$upcity',pincode_no='$uppcode',mobile_no='$upmobno',email_id='$upemailid',partyname='partyname',candposition='candpost'";
$result2=mysqli_query($conn,$SQL);
 if($result2)
 {
  echo "Record Update Successfully";
 }
 else
 {
  echo "Record Update Failed";
 }
}


?>