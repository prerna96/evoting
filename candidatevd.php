<html>
<head>
<title>Candidate view/delete</title>

<style type="text/css">

*
{
margin:0px;

padding:0px;
}
body
{
background-color:white;
}
#div24 
{
position:static;
top:0px;

width:100%;
padding-top:0px;
padding-left:0px;
padding-bottom:10px;

font-size: large;
font-style:italic;

background-color:steelblue;
}

a:hover
{

text-decoration:none;
}
li
{
display:inline;
padding-right:20px;
padding-left:20px;
}
#div25{
     position:absolute;
    top:150px;
   float: left;
    width: 150px;
    height: 250px;
    border: 4px solid blue;
    margin-left: 50px;
	font-style:italic;
	background-color:gray;
	font-size:20px;
}
#cand_delete
{
  position:absolute;
  top:150px;
  float:left;
  width:1000px;
  height:250px;
   
  margin-left:250px;
   font-size:20px;
}
#msg
{
  position:absolute;
   top:70px;
   float:left;
   width:500px;
   border:2px solid black;
   height:50px;

}
#divf
{
position:relative;
bottom:0px;
margin-top:70%;
border:2px solid;
width:100%;
height:20px;
background-color:steelblue;
}
</style>
<script type="text/javascript">
function show()
{
  var d=document.getElementById("cand_delete");
   var a=d.innerHTML;
    alert(a);
	 var opt=d.getElementsByClassName("candid");
	 var value=opt[0].value;
	 var request;
	  request=new XMLHttpRequest();
	  request.onreadystatechange=function()
		 {
		   if(request.readyState==4)
		   {
		    document.getElementById("cand_delete").innerHTML=request.responseText;

//for verified status 
  var emailid=d.getElementsByClassName("getemailid");
  var bt=d.getElementsByClassName("getbutton");
 
 for(var i=0;i<bt.length;i++)
 {
  bt[i].onclick=function()
  {
   for(j=0;j<bt.length;j++)
    {
      if(this==bt[j])
       {
         emailid[j].style.color="red";
         var val=emailid[j].innerHTML;
         alert(val);
         var request1=new XMLHttpRequest();
         var qrst="?emailid="+val;       
         alert(qrst);
         alert("befor ready");
         request1.onreadystatechange=function()
          {
            alert("func open");
             if(request1.readyState==4)
              {
                alert("if");
                alert("Record Verified");
              }
           }
           alert(qrst);
           request1.open("GET","verifiedc.php"+qrst,true);
           request1.send();        
       }//if
    }//for
 }//bt
}//for
}//if
}//if
		 
	      try
         {		  
	    var qrst="?status="+value;
		 alert(qrst);
		  request.open("GET","viewc.php"+qrst,true);
		   request.send();
		   }
		   catch(e)
		   {
		    alert("Data is not found");
		   }
}
function viewcand()
{
 document.getElementById("cand_delete").innerHTML='<select name="candidate" class="candid" onchange="show();"><option>Select</option><option>VERIFIED</option><option>NON VERIFIED</option></select>';
}

function deletecand()
{
 var request=new XMLHttpRequest();
  try
  {
   request.onreadystatechange=function()
    {
	  if(request.readyState==4) 
	    {
		   document.getElementById("cand_delete").innerHTML=request.responseText;
		   var d=document.getElementById("cand_delete");
		   var a=d.innerHTML;
		   alert(a);
		    var reg=d.getElementsByClassName("getcandreg");
            var bt=d.getElementsByClassName("getbutton");	
              for(var i=0;i<bt.length;i++)
                {
				 bt[i].onclick=function() //function when button clicks
				  {
				   for(j=0;j<bt.length;j++)
				    {
					 if(this==bt[j])
					  {
					   reg[j].style.color="red";
					    var val=reg[j].innerHTML;//
						 alert(val);
						  var request1;
						  request1=new XMLHttpRequest();
						   var qrst="?candreg_id="+val;//candreg_id ->database
						   alert(qrst);
						   request1.open("GET","deletecand.php"+qrst,true);
						    request1.send();
							request1.onreadystatechange=function()
							  {
							    if(request1.readyState==4)
								 {
								   document.getElementById("cand_delete").innerHTML=request1.responseText;
								   alert("Record Deleted");
								 }
							  }
					  
					  }
					}
				  }
				
				}			  
		  
		}//ready state cond close
	}// function close
      
	   request.open("GET","deletec.php",true);
	   request.send();
  }//try close
   catch(e)
    {
	 alert("Hello1");
	}
}//function delete cand end
</script>
</head>

<body >
<div id="div24">

<ul>
  <li><img src="images/elogo.png" width="20%" height="7%"></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Election</a></li>
  <li><a href="">Caste Vote</a></li>
  <li><a href="registerusercand.html">Register</a></li>
   <li><a href="loginua.php">Login</a></li>
  <li><a href="About us">About us</a></li>
  <li><a href="contactus.php">Contact us</a></li>
   </ul>
</div>

<div id="div25"><a href="#"onclick="viewcand();return false">VIEW</a><br><br>
                <a href="#" onclick="deletecand();return false">DELETE</a>
 </div>
 
 <div id="cand_delete">
 
 </div>
 
 <div id="divf"><p>Footer</p></div>


</body>
</html>
