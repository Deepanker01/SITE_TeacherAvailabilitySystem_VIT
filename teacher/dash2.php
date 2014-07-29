<html>
<head>
<style>
 table { 
color: #333;
font-family: Helvetica, Arial, sans-serif;
width: 640px; 
border-collapse: 
collapse; border-spacing: 0; 
}

#but
{
float:right;
}
td, th { 
border: 1px solid transparent; /* No more visible border */
height: 30px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
background: #DFDFDF;  /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: rgb(225,225,225); color: #FFF; font-size:20px;} /* Hover cell effect! */
 
</style>
</head>
</html>
<?php
require "conn.php";

echo "<table border='1'  rowspan='20' colspan='20' cellpadding='11' id='table'>
<tr>
<th>Name</th>
</tr>";

$sql = "Select * from teacher where id>=89 and id<=99";
$result = mysql_query($sql);
 echo "<tr>";

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red;'>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";
 echo "<tr>";

$sql = "Select * from teacher where id>=100 and id<=110";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red';>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

 echo "<tr>";

$sql = "Select * from teacher where id>=111 and id<=121";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red';>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";




 echo "<tr>";

$sql = "Select * from teacher where id>=122 and id<=132";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red';>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";


 echo "<tr>";

$sql = "Select * from teacher where id>=133 and id<=143";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red';>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";


 echo "<tr>";

$sql = "Select * from teacher where id>=144 and id<=154";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red';>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";


 echo "<tr>";

$sql = "Select * from teacher where id>=155 and id<=165";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red';>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

 echo "<tr>";

$sql = "Select * from teacher where id>=166 and id<=176";
$result = mysql_query($sql);

while ($row=mysql_fetch_array($result))
{
$name = $row['name'];
$status = $row['av'];


if($status==0)
{ 
	echo "<td style='color:red';>" . $row['name'] . "</td>";
}
else
echo "<td style='color:green';>" . $row['name'] . "</td>";

  }
echo "</tr>";

echo "</table>";


?>
<form action="dash3.php" method="POST">
<input type="submit" value="next" id="but">
</form>
<form action="dash.php" method="POST">
<input type="submit" value="previous" id="but">
</form>