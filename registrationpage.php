<?php
include "menupage.html";
?>
<html>
<head>
<title>Registration personal</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"></link>  
 <script type="text/javascript"> 
  function valid()
  {
   var myform=document.voterregdata;
   var fnm=myform.fname;
   var lnm=myform.lname;
   var fhnmv=myform.fhnamev;
   var mnmv=myform.mnamev;
   var mon1=myform.mon;
   var date=myform.date;
   var year1=myform.year;
   var gender=myform.gender;
   var address=myform.txtaddress;
   var card=myform.card;
   var cardno=myform.cardno;
   var country=myform.country; 
   var state=myform.state;
   var city=myform.city;
   var pcode=myform.pcode;
   var mobileno=myform.mobileno;
   var email_id=myform.email_id;
   var fileToUpload=myform.fileToUpload;
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
        
		
		var d=new Date();
	
			var yr=d.getFullYear();
			
			var formyr=year1.value;
			var age=yr-formyr;
				
		   
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
     
       var status="true";
           if(fnm.value=="")
		   {
		    sp1.innerHTML="First Name Required";
		    sp1.style.color="red";
			sp1.style.visibility="visible";
			alert(status);
			status=false;
			//alert(status);
		   }
		    else if(lnm.value=="")
            {
			 sp2.innerHTML="Last Name Required";
			 sp2.style.color="red";
			 sp2.style.visibility="visible";
			 status=false;	
			}
			
           else if(fhnmv.value=="")
            {
			sp3.innerHTML="F/H Name Required";
			 sp3.style.color="red";
			 sp3.style.visibility="visible";
			 status=false;
			}	
           else if(mnmv.value=="")
           {
			sp4.innerHTML="Mother Name Required";
			 sp4.style.color="red";
			 sp4.style.visibility="visible";
			 status=false;
			} 
		   
		  else if(mon1.value=="Month")
		    {
			 sp5.innerHTML="Month Required";
			 sp5.style.color="red";
			 sp5.style.visibility="visible";
			 status=false;
        	}
			
		 else if(date.value=="Date")
		    {
			 sp6.innerHTML="Date Required";
			 sp6.style.color="red";
			 sp6.style.visibility="visible";
			 status=false;		
			}
		  else if(year1.value=="Year")
            {
			 sp7.innerHTML="Year Required";
			 sp7.style.color="red";
			 sp7.style.visibility="visible";
			 status=false;
			}
			
    	  else if(age<18)
            {
			 sp7.innerHTML="Not Able to give vote";
			 sp7.style.color="red";
			 sp7.style.visibility="visible";
			 status=false;
			}
			
          else if(gender.value=="")
            {
			  sp8.innerHTML="Gender Required";
			  sp8.style.color="red";
			  sp8.style.visibility="visible";
			  status=false;
			}		  
		  else if(address.value=="")
		   {
		    sp9.innerHTML="Address Required";
			sp9.style.color="red";
			sp9.style.visibility="visible";
		    status =false;
		   }
		  else if(card.value=="")
		   {
		     sp10.innerHTML="Card Required";
		     sp10.style.color="red";
			 sp10.style.visibility="visible";
			 status=false;
		   }
		  else if(cardno.value=="")
		   {
		    sp11.innerHTML="Cardno Required";
			sp11.style.color="red";
			sp11.style.visibility="visible";
			status=false;
		   }
		    /*else if(cardno.value.length!=6)
			{
			 sp12.innerHTML="Card Six Digits Required";
			 sp12.style.color="red";
			 sp12.style.visibility="visible";
			  status=false;
			}
			else if(cardno.value.length!=10)
			{
			 sp12.innerHTML="For Aadhar Card digit is 10";
			 sp12.style.color="red";
			 sp12.style.visibility="visible";
			  status=false;
			}*/
			
		  else if(country.value=="Countryname")
		   {
		    sp12.innerHTML="Country Required";
		    sp12.style.color="red";
		    sp12.style.visibility="visible";
			status=false;
		   }
		  else if(state.value=="Statename")
		  {
		   sp13.innerHTML="State Required";
		   sp13.style.color="red";
		   sp13.style.visibility="visible";
		   status=false;
  		  }
		 else if(city.value=="Cityname")
		  {
		   sp14.innerHTML="City Required";
		    sp14.style.color="red";
		    sp14.style.visibility="visible";
			status=false;
		  }
		 else if(pcode.value=="")
		  {
		   sp15.innerHTML="Pincode Required";
		   sp15.style.color="red";
		   sp15.style.visibility="visible";
		   status =false;
		  }
		 else if(pcode.value.length<=6)
		  {
		   sp15.innerHTML="Pincode Six Digits Required";
		   sp15.style.color="red";
		   sp15.style.visibility="visible";
		   status=false;
		  }
		 else if(isNaN(pcode.value))
		  {
		   sp15.innerHTML="Only Digits are Allow";
           sp15.style.color="red";
		   sp15.style.visibility="visible";
		   status =false;	  
		  }
		 else if(mobileno.vlaue=="")
          {
		   sp16.innerHTML="Mobile no Required"
		   sp16.style.color="red";
		   sp16.style.visibility="visible";
		   status= false;
		  }	
         else if(mobileno.value.length!=10)
          { 
		   sp16.innerHTML="Mobile no must be 10 Digits"
		   sp16.style.color="red";
		   sp16.style.visibility="visible";
		   status =false;  
		  }
            else if(isNaN(mobileno.value))
          { 
		    sp16.innerHTML="Only Digits Allow";
		   sp16.style.color="red";
		   sp16.style.visibility="visible";
		   status=false;  
		  }		  
          else if(email_id.value=="")
          {
		   sp17.innerHTML="Email id Required";
		   sp17.style.color="red";
		   sp17.style.visibility="visible";
		   status =false;
		  }		
         return status;		  
   } 
