<html>

<head>
<title>view/delete</title>

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
#div22
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
padding-left:15px;
}
#div23{
     position:absolute;
    top:150px;
    float: left;
    width: 120px;
    height: 250px;
	font-weight:bold;
    border: 3px solid blue;
    margin-left:20px;
	padding-left:5px;
	font-style:italic;
	background-color:white;
	font-size:20px;
     text-align:center;
	border-radius: 7px 4px 7px 4px;
    
}
#voter_delete
{
	position:absolute;
    top:150px;
   float: left;
    width: 1200px;
    margin-left: 200px;
	font-size:20px;
}

#sendemailv
{
	position:absolute;
    top:150px;
   float: left;
    width: 1200px;
    height: 250px;
    margin-left: 200px;
	font-size:20px;
}


<!--#msg
{
	position:absolute;
    top:70px;
   float: left;
   left:500px;
    width: 500px;
	 border: 2px solid #000000;
    height: 50px;
}
-->
#divf
{
position:fixed;
bottom:0px;

border:2px solid;
width:100%;
height:20px;
background-color:steelblue;
}
#mainvd
{
border:2px solid;
background-color:yellow;

}

</style>
<script>
function show()
{
	//document.getElementById("voter_delete").innerHTML = request.responseText;	
    var d=document.getElementById("voter_delete");
    var a=d.innerHTML;//
	//alert(a);
	var opt=d.getElementsByClassName("voterid");
	var value=opt[0].value;
	var request;
	request=new XMLHttpRequest();

	request.onreadystatechange=function()
	{ 
		if (request.readyState == 4) {
		alert("if first");
                document.getElementById("voter_delete").innerHTML = request.responseText;
				//document.getElementById("msg").innerHTML ="";		 
		
		         
//for verified status 
 var emailid=d.getElementsByClassName("getemailid");
 var bt=d.getElementsByClassName("getbutton");
 
 
   for(var i=0;i<bt.length;i++)//tell the length of button//
    {
      bt[i].onclick=function()//function()->on click work (bt[i].onclick)
       {
          for(j=0;j<bt.length;j++)
            {
               if(this==bt[j])//this is refer to that particular button which we click
                {
                  emailid[j].style.color="red";
                   var val=emailid[j].innerHTML;
                   alert(val);
                   var request1 = new XMLHttpRequest();//
                   var qrst="?emailid="+val;
                   alert(qrst);
               // alert("before ready");
               request1.onreadystatechange=function()
                  { 
				//  alert("func open");
                       if(request1.readyState==4)
                         {
					//	 alert("if");
						 //document.getElementById("voter_delete").innerHTML="jhjh";
                         //document.getElementById("voter_delete").innerHTML = request1.responseText;
                          alert("Record Verified");
						  
                       }
                     } 
					 alert(qrst);
					 request1.open("GET","verifiedv.php"+qrst,true);
               request1.send();
                 }
           }//for
   
       }//func
    }//for
		}
				
	}
	try
	{
	 var qrst="?status="+value;//status we select 
	 alert(qrst);
	 request.open("GET","viewv.php"+qrst,true);
	 request.send();
	}
	catch(e)
	{
		alert("Hello1");
	}
}
function viewvoter()
{ 
   document.getElementById("voter_delete").innerHTML='<select name="voter" class="voterid" onchange="show();"><option>Select</option><option>VERIFIED</option><option>NON VERIFIED</option></select>';	
}


//delete user ------
function deletevoter()
{ 
    //document.getElementById("msg").innerHTML ="";	
	var request;//
	request=new XMLHttpRequest();
	try
	{
	request.onreadystatechange=function()
	{ 
		if (request.readyState == 4) 
		{
			
                document.getElementById("voter_delete").innerHTML = request.responseText;	
                var d=document.getElementById("voter_delete");
                //var a=d.innerHTML;
				//alert(a);
				var reg=d.getElementsByClassName("getreg");//we are getting 'getreg' from deletev.php//
				//alert(reg);
				var bt=d.getElementsByClassName("getbutton");//we are getting'getbutton' from deletev.php//
				//alert(bt);
				
				for(var i=0;i<bt.length;i++)
				{
				 bt[i].onclick=function() // function run when button clicks
				 {
				  //alert("button click");
				    for(j=0;j<bt.length;j++)
                                    {
                                      if(this==bt[j])//particular button which is press
                                         {
						//alert("6");
						reg[j].style.color="red";
				     //alert(reg[0]);
				     var val=reg[j].innerHTML;//
				     alert (val);
				     var request1;
					 request1= new XMLHttpRequest();
					 var qrst="?regid="+val;//
					 alert(qrst);
					 request1.open("GET","deletevoter.php"+qrst,true);
				     request1.send();
					 request1.onreadystatechange=function()
					 { 
					    //alert("5"); 
						 if(request1.readyState==4)
						 { 
					        //alert("7");
							document.getElementById("voter_delete").innerHTML = request1.responseText; 
							alert("Record Deleted");
						 }
							 
					 }
				     
					 
				    }
				   }
				   
				}				   
				}				
		}//ready state cond close
				
	}//function close
	request.open("GET","deletev.php",true);
	request.send();
	} // try close
	catch(e)
	{
		alert("Error occur");
	}
	
}//function deletevoter end



</script>
</head>

<body >
<div id="div22">

<ul>
  <li><img src="images/elogo.png" width="20%" height="7%"></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Election</a></li>
  <!--<li><a href="">Caste Vote</a></li>-->
  <li><a href="registerusercand.html">Register</a></li>
  <li><a href="loginua.php">Login</a></li>
   <li><a href="About us">About us</a></li>
  <li><a href="contactus.php">Contact us</a></li>
   </ul>
</div>
<div id="mainvd">
<div id="div23">
<br><br>
   <a href="#" onclick="viewvoter();return false;">VIEW</a><br><br>
   <a href="#" onclick="deletevoter();return false;">DELETE</a><br><br>
   <!--<a href="#" onclick="send();return false;">Email</a>-->
 </div>
 <div id="voter_delete">

 </div>
 
 </div>

 
 
 
 </div>
 
 
</body>
</html>
