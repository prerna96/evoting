<?php
session_start();
?>
<html>
<head>
<title>Candidate profile page</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"> 

<script type="text/javascript"> 
 function show()
 {
  var d=document.getElementById("viewcandprof");
  var a=d.innerHTML;
  alert(a);
  var request=new XMLHttpRequest();
  try
   {
    request.onreadystatechange=function()
     {
       if(request.readyState==4)
        {
         document.getElementById("viewcandprof").innerHTML=request.responseText;
        }
     }
     request.open("GET","candviewprof.php",true);
     request.send();
    }
    
    catch(e)
    {
     alert("Error in input");
    }
}
 
 function editprofcand()
  {
    var d1=document.getElementById("viewcandprof");
  var a1=d1.innerHTML;
   //alert(a1);
   var request=new XMLHttpRequest();
    try
    {
     request.onreadystatechange=function()
      {
        if(request.readyState==4)
          {
           document.getElementById("viewcandprof").innerHTML=request.responseText;
          }
      }
     request.open("GET","editcandprof.php",true);
     request.send();
   } 
    catch(e)
    {
      alert("Error in input");
    }
 }

 </script>   
</head>

<body >

<div id="div17">

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
<div id="divcpe">
<br><br>
<a href="#" onclick="show();return false">VIEW  PROFILE </a><br><br><br><br>
<a href="#" onclick="editprofcand();return false">EDIT PROFILE</a>

 </div>
<div id="viewcandprof">

</div>

<?php
$user_name="root";
$password="";
$database="evoting";
$server="127.0.0.1";
$myconn=mysqli_connect($server,$user_name,$password,$database);
if($myconn)
 {
 $emailidv=$_SESSION['emailid'];//
 $SQL="select * from candidateregis where  email_id='$emailidv'";
 $result=mysqli_query($myconn,$SQL);
 while($dbrec=mysqli_fetch_array($result))
  {
   $fname=$dbrec['fname'];
   $src=$dbrec['candidatephoto'];
   $lname=$dbrec['lname'];
    $name=$fname."".$lname;
    echo "<div id='pnc'>";
    echo "<div id='photoc>";
    echo "<image src=".$src." alt='no image' width='70px' height='70px'>";
    echo "</div>";
	//echo "</div>";
    echo "<div id='pcname'>";
    echo "WELCOME".$name;
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
<div id="divftc">

</div>
</body>
</html>
