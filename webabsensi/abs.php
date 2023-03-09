<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background: #CF1B1B;
  
}

.topnav a{
	float: center;
	position: relative;
	text-decoration: none;
}

.topnav img{
	float: left right;
	position: relative;
	padding: 0px 44px;
}

.datang{
	font-family: 'Inter';
	font-style: normal;
	font-weight: 500;
	font-size: 24px;
	line-height: 29px;
	margin-left: 26%;

	color: #FFFFFF;
}

.pp{
	position: right;
	align-items: right;
	width: 41px;
	height: 41px;
	border-radius: 50%;

}

body {
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}

.navbar {
	overflow: hidden;
	background: #CF1B1B;
	position: fixed;
	bottom: 0;
	width: 100%;
}

.navbar a{
	float: left ;
	text-align: center;
	display: block;
	padding: auto;
}

.navbar img{
	float: center;
	text-align:center;
}

.hm{
	width: 31px;
	height: 31px;
	margin-left: 64px;
}

.menu{
	position: absolute;
	width: 21px;
	height: 20px;
}

.kal{
	position: absolute;
	width: 31px;
	height: 31px;
	margin-left: 25%;
}

.pcon{
	position: absolute;
	width: 31px;
	height: 31px;
	margin-left: 58%;
}

.sample{
	position: absolute;
	width: 433px;
	height: 596px;
	left: 0px;
	top: 7%;
}

</style>
</head>
<body>

<div class="topnav">	
	<a class="datang" href="abs.php" style="text-align: center;">Selamat Datang</a>

	<img class="pp" src="samprofil.png" alt="BrutalSatsujin" href="profil.php">
</div>

<div class="navbar">
	<a href="absen.php">
		<img class="hm" src="hmicon.png" alt="Ikon Home">
	</a>
	<a href="abs.php">
		<img class="kal" src="kalicon.png" alt="Ikon Kalender">
	</a>
	<a href="profil.html">
		<img class="pcon" src="profilcon.png" alt="Ikon Profil">
	</a>
</div>

<img class="sample" src="sampkal.png" alt="sampel kalender">

</body>
</html>
