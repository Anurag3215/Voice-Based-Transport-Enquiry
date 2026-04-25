<?php

$tno=$_GET['tno'];
$tname=$_GET['tname'];
$dtime=$_GET['dtime'];
$source=$_GET['source'];
$destination=$_GET['destination'];
$route=$_GET['route'];

$con=mysqli_connect("localhost","root","","mca");

if($con==false)
{
echo "Database not connected";
}

$sql="insert into transport values
('$tno','$tname','$dtime',
'$source','$destination','$route')";

if($con->query($sql))
{
echo "New Record Added";
}
else
{
echo "Error";
}

?>