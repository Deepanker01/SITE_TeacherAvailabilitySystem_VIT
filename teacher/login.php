<?php

include "conn.php";

session_start();

@$b = $_POST['reg'];
@$c = $_POST['password'];

$_SESSION['reg'] = $b;




 $sql = "SELECT * FROM student where reg = '$b'";
$result = mysql_query($sql);
$c1=NULL;
while($row= mysql_fetch_array($result))
{
 $c1 = $row['password'];
}
if($c1==NULL)
{
 echo "<br>" . "<p align='center' style='color:white; weight:bold'>"."Registration Number NOT FOUND "."</p>" . "<br>";
 }
else if(!strcmp($c,$c1))
{
echo "VALID NAME";
header("Location: Page2.php");
}

else
echo "<br>" . "<p align='center' style='color:#fff; weight:bold'>"."INVALID CREDENTIALS, TRY AGAIN "."</p>";



?>	 
