<html>
<head>
<style>
h3
{
 color:blue;
 width:600px;
 height:40px;
 margin-left:330px;
 margin-top:70px;
 font-family:Arial;
 font-size:30px;
 text-decoration:underline;
 text-align:center;
  box-shadow: -1px 4px 4px 4px gray;
}
 
#divrv
 {
  margin-top:30px;
  margin-left:400px;
  width:400px;
  height:300px;
  
  padding-left:23px;
  padding-top:15px;
  padding-bottom:15px;
 
  border:2px solid black;
  box-shadow: -2px 3px 7px 7px gray;
  font-family:Arial;
  text-align:center;
  text-decoration:underline;

  }
  
  table
{    
     text-align:center;
     width:370px;
	 height:300px;
	border: solid Fuchsia    6px;
     border-collapse:collapse;
}
tr,td
{
  text-align:justified;
  padding-top:5px;
  padding:left:0px;
  background-color: Aqua;
}

</style>
</head>
<?php
$username="root";
$server="localhost";
$password="";
$database="evoting";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
 die("Unable to connect");
}
$result=mysqli_query($conn,"select * from party");
 if(mysqli_num_rows($result)<1)
{
 echo "No record is Found";
}
  print "<h3>VOTING RESULT</h3>";
  print "<div id='divrv'>";
  print "<table>";
  print "<tr><th>Party</th><th>Count</th></tr>";
  while($db_field=mysqli_fetch_array($result))
{
   print "<tr><td>".$db_field['partyname']."</td><td>".$db_field['count']."</td></tr>";
  //print "<tr><td><b>Congress</b></td><td>".$db_field['partyname']."</td></tr>";
 }
 print "</table>";
 print "</div>";
 mysqli_close($conn); 
?>
</html>