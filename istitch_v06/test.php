<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>php test</title>
</head>
<?php
$hostname = "mysql.netfirms.com";
$username= "u70339574";
$password= "test1";
$dbid="d60312124";
$link=mysql_connect($hostname, $username, $password);
mysql_select_db($dbid) or die ("Unable to connect to MySQL");
print "Connected to MySQL
";
mysql_close($link);
?>
<body>

</body>
</html>
