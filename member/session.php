<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "password");
// Seleksi Database
$db = mysql_select_db("hit_db", $connection);
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select * from customer where PASSWORD_CUST='$password' AND EMAIL_CUST='$username'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['EMAIL_CUST'];
if(!isset($login_session)){
mysql_close($connection); // Menutup koneksi
header('Location: index.php'); // Mengarahkan ke Home Page
}
?>