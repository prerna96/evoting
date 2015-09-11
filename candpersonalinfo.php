<?php
include "menupage.html";
?>
<html>
<head>
<title>Candidate registration</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<script type="text/javascript"> 
  function valid()
  {
   var myform=document.candreg;
   var fnm=myform.fname;
   var lnm=myform.lname;
   var fhnmc=myform.fhnamec;
   var mon=myform.mon;
   var date=myform.date;
   var year1=myform.year;
   var gender=myform.gender;
   var card=myform.card;
   var cardno=myform.cardno;
   var address=myform.txtaddress;
   var country=myform.country;
   var state=myform.state;
   var city=myform.city;
   var pcode=myform.pcode;
   var mobileno=myform.mobileno;
   var email_id=myform.email_id;
   var partyname=myform.partyname;
   var candpost=myform.candpost;
        var d=new Date();
	
			var yr=d.getFullYear();//Get the four digit year (yyyy)
			//alert(yr);
			var formyr=year1.value;//Enter year by user 
			//alert(curryr);
			var age=yr-formyr;
			//alert(age);
	
        var sp1=document.getElementById("sp1");
        var sp2 =document.getElementById("sp2");
        var sp3=document.getElementById("sp3");
        var sp4=document.getElementById("sp4");
        var sp5=document.getElementById("sp5");
        var sp6=document.getElementById("sp6");
        var sp7=document.getElementById("sp7");
        var sp8=document.getElementById("sp8");
        var sp9=document.getElementById("sp9");
        var sp10=document.getElementById("sp10");
        var sp11=document.getElementById("sp11");
        var sp12=document.getElementById("sp12");
        var sp13=document.getElementById("sp13");
        var sp14=document.getElementById("sp14");
        var sp15=document.getElementById("sp15");
        var sp16=document.getElementById("sp16");
        var sp17=document.getElementById("sp17");
		var sp18=document.getElementById("sp18");
		//var sp19=document.getElementById("sp19");
	 sp1.style.visibility="hidden";
     sp2.style.visibility="hidden";
     sp3.style.visibility="hidden";
     sp4.style.visibility="hidden";
     sp5.style.visibility="hidden";
     sp6.style.visibility="hidden";
     sp7.style.visibility="hidden";
     sp8.style.visibility="hidden";
     sp9.style.visibility="hidden";
     sp10.style.visibility="hidden";
     sp11.style.visibility="hidden";
     sp12.style.visibility="hidden";
     sp13.style.visibility="hidden";
     sp14.style.visibility="hidden";
     sp15.style.visibility="hidden";
     sp16.style.visibility="hidden";
     sp17.style.visibility="hidden";
     sp18.style.visibility="hidden";
     //sp19.style.visibility="hidden";
       var status="true";
	       if(fnm.value=="")
		   {
		    sp1.innerHTML="First Name Required";
		    sp1.style.color="red";
			sp1.style.visibility="visible";
			status=false;
		   }
		  else if(lnm.value=="")
            {
			 sp2.innerHTML="Last Name Required";
			 sp2.style.color="red";
			 sp2.style.visibility="visible";
			 status=false;	
			}
			
           else if(fhnmc.value=="")
            {
			sp3.innerHTML="Father/Husband name required";
			 sp3.style.color="red";
			 sp3.style.visibility="visible";
			 status=false;
			}
			else if(mon.value=="Month")
		    {
			 sp4.innerHTML="Month Required";
			 sp4.style.color="red";
			 sp4.style.visibility="visible";
			 status=false;
        	}
			
		 else if(date.value=="Date")
		    {
			 sp5.innerHTML="Date Required";
			 sp5.style.color="red";
			 sp5.style.visibility="visible";
			 status=false;		
			}
		  else if(year1.value=="Year")
            {
			 sp6.innerHTML="Year Required";
			 sp6.style.color="red";
			 sp6.style.visibility="visible";
			 status=false;
			}
		else if(age<18)
		{
		 sp6.innerHTML="Not Able to give vote";
		 sp6.style.color="red";
		 sp6.style.visibility="visible";
		 status=false;
		}
          else if(gender.value=="")
            {
			  sp7.innerHTML="Gender Required";
			  sp7.style.color="red";
			  sp7.style.visibility="visible";
			  status=false;
			}	
           else if(card.value=="")
		    {
		     sp8.innerHTML="Card Required";
		     sp8.style.color="red";
			 sp8.style.visibility="visible";
			 status=false;
		    }
		  else if(cardno.value=="")
		   {
		    sp9.innerHTML="Cardno Required";
			sp9.style.color="red";
			sp9.style.visibility="visible";
			status=false;
		   }
		   /*else if(cardno.value.length<10 || cardno.value.length<6)
		   {
          sp10.innerHTML="Card no  Ten or Six digits Required";
          sp10.style.color="red";
          sp10.style.visibility="visible";
          status=false;
           }*/
		  else if(address.value=="")
		   {
		    sp10.innerHTML="Address Required";
			sp10.style.color="red";
			sp10.style.visibility="visible";
		    status=false;
		   }
		  else if(country.value=="")
		   {
		    sp11.innerHTML="Country Required";
		    sp11.style.color="red";
		    sp11.style.visibility="visible";
			status=false;
		   }
		  else if(state.value=="")
		  {
		   sp12.innerHTML="State Required";
		   sp12.style.color="red";
		   sp12.style.visibility="visible";
		   status=false;
  		  }
		 else if(city.value=="")
		  {
		   sp13.innerHTML="City Required";
		    sp13.style.color="red";
		    sp13.style.visibility="visible";
			status=false;
		  }
		 else if(pcode.value=="")
		  {
		   sp14.innerHTML="Pincode Required";
		   sp14.style.color="red";
		   sp14.style.visibility="visible";
		   status =false;
		  }
		 else if(pcode.value.length<6)
		  {
		   sp14.innerHTML="Pincode six digits required";
		   sp14.style.color="red";
		   sp14.style.visibility="visible";
		   status=false;
		  }
		 else if(isNaN(pcode.value))
		  {
		   sp14.innerHTML="Only Digits Allow";
           sp14.style.color="red";
		   sp14.style.visibility="visible";
		   status=false;	  
		  }
		 else if(mobileno.vlaue=="")
          {
		   sp15.innerHTML="Mobile no Required"
		   sp15.style.color="red";
		   sp15.style.visibility="visible";
		   status=false;
		  }	
         else if(mobileno.value.length!=10)
          { 
		   sp15.innerHTML="Mobile no ten Digits"
		   sp15.style.color="red";
		   sp15.style.visibility="visible";
		   status=false;  
		  }
            else if(isNaN(mobileno.value))
          { 
		    sp15.innerHTML="Only Digits Allow";
		    sp15.style.color="red";
		    sp15.style.visibility="visible";
		    status=false;  
		  }		  
          else if(email_id.value=="")
          {
		   sp16.innerHTML="Email_id Required";
		   sp16.style.color="red";
		   sp16.style.visibility="visible";
		   status=false;
		  }	
          else if(partyname.value=="")
		   {
		    sp17.innerHTML="Party Name Required";
		    sp17.style.color="red";
			sp17.style.visibility="visible";
			status=false;
		   }
          else if(candpost.value=="")
		   {
		    sp18.innerHTML="Post Name Required";
		    sp18.style.color="red";
			sp18.style.visibility="visible";
			status=false;
		   }		   
         return status;
  }
 </script>   
