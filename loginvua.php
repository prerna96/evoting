<?php
include "menupage.html";
?>

<?php
session_start();
?>

<html>
<head>
<title>Login user admin voter form</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script type="text/javascript"> 
  function valid()
  {
   var myform=document.login;
   var emailid=myform.emailid;
   var pass=myform.pass;
   var type=myform.type;

     var sp1=document.getElementById("sp1");
     var sp2 =document.getElementById("sp2");
	 var sp3=document.getElementById("sp3");
	 
         sp1.style.visibility="hidden";
         sp2.style.visibility="hidden";
		 sp3.style.visibility="hidden";
		   var status="true";
	       if(emailid.value=="")
		   {
		    sp1.innerHTML="Emailid Required";
		    sp1.style.color="red";
			sp1.style.visibility="visible";
			status=false;
		   }
		   	 
		  else if(pass.value=="")
            {
			 sp2.innerHTML="Password Required";
			 sp2.style.color="red";
			 sp2.style.visibility="visible";
			 status=false;
			}
			 
			 else if(type.value=="Select")
			 {
			  sp3.innerHTML="Select Type";
			  sp3.style.color="red";
			   sp3.style.visibility="visible";
			   status=false;
			 }
		    return status;
    }
</script>
</head>
<body>
 <div id="div12"><h2>LOGIN USER/ADMIN FORM</h2> </div>
  
  <div id="div13">
              
        <form name="login" action="loginvoterdata.php" onsubmit="return(valid())" method="get">
           <table  cellspacing="20" cellpadding="20">
         <tr class="if"><td>Emailid:</td>
           <td><input type="text" name="emailid" placeholder="enteremailid" value=""><span id="sp1"></span></td>
            </tr>
           
		<tr class="if"><td>Password Name:</td>
           <td><input type="text" name="pass" placeholder="enter password" value=""><span id="sp2"></span></td>
         </tr>   
            
        <tr><td></td><td><input type="submit" value="submit"></td>
		<td>
		   <select name="type">
		    <option>Select</option>
           <option value="VOTER"> VOTER</option>
           <option value="CANDIDATE">CANDIDATE</option>
           <option value="ADMIN">ADMIN</option>
           </select><span id="sp3"></span>
		</td>
		</tr>
           
          <tr><td></td><td>Forgot password
              <a href="http://www.gmail.com">click here</a></td>
		</tr>
      </table>
    </form>
	
</div>
                    
</body>

</html>
<?php
if(isset($POST['submit']))
{
 //echo "Your login";
 $_SESSION[emailid]=$_POST["emailid"];//session is set
 header("Location:loginvoterdata.php");
}
?>
<?php
include "footerpage.html";
?>