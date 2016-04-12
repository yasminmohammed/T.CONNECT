<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
<label>Name</label>
<input type="text" name="p_name">
<br/>
<label>Gender</label>
<input type="radio" name="p_gender" value="male">male
<input type="radio" name="p_gender" value="female" >female 
<br/>
<label>CITY</label>
<select name="p_city"> 
<option value="Luxor">Luxor</option>
<option value="Aswan">Aswan</option>
<option value="Qena">Qena</option>
</select>
<br/>
<input type="submit" name="submit"  value="insert">
</form>
<?php 
$HostName="localhost";
$db_name="itidb";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['p_name']) && isset($_POST['p_gender']) && isset($_POST['p_city'])) {
$sql = "INSERT INTO player
( pla_name,pla_gender,pla_city) VALUES ('$_POST[p_name]' ,'$_POST[p_gender]','$_POST[p_city]')" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>
</body>
</html>