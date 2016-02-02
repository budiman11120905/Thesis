<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
p{ color:#0000FF;font-family:Arial, Helvetica, sans-serif; font-size:large}
i{ color:#0000FF; font-family:Arial, Helvetica, sans-serif; font-size:20px}
.textfield{ border-color:#0000FF; border:double}
.form1{border-color:#0000FF; border:thin; border-style:double}
.field{border-color:#0000FF; border:thin; border-style:dashed}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form Input Laporan Keluar Masuk Barang</title>
</head>

<body>

<form class="form1" action="input_proses.php" name="form1">
<table border="0" bgcolor="white">
<tr>
	<td colspan="2"> <img src="images/r3.JPG" height="50" width="50" /><br /><p>Form Input Laporan Keluar Masuk Barang Pada PT.Ralia Mandiri</p></td>
</tr>
<tr>
	<td class="field"><p>Masukkan Hari/Tanggal<p></td>
	<td class="field"><input class="textfield" type="text" name="ttgl"  /></td>
	<td class="field"><p>Masukkan No. SPJ</p></td>
	<td class="field"><input class="textfield" type="text" name="tno" /></td>
	<td class="field"><p>Masukkan Pick-Up</p></td>	
	<td class="field"><input class="textfield" type="text" name="tpu" /></td>
	<td class="field"><p>Masukkan Tujuan/Destination</p></td>
	<td class="field"><input class="textfield" type="text" name="ttuju"  />
	<td class="field"><p>Quantity</p></td>
	<td class="field"><br /><br /><br /><input class="textfield" name="tc" type="text"  width="6"   size="6" maxlength="6"/>
	<p>/Coly</p></td>
	<td class="field"><br /><br /><br /><input class="textfield" type="text" name="tk" width="5" size="5" maxlength="5"/><p>/Kg</p></td>
</tr>
	<td class="field"><p>Masukkan Jenis Barang</p></td>
	<td class="field"><input class="textfield" type="text" name="tj" /></td>
	<td class="field"><p>Pilih Merk</p></td>
	<td class="field"><input type="checkbox" name="cw" value="Wardah" /><i>Wardah</i><br />
	    <input type="checkbox" name="cp" value="Putri" /><i>Putri</i>
		<input class="textfield" type="text" name="tl" /><i>Lain-lain</i></td>
		<td class="field"><p>Dikirim pada Hari/Tanggal</p></td>
		<td class="field"><input class="textfield" type="text" name="ttgl1" /></td>
		<td class="field"><p>Melalui Agen</p></td>
		<td class="field"><br /><br /><input class="textfield" type="text" name="tma" /><i>(Contoh: Agen RAM)</i></td>
		</tr>
		<tr>
		<td class="field" colspan="4" align="center"><p>Keterangan Pengiriman</p></td>
		</tr>
		<tr>
	            <td class="field" align="center"><p>Via Darat,Laut atau Udara</p><br /> <input type="text" class="textfield" name="tv" /></td>
				<td class="field" align="center"><p>No Surat Agen</p><br /> <br /><input type="text" class="textfield" name="tns" /></td>
				<td class="field" align="center"><p>ETD/Tanggal Keberangkatan</p><br /> <input type="text" class="textfield" name="tetd" /></td>
				<td class="field" align="center"><p>ETA/Tanggal Tiba</p><br /><br /> <input type="text" class="textfield" name="teta" /></td>
		</tr>
		<tr>
		<td><input type="submit" name="cmdsimpan" value="Simpan" /><input type="reset" name="cmdBatal" value="Reset" /></td>
		</tr>
				
				
</table>

</form>
</body>
</html>
