<!DOCTYPE html>
<?php
include './mail.php';
    if(isset($_POST['submit'])){
        
        $to = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['msg'];
		
		//database code
		$user_name = "root";
/*$password = "";
$database = "mail";
$server = "127.0.0.1";
$myconn = mysqli_connect($server, $user_name, $password, $database);
/*$mydb = mysql_select_db($database, $myconn);
if($myconn)
{

$SQL = "Insert into mail values('$to' ,'$subject','$body')";
$result = mysqli_query($myconn,$SQL);
if($result)
{
	echo "<span id='spmsg'>Record Inserted Successfully!";
}
else
{
echo "<span id='sperror'>Record Insertion Failed! ". mysql_error();
}		
mysqli_close($myconn);

}
else 
{
print "Database NOT Found ";
}*/
		
		
		
        send_mail($to,$subject,$body,'');
    }
?>
<html>
    <head>
        
        <title></title>
        
    </head>
    <body>
       
  <h2>Mailer Project</h2>
  <form method="POST" action="">
    
     To Email:
      <input type="email" name="email" placeholder="Enter email">
    Subject:
      <input type="text" name="subject" placeholder="Enter subject">
  
    Message:
      <textarea  name="msg" placeholder="Enter message"></textarea>
    
      <button type="submit" name="submit" >Submit</button>
  </form>
</div>
 
    </body>
</html>
