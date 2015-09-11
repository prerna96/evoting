<html>

<head>
<title> home main</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
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
color:;
text-decoration:none;
}
li
{
display:inline;
padding-right:30px;
padding-left:30px;
}
#imgs
{
background-color:white;
border:2px;
 padding-top:50px;
 padding-bottom:50px;
}
#divbig
{
position:absolute;
top:235px;
left:230px;
border:2px solid;
height:250px;
width:670px;

}
#div1{
     position:absolute;
    top:235px;
   float: left;
    width: 200px;
    height: 50px;
    border: 2px solid #000000;
    margin-left: 10px;
}


#div2
{
position:absolute;
top:340px;
left:10px;
border:2px solid;
height:50px;
width:200px;
}
#div3
{
position:absolute;
top:420px;
left:10px;
border:2px solid;
height:60px;
width:200px;
}
#div4
{
position:absolute;
top:240px;
right:5px;
border:2px solid;
height:110px;
width:200px;

}
#div5
{
position:absolute;
top:370px;
right:5px;
border:2px solid;
height:110px;
width:200px;
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
</head>

<body >
<div id=img>

</div>
<div id="div">

<ul>
  <li><img src="images/logo.png" width="20%" height="7%"></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Election</a></li>
  <li><a href="">Caste Vote</a></li>
  <li><a href="registerusercand.html">Register</a></li>
  <li><a href="loginvua.html">Login</a></li>
  <li><a href="About us">About us</a></li>
  <li><a href="contactus.php">Contact us</a></li>
   </ul>
</div>

<div id=imgs>
<marquee behavior="scroll" direction="left"><img src="images/image.jpg" width="120px" height="100px" alt="voting image"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<img src="images/image2.jpg" width="120" height="80" alt="voting image" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<img src="images/image3.jpg" width="120" height="80" alt="voting image" />
</marquee>
</div>
<div id="div1"><img src="images/politicalparties.jpg" width="200px" height="50px"</a></div>
 <div id="div2"><img src="images/pollingstation.jpg" width="200px" height="50px"</a></div>
 <div id="div3"><p>thrid Division</p></div>
 <div id="divbig"> 
 <div id="div1"><h1>LOGIN USER/ADMIN FORM</h1> </div>
  <div id="div2">
        
      <table  cellspacing="20" cellpadding="20">
                       
        <form action="loginvoterdata.php" method="get">
 
         <tr class="if"><td>Emailid:</td>
           <td><input type="text" name="emailid" placeholder="enteremailid" ></td>
         </tr>
           
		<tr class="if"><td>Password Name:</td>
           <td><input type="text" name="pass" placeholder="enter password" ></td>
         </tr>   
 
        <tr><td></td><td><input type="submit" value="submit"></td>
		<td>
		   <select name="Type" >
           <option> VOTER</option>
           <option>CANDIDATE</option>
           <option>ADMIN</option>
           </select>
		</td>
		</tr>
           
          <tr><td></td><td>Forgot password click here....
              <a href="http://www.gmail.com">click here</a></td></tr>
    
    </form
	</table>
</div></div>
<div id="div4"><p>fourth Division</p></div>
 <div id="div5"><p>Fivth Division</p></div>
 <div id="divf"><p>Footer</p></div>


</body>
</html>
