<?php

$source=$_GET['source'];
$destination=$_GET['destination'];

$con=mysqli_connect("localhost","root","","mca");

if($con==false)
{
echo "Connection Failed";
}

$sql="select * from transport
where source='$source'
AND destination='$destination'";

$result=$con->query($sql);

if(mysqli_num_rows($result)>0)
{
echo "Transport Available";
}
else
{
echo "No Transport Found";
}

while($row=$result->fetch_array())
{
echo "<br>Transport No:".$row[0];
echo "<br>Name:".$row[1];
echo "<br>Time:".$row[2];
echo "<br>Source:".$row[3];
echo "<br>Destination:".$row[4];
echo "<br>Route:".$row[5];
}

?>