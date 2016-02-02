<p>&nbsp;</p>
<form name="form1" method="post" action="inputawb.php?action=simpan">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FF9900">
      <td height="40" colspan="2"><strong>Form Input Progress Tracking Data Record </strong></td>
    </tr>
    <tr bgcolor="#99FF00">
      <td height="30">6 Digit Terakhir Kode Pemesanan</td>
      <td>: 
      <input name="edtp" type="text" id="edtp"></td>
    </tr>
    <tr bgcolor="#99FF00">
      <td height="30">Nama Pelanggan </td>
      <td>: 
      <input name="nampel" type="text" id="nampel"></td>
    </tr>
	</tr>
    <tr bgcolor="#99FF00">
      <td height="30">Email</td>
      <td>: 
      <input name="email" type="text" id="email"></td>
    </tr>
	<tr bgcolor="#99FF00">
      <td height="30">ETD</td>
      <td>: 
      <input name="etd" type="text" id="etd"></td>
    </tr>
	<tr bgcolor="#99FF00">
      <td height="30">ETA</td>
      <td>: 
      <input name="eta" type="text" id="eta"></td>
    </tr>
   <tr bgcolor="#99FF00">
      <td height="30">Progress</td>
      <td>: 
      <input name="progress" type="text" id="progress">
      [Pesan,Bayar,Kirim]</td>
    </tr>
	<tr bgcolor="#99FF00">
      <td height="30">Update</td>
      <td>: 
      <input name="update" type="text" id="update"></td>
    </tr>
    <tr bgcolor="#99FF00">
      <td height="30">&nbsp;</td>
      <td valign="top"><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Submit2" value="Reset"></td>
    </tr>
  </table>
</form>
<?php
if ($_GET[action]=="simpan") {
//Membuat Koneksi Ke Database
	mysql_connect("localhost","root","password");
	mysql_select_db("tokonlinedb");

//validasi data yang kosong
	if (empty($_POST['edtp']) || empty($_POST['nampel']) || empty($_POST['email'])|| empty($_POST['etd'])|| empty($_POST['eta'])|| empty($_POST['progress'])|| empty($_POST['update'])) {
		echo "Data harus Diisi Semua";
	}
	else {
	
	$simpan="INSERT INTO trackdatarecord SET
										edtp='$_POST[edtp]',
										nampel='$_POST[nampel]',
										email='$_POST[email]',
										etd='$_POST[etd]',
										eta='$_POST[eta]',
										progress='$_POST[progress]',
										update='$_POST[update]'";
										
							mysql_query($simpan);
	echo '<script language="javascript">
	alert("Progress Tracing Data Record Berhasil Di Simpan");
	window.location="inputawb.php";
	</script>';
	exit();
		}
}
?>
