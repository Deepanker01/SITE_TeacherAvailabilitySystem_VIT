<html>
<head>
<script>
//alert("This section is still under construction. Please bear with us. We'll update the section in couple of days");
</script>
<style>
 table { 
font-family: Helvetica, Arial, sans-serif;

margin-left: -10px;
margin-top: -10px; 
border-collapse: 
collapse; border-spacing: 0; 
}

#but
{
float:right;
}
td, th { 
border: 1px solid transparent; /* No more visible border */
height: 2px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
font-weight: bold;
}

td {
text-align: left;
font-size: 11px;
height: 5px;
}

/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background: white; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: rgb(225,225,225); color: #FFF;  font-size:15px; } /* Hover cell effect! */
 
</style>
</head>
</html>

<?php
require "conn.php";

echo "<table border='1'  rowspan='0' colspan='0' cellpadding='8' id='table' class='confirm_selection'>
<tr>
</tr>";

$sql = "Select * from teacher where id>=1 and id<=15";
$result = mysql_query($sql);
 echo "<tr>";

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";
 echo "<tr>";

$sql = "Select * from teacher where id>=16 and id<=30";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

 echo "<tr>";

$sql = "Select * from teacher where id>=31 and id<=45";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";




 echo "<tr>";

$sql = "Select * from teacher where id>=46 and id<=60";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";


 echo "<tr>";

$sql = "Select * from teacher where id>=61 and id<=75";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";


 echo "<tr>";

$sql = "Select * from teacher where id>=76 and id<=90";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";


 echo "<tr>";

$sql = "Select * from teacher where id>=91 and id<=105";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

 echo "<tr>";

$sql = "Select * from teacher where id>=106 and id<=120";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

$sql = "Select * from teacher where id>=121 and id<=135";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

$sql = "Select * from teacher where id>=136 and id<=150";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

$sql = "Select * from teacher where id>=151 and id<=165";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

$sql = "Select * from teacher where id>=166 and id<=180";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

$sql = "Select * from teacher where id>=181 and id<=195";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:#E60000;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

echo "</table>";


?>
