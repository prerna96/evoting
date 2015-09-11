<?php
 include'./mail.php';
  if(isset($_POST['submit']))
  {
   $to=$_POST['email'];
   $subject = $_POST['subject'];
   $body = $_POST['msg'];
	$user_name = "root";	
    send_mail($to,$subject,$body,'');	
   }
?>
<html>
<head>
<title>Contact us</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script>
 function valid()
 {
  var myform=document.contfrm;
  // var name=myform.name;  
  var subject=myform.subject;
   var email=myform.email;
   var msg=myform.msg;
     var sp1=document.getElementById("sp1");
	  var sp2=document.getElementById("sp2");
	  var sp3=document.getElementById("sp3");
	   sp1.style.visibility="hidden";
	   sp2.style.visibility="hidden";
   	   sp3.style.visibility="hidden";  
        var status="true";
		/*if(name.value=="")
		 {
		  sp1.innerHTML="Name is required";
		  sp1.style.color="red";
		   sp1.style.visibility="visible";
		   status=false;
		 }*/
		  
		  if(subject.value=="")
		   {
		     sp1.innerHTML="Subject is required";
			 sp1.style.color="red";
			  sp1.style.visibility="visible";
			  //alert("subject");
			  status=false;
		   }
		  else if(email.value=="")
		   {
		    sp2.innerHTML="Emailid is required";
			sp2.style.color="red";
			sp2.style.visibility="visible";
			 status=false;
		   }
		   else if(msg.value=="")
		   {
		    sp3.innerHTML="Please give your message";
			sp3.style.color="red";
			 sp3.style.visibility="visible";
			  status=false;
		   }
		   return status;
 }
</script>
</head>
<body>
 <div id="div26"><h1>Contact Us</h1> </div>
  <div id="div27">
       
      <table  cellspacing="25" cellpadding="20">
                       
        <form name="contfrm" action="contactus.php" onsubmit="return(valid());" method="post">
 
        <!-- <tr class="if"><td>Name:</td>
           <td><input type="text" name="name" placeholder="entername" id="name"value=""><span id="sp1"></span></td>
         </tr>-->
          <tr class="if"><td>Subject:</td>
		  <td><input type="text" name="subject" placeholder="enter subject" value=""><span id="sp1"></span></td>
		  </tr>
         <tr class="if"><td>Email id:</td>
           <td><input type="text" name="email" placeholder="enter email" id="emailid" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter only emailid"><span id="sp2"></span></td>
        </tr>
        <tr class="if"><td>Message:</td>
         <td><textarea name='msg' rows="4" cols="30" value=""></textarea><span id="sp3"></span></td>
        </tr>
     <tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>
 </div>

</form>        
                
</body>

</html>
