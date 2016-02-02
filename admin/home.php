<? session_start();
if (session_is_registered('id'))
{
	$_SESSION['id'];
	$_SESSION['user'];
	
	?>
	<html>
	<head>
		<title>[cPanel - Administrator]</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<style type="text/css">
		<!--
		.style1 {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 12px;
		}
body {
	background-color: ;
}
		-->
		</style>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
	<body>
	<p>&nbsp;</p>
		<table border="0" align="center" bgcolor="#FFFFFF">
		<tr>
			<td width="210">
			
			
			
			<table width="189" height="247" border="0" align="center">
			<tr>
				<td width="103" align="center" valign="top"><? include "./include/banner.php"; ?></td>
			</tr>
			<tr>
				<td height="63" align="center"><? include "menu.php"; ?></td>
			</tr>
			<tr>
				<td height="50" align="center">
				 <? include "isi.php"; ?>
				</td>
			</tr>
			<tr>
				<td><? include "./include/footer.php"; ?></td>
			</tr>
			</table>
			
			
			
			
			
		  </td>
		</tr>
		</table>
	    <p>&nbsp;</p>
	</body>
	</html>
<?
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>