</head>

<body>
 
     
    
    <div id="div10"><h2> Candidate Registration</h2> </div>
    
    <div id="div11">
        
        
                       
<form name="candreg" action="candregisdata.php" onsubmit="return(valid())" method="post" enctype="multipart/form-data">
    
    <br>
    
   
        Please provide all the Details
       
 <table  cellspacing="30" cellpadding="30">
  <tr class="if"><td>First Name:</td>
 <td><input type="text" name="fname" placeholder="firstname" value="" ><span id="sp1"></span></td>
 </tr>
<tr class="if"><td>Middle Name:</td>
<td><input type="text" name="mname" placeholder="Middlename" value=""></span></td>
</tr>
<tr class="if">
<td>Last Name:</td><td><input type="text" name="lname" placeholder="lastname" value=""><span id="sp2"></span></td>
</tr>
<tr class="if"><th>Father/Husband:</th>
<td><input type="text" name="fhnamec" placeholder="Father/Husband" value=""><span id="sp3"></span></td>
</tr>
<tr class="if"><th>DOB:</th>
<td>
    <select name="mon">
    <option>Month</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select><span id="sp4"></span>
	
	<select name="date">
    <option>Date</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    </select><span id="sp5"></span>

    <select name="year">
    <option>Year</option>
	<option value="2011">2015</option>
	<option value="2011">2014</option>
	<option value="2011">2013</option>
	<option value="2011">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    </select><span id="sp6"></span>

