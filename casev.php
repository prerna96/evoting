<?php
//echo "Hello";
$username="root";
$password="";
$database="evoting";
$server="127.0.0.1";
$count=0;//
$a="";//
$dis="";

if(isset($_POST['submit']))
{
 $dis="disabled";
 $a=$_POST['party'];
 echo $a;
 $conn=mysqli_connect($server,$username,$password,$database);
  if(!$conn)
  {
    die("Unable to connect to database");
  }
   $result=mysqli_query($conn,"select * from party where partyname='$a'");
   while($dbrec=mysqli_fetch_assoc($result))
   {
    $count=$dbrec['count'];
	//echo $count;
    $count=$count+1;
    echo $count;
   }
$conn1=mysqli_connect($server,$username,$password,$database);
  if(!$conn1)
  {
    die("Unable to connect to database");
  }  
$SQL="update party set count=$count where partyname='$a'"; 
$resup=mysqli_query($conn1,$SQL);
 if($resup)
 {
 echo "<br>";
 // echo Header("Location:voteupdate.html");
    echo"Voting is update";

 }
 
 mysqli_close($conn);
}



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
  <script type="text/javascript">
function valid()
{
var myform=document.castvote;
var partyselect=myform.party;
var sp1=document.getElementById("sp1");
 
  sp1.style.visibility="hidden";
   var status="true";
     if(partyselect.value=="")
      {
       sp1.innerHTML="Plz Select the party"; 
       sp1.style.color="red";
       sp1.style.visibility="visible";
       alert(status);
       status=false;
      }
     return status;
   }
</script>
</head>
<body>


<div id="divcv">
<h4>CAST VOTE</h4>
<form name="castvote" action="casev.php" onsubmit="return(valid());" method="post">
<table>
<tr><td>
<input type="radio" name="party" value="BJP">&nbsp;&nbsp;<img src="images/bjp.JPG" style="width:90px;height:40px">&nbsp;&nbsp;<b><i>Bharatiya Janata Party</i></b></input>
<span id="sp1"></span></td></tr><br>
<tr><td>
<tr><td>
<input type="radio" name="party" value="AAP">&nbsp;&nbsp;<img src="images/aap.jpg" style="width:90px;height:40px">&nbsp;&nbsp;&nbsp;<b><i>App</i></b></input>
<span id="sp1"></span></td></tr><br>
<tr><td>
<input type="radio" name="party" value="Congress">&nbsp;&nbsp;<img src="images/congress.jpg" style="width:90px;height:40px">&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Congress</i></b></input><span id="sp1"></span></td></tr>
<tr><td></td><td>
<input type="submit" <?php echo $dis ?> name="submit" value="submit" id="subvote" ></td></tr>
</table>
</form>
</div>
</body>
</html>