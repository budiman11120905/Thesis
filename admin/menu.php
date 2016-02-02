<html>
<head>
<script language="javascript">
<!--
function logout()
{
	tanya=confirm("Apakah anda yakin akan keluar ?")
	if (tanya !="0")
	{
		top.location="logout.php"
	}
}
//-->
</script>

		<title>Menu Admin</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
<!--
.container {
        width: 750px;
        padding: 15px;
        margin: 3px 0 20px 0;
        border: 1px solid #ccc;
        background: #fff;
}

/* pyramid */

#navPyra {
        margin: 0;
        padding: 0 0 20px 10px;
        border-bottom: 1px solid #9FB1BC;
}

#navPyra li {
        margin: 0;
        padding: 0;
        display: inline;
        list-style-type: none;
}

#navPyra a:link, #navPyra a:visited {
        float: left;
        font-size: 10px;
        line-height: 14px;
        font-weight: bold;
        padding: 0 12px 6px 12px;
        text-decoration: none;
        color: #708491;
}

#navPyra a:link.active, #navPyra a:visited.active, #navPyra a:hover {
        color: #000;
        background: url(pyramid.gif) no-repeat bottom center;
}
-->
</style>
                <style type="text/css">
                <!--
/* code for presentation purpose (CSS preview) */
body {
        font-family: verdana, sans-serif;
        font-size: 11px;
}

h4 {
        font-size: 100%;
        color: #999;
        margin: 0;
}
                -->
                </style>
</head>

<body>
		<h4>&nbsp;</h4>
		<div class="container">
				<ul id="navPyra">
<!-- CSS Tabs -->
<li><a href="home.php?page=2">Edit Profil Admin </a></li>
<li><a href="home.php?page=7">Kelola Member</a></li>
<li><a href="home.php?page=6">Kelola Data Pengiriman</a></li>
<li><a href="home.php?page=3">Kelola Driver</a></li>
<li><a href="home.php?page=5">Kelola Data Transkasi</a></li>
<li><a href="home.php?page=4">Kelola Laporan</a></li>

<li><a  href="#" title="Keluar" onClick="logout()">Logout</a><a href="home.php?page=4"></a></li>


<li><a  href="#" title="Keluar" onClick="logout()"></a></li>
          </ul>
</div>
</body>
</html>