
<html>
<head>
<title>Candidate Registration</title>

<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">    
</head>

<body>
 
     
    
    <div id="div1"><h1> Candidate Profile</h1> </div>
    
    <div id="div2">
        
        <table  cellspacing="30" cellpadding="30">
                       
<form action="registdata.php" method="get">
    
    <br>
    
   
        Please provide all the Details
       

  <tr class="if"><td>First Name:</td>
 <td><input type="text" name="fname" placeholder="firstname"></td>
 </tr>
<tr class="if"><td>Middle Name:</td>
<td><input type="text" name="mname" placeholder="Middlename"></td>
</tr>
<tr class="if">
<td>Last Name:</td><td><input type="text" name="lname" placeholder="lastname"></td>
</tr>
<tr class="if"><th>Father/Husband:</th>
<td><input type="text" name="fhnamev" placeholder="Father/Husband"></td>
</tr>
<tr class="if"><th>DOB:</th>
<td>
<select name="mon"><option>Month</option>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select>
	<select name="date">
    <option value="-">Date</option>
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
    </select>
    <select>
    <option name="year">Year</option>
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
    </select>
</td>
</tr>
<tr class="if"><th>Gender:</th>
<td><input type="radio" name="gender" value="Male"><b>Male</b>
     <input type="radio" name="gender" value="Female"><b>Female</b></td>
</tr>
<tr class="if"><th>Address:</th>
<td><textarea rows="4" cols="30" name="txtaddress"></textarea></td>
</tr>

<tr class="if"><th>Country:</th>
<td>
<select name="country">
<option>Countryname</option>
<option>Afghanistan</option>
<option >Albania</option>
<option>Algeria</option>
</select>
</td>
</tr>
<tr class="if"><th>State:</th>
<td>
<select name="state">
<option>Statename</option>
<option>MP</option>
</select>
</td>
</tr>
<tr class="if"><th>City:</th>
<td>
<select name="city">
<option>Cityname</option>
<option>BPL</option>
</select>
</td>
</tr>
<tr class="if"><th>Pin code:</th>
<td><input type="text" name="pcode" placeholder="Enter pin code">
</td>
</tr>
<tr class="if"><th>Mobile No:</th>
<td><input type="text"name="mobileno" placeholder="Enter mobile no"maxlength="10">
</td>
</tr>
<tr class="if"><th>Email id:</th>
<td><input type="text" name="email_id" placeholder="Enter email id ">
</td>
</tr>
<tr class="if"><td>Select photo</td><td>
<input type="file" name="uploaded_file"></td>
</tr>
<tr class="if">
<td>Upload photo</td>
<td><!--<input type="submit" value="Click here">--></td>
</tr>
<tr><td></td><td><input type="submit" name="submit" value="submit">&nbsp;&nbsp;&nbsp;<input type="button" value="cancel"></td></tr>
</form>
    </div>
</table>
      

</body>
</head>
</html>