</td>
</tr>
<tr class="if"><th>Gender:</th>
<td><input type="radio" name="gender" value="Male"><b>Male</b>
     <input type="radio" name="gender" value="Female"><b>Female</b><span id="sp7"></span></td>
</tr>
<tr class="if"><th>Card:</th>
<td><input type="radio" name="card" value="Aadhar Card"><b>Aadhar card </b>
 <input type="radio" name="card" value="Voter id Card"><b>Voter id Card</b><span id="sp8"></span></td>
</tr>
<tr class="if"><th>Card No.</th>
<td><input type="text"name="cardno" placeholder="enter card no" value=""><span id="sp9"></span></td>
</tr>

<tr class="if"><th>Address:</th>
<td><textarea rows="4" cols="30" name="txtaddress" value=""></textarea><span id="sp10"></span></td>
</tr>
<tr class="if"><th>Country:</th>
<td>
<select name="country">
<option>Countryname</option>
<option value="India">India</option>
</select><span id="sp11"></span>
</td>
</tr>
<tr class="if"><th>State:</th>
<td>
<select name="state">
<option>Statename</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
</select><span id="sp12"></span>
</td>
</tr>
<tr class="if"><th>City:</th>
<td>
<select name="city">
<option>Cityname</option>
<option value="Bhopal">Bhopal</option>
<option value="Bhurhanpur">Bhurhanpur</option>
<option value="Bhind">Bhind</option>
<option value="Betul">Betul</option>
<option value="Chhindwara">Chhindwara</option>
<option value="Chhatarpur">Chhatarpur</option>
<option value="Dewas">Dewas</option>
<option value="Damoh">Damoh</option>
<option value="Datia">Datia</option>
<option value="Gwalior">Gwalior</option>
<option value="Hoshangabad">Hoshangabad</option>
<option value="Indore">Indore</option>
<option value="Itarsi">Itarsi</option>
<option value="Jabalpur">Jabalpur</option>
<option value="Khandwa">Khandwa</option>
<option value="Khargone">Khargone</option>
<option value="Murwara">Murwara</option>
<option value="Morena">Morena</option>
<option value="Mandsaur">Mandsaur</option>
<option value="Neemuch">Neemuch</option>
<option value="Nagda">Nagda</option>
<option value="Pithampur">Pithampur</option>
<option value="Ratlam">Ratlam</option>
<option value="Rewa">Rewa</option>
<option value="Sagar">Sagar</option>
<option value="Satna">Satna</option>
<option value="Singrauli">Singrauli</option>
<option value="Sehor">Sehor</option>
<option value="Seoni">Seoni</option>
<option value="Ujjain">Ujjain</option>
<option value="Vidisha">Vidisha</option>
</select><span id="sp13"></span>
</td>
</tr>
<tr class="if"><th>Pin code:</th>
<td><input type="text" name="pcode" placeholder="Enter pin code" value="">
<span id="sp14"></span>
</td>
</tr>
<tr class="if"><th>Mobile No:</th>
<td><input type="text"name="mobileno" placeholder="Enter mobile no"maxlength="10"value="">
<span id="sp15"></span>
</td>
</tr>
<tr class="if"><th>Email id:</th>
<td><input type="text" name="email_id" placeholder="Enter email id " value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter only emailid">
<span id="sp16"></span>
</td>
</tr>
<tr class="if"><td>Select photo</td><td>
<input type="file" name="fileToUpload1" ></td>
</tr>
<tr><td>
<hr></hr>
<p id="candprodet">Professional Details</p>
<tr class='if'><th>Party symbol:</th>
<td><input type="file" name="fileToUpload2"></td>
</img></td>
</tr>
<tr class="if"><th>Party Name:</th>
<td><input type="text" name="partyname" placeholder="Enter party name" value="" ><span id="sp17"></span></td>
</tr>

<tr class='if'><th>Current position of candidate</th><td><input type="text" name="candpost" value=""><span id="sp18"></span></td></tr>
<tr></tr>
</td>
</tr>
<tr><td></td><td><input type="submit" name="submit" value="submit">&nbsp;&nbsp;&nbsp;<input type="button" value="cancel"></td></tr>
</table>

</form>
    </div> 
    
</body>
</html>

<?php
include "footerlargepage.html";
?>