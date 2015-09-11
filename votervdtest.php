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
#div 
{
position:static;
top:0px;

width:100%;
padding-top:0px;
padding-left:0px;
padding-bottom:10px;

font-size: large;
font-style:italic;

background-color:lightgray;
}


a:hover
{
text-decoration:none;
}
li
{
display:inline;
padding-right:30px;
padding-left:30px;
}
#div1{
     position:absolute;
    top:150px;
   float: left;
    width: 150px;
    height: 250px;
    border: 2px solid #000000;
    margin-left: 50px;
	font-style:italic;
	background-color:gray;
	font-size:20px;
}
#voter_delete
{
	position:absolute;
    top:150px;
   float: left;
    width: 1000px;
    height: 250px;
    border: 2px solid #000000;
    margin-left: 250px;
	font-size:20px;
	
}

#divf
{
position:absolute;
bottom:0px;
border:2px solid;
width:100%;
height:20px;
}
</style>
<script>
function deletevoter()
{ 
     
	var request;
	request=new XMLHttpRequest();
	//alert("1");
	try
	{
		//alert("2");
	request.onreadystatechange=function()
	{ 
	    //alert("3");
		if (request.readyState == 4) {
			//alert("4");
                document.getElementById("voter_delete").innerHTML = request.responseText;
	}
	
	}
	request.open("GET","viewvtest.php",true);
	request.send();
	}
	catch(e)
	{
		alert("Hello1");
	}
}
</script>
</head>

<body >
<div id="div">

<ul>
  <li><img src="images/logo.png" width="20%" height="7%"></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Election</a></li>
  <li><a href="">Caste Vote</a></li>
  <li><a href="registerusercand.html">Register</a></li>
  <li><a href="loginua.php">Login</a></li>
  <li><a href="About us">About us</a></li>
  <li><a href="contactus.php">Contact us</a></li>
   </ul>
</div>

<div id="div1"><a href="viewv.php">VIEW</a><br><br>
                <a href="#" onclick="deletevoter();return false;">DELETE</a>
 </div>
 <div id="voter_delete">
 </div>
 <div id="divf"><p>Footer</p></div>


</body>
</html>
