
<?php


$conn = mysql_connect("localhost","siteadmin","siteadmin");
mysql_select_db("site",$conn);

if(!$conn)
{
echo "Not Connected";
}
?>