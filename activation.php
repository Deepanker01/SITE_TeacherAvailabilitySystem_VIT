<?php
include 'conn.php';
$msg='';
if(!empty($_GET['passkey']) && isset($_GET['passkey']))
{
$code=mysql_real_escape_string($_GET['passkey']);
$c=mysql_query("SELECT id FROM student WHERE activation='$code'");

if(mysql_num_rows($c) > 0)
{
$count=mysql_query("SELECT id FROM student WHERE activation='$code' and status='0'");

if(mysql_num_rows($count) == 1)
{
mysql_query("UPDATE student SET status='1' WHERE activation='$code'");
echo "<script> alert('Your account is Activated. Login Now'); </script>";
echo "<script> window.location = 'index.php'; </script>";
}
else
{
echo "<script> alert('Your account is already active, no need to activate again'); </script>";
echo "<script> window.location = 'index.php'; </script>";

//$msg ="Your account is already active, no need to activate again";
}

}
else
{
echo "<script> alert('Wrong Activation Code.Sorry!!'); </script>";
echo "<script> window.location = 'index.php'; </script>";
}

}
?>
//HTML Part
<?php echo $msg; ?>