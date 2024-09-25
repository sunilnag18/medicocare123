<?php
$n=S_POST['email1'];
Sc-S_POST['password1'];
Scon=mysqli_connect("localhost","root", "", "medicoweb"):
$sql="INSERT INTO studentsdetails (email1, password1) values('$n', '$c')"; 
$r $mysqli_query ($con, $sql);
if ($r)
{
echo "STUDENTS DETAILS ADDED SUCCESSFULLY";
}
else
{
echo "STUDENTS DETAILS NOT ADDED";
}
?>
 