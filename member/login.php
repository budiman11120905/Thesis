<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Variabel username dan password
$username=$_POST['username'];
$password=$_POST['password'];
// Membangun koneksi ke database
$connection = mysql_connect("localhost", "root", "password");
// Seleksi Database
$db = mysql_select_db("hit_db", $connection);
// SQL query untuk memeriksa apakah customer terdapat di database?
$query = mysql_query("select * from customer where PASSWORD_CUST='$password' AND EMAIL_CUST='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Membuat Sesi/session
header("location: profile.php"); // Mengarahkan ke halaman profil
} else {
$error = "Username atau Password belum terdaftar";
}
mysql_close($connection); // Menutup koneksi
}
}
?>