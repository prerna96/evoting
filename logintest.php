<?php
session_start();
?>
<html>
<head>
<title>Voter page</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
 <script type="text/javascript"> 
function show()
{
 var d=document.getElementById("viewprof");//viewprof div id where we have to show data
 var a=d.innerHTML;
 //alert(a);
 var request=new XMLHttpRequest();//XMLHttpRequest()-exchange a data with a server behind scenes 
    try
    {
      request.onreadystatechange=function()//onreadystatechange story a function(name of function) 
	                                       //which change a automatically each time the readystate property 
      {                                   
        if(request.readyState==4)
         {
           document.getElementById("viewprof").innerHTML=request.responseText;
          }
      }  
  // qrst="?emailidv="+value
  //alert(qrst);
  request.open("GET","viewprof.php",true);//before send req we have to invoke open() method of XMLHttpRequest()
    request.send(); //after setting req send method call
    }
     catch(e)
   {
     alert("Error in input");
    }
}
  
 function editprof()
{
 var d1=document.getElementById("viewprof");
var a1=d1.innerHTML;
 //alert(a1);
 var request=new XMLHttpRequest();
  try
   {
     request.onreadystatechange=function()
      {
        if(request.readyState==4)
          {
            document.getElementById("viewprof").innerHTML=request.responseText;
           }

       }
    
   request.open("GET","editprof.php",true);
     request.send();
   }
   catch(e)
   {
    alert("Error in input");
    
}}	
</script>
</head>
<body>
<div id="div16">
<ul>
  <li><img src="images/elogo.png" width="20%" height="7%"></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="electioninfo.html">Election</a></li>
  <li><a href="casev.php">Caste Vote</a></li>
   <li><a href="polparties.html">Party</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="About us">About us</a></li>
  <li><a href="contactus.php">Contact us</a></li>
   </ul>
</div>

<div id="divvpe">
<br><br>
<a href="#" onclick="show();return false;">VIEW PROFILE</a><br></br><br><br>
<a href="#" onclick="editprof();return false;">EDIT PROFILE</a>

</div>

 <div id="viewprof">

</div>

<!--<div id="editprof">

</div>-->


<?php

//echo $_SESSION['emailid'];
$user_name="root";
$password="";
$database="evoting";
$server = "127.0.0.1";
$myconn=mysqli_connect($server,$user_name,$password,$database);
if($myconn)
{
$emailidv=$_SESSION['emailid'];//get value of emailid from (loginvoterdata.php)  

$SQL="select * from registration where email_id='$emailidv'";//email_id->given in database and $emailidv-> set session emailid value(loginvoterdata.php)
//echo $emailidv ;
$res=mysqli_query($myconn,$SQL);
while($dbrec = mysqli_fetch_array($res))//
{
//echo "while";
$fname=$dbrec['fname'];
$src=$dbrec['selectphoto'];//bring photo  from database we use $src
//echo $src;
$lname=$dbrec['lname'];
//echo $lname;
$name=$fname." ".$lname;
//echo $name;
echo "<div id='pnv'>";
echo "<div id='photov'>";
echo "<img src='".$src."'alt='no image' width='90px' height='90px'>";
echo "</div>";
//echo "</div>";
echo "<div id='pvname'>";
echo "WELCOME:- ". $name;
echo "&nbsp&nbsp&nbsp";
echo "</div>";
echo "</div>";

}
}
else
{
	echo "database not found";
}

mysqli_close($myconn);
?>


<div id="divftv">

</div>

</body>
</html>