</script>
</head>

<body>
  
    <div id="div8"><h1>Registration</h1> </div>
    
    <div id="div9">
        
        
                       
<form name="voterregdata" action="registdata.php" onsubmit="return(valid())" method="post" enctype="multipart/form-data">
    
    <br>
    
   
        Please provide all the Details
       
  <table  cellspacing="30" cellpadding="30">
  <tr class="if"><td>First Name:</td>
 <td><input type="text" name="fname" placeholder="firstname" value="" > <span id="sp1"></span></td>
 </tr>
<tr class="if"><td>Middle Name:</td>
<td><input type="text" name="mname" placeholder="Middlename" value="" ></td>
</tr>
<tr class="if">
<td>Last Name:</td><td><input type="text" name="lname" placeholder="lastname"value="" ><span id="sp2"></span></td>
</tr>
<tr class="if"><th>Father/Husband:</th>
<td><input type="text" name="fhnamev" placeholder="Father/Husband" value=""><span id="sp3"></span></td>
</tr>
<tr class="if"><th>Mother Name:</th>
<td><input type="text" name="mnamev" placeholder="mothername" value="" ><span id="sp4"></span></td>
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
    </select><span id="sp5"></span>
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
    </select><span id="sp6"></span>
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
    </select><span id="sp7"></span>
</td>
</tr>
<tr class="if"><th>Gender:</th>
<td><input type="radio" name="gender" value="Male"><b>Male</b>
     <input type="radio" name="gender" value="Female"><b>Female</b><span id="sp8"></span></td>
</tr>
<tr class="if"><th>Address:</th>
<td><textarea rows="4" cols="30" name="txtaddress"></textarea><span id="sp9"></span></td>
</tr>
<tr class="if"><th>Card:</th>
<td><input type="radio" name="card" value="Aadhar Card"><b>Aadhar card </b>
 <input type="radio" name="card" value="Voter id Card"><b>Voter id Card</b><span id="sp10"></span></td>
</tr>
<tr class="if"><th>Card No.</th>
<td><input type="text" name="cardno" placeholder="enter card no" value="" min="6" max="10"><span id="sp11"></span></td>
</tr>
<tr class="if"><th>Country:</th>
<td>
<select name="country">
<option>Countryname</option>
<option value="India">India</option>
</select><span id="sp12"></span>
</td>
</tr>
<tr class="if"><th>State:</th>
<td>
<select name="state">
<option>Statename</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
</select><span id="sp13"></span>
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
</select><span id="sp14"></span>
</td>
</tr>
<tr class="if"><th>Pin code:</th>
<td><input type="text" name="pcode" placeholder="Enter pin code" value="">
<span id="sp15"></span>
</td>
</tr>
<tr class="if"><th>Mobile No:</th>
<td><input type="text"name="mobileno" placeholder="Enter mobile no" maxlength="10" value="">
<span id="sp16"></span>
</td>
</tr>
<tr class="if"><th>Email id:</th>
<td><input type="text" name="email_id" value=""placeholder="Enter emailid "><span id="sp17"></span>
</td>
</tr>
<tr class="if"><td>Select photo</td><td>
<input type="file" name="fileToUpload" id="fileToUpload">
<span id="sp18"></span></td>
</tr>
<tr><td></td><td><input type="submit" name="submit" value="submit">&nbsp;&nbsp;&nbsp;<input type="reset"value="reset">&nbsp;&nbsp;&nbsp;<input type="button" value="cancel"></td></tr>
</table>
</form>
    </div>
      
    
</body>
</html>

