<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect("localhost", "root", "password");
mysql_select_db("gammu_db");

$noTujuan = $_POST['nohp'];
$message = $_POST['msg'];

$query = "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID)
VALUES ('$noTujuan', '$message', 'Gammu')";
$hasil = mysql_query($query);
if ($hasil) echo "SMS berhasil dikirim";
else echo "SMS gagal dikirim";

?>
</body>
</html>
