<?php
$fname=strtoupper("seema");
$lname=strtoupper("sharma");
$dt=date('m');
$v="V";
$str1=substr($fname,0,3);
echo $str1;
echo "<br>";
$str2=substr($lname,0,2);
echo $str2;
echo "<br>";
$str3=$v.$str1.$str2.$dt;
echo $str3;
echo "<br>";


?>