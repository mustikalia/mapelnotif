<!DOCTYPE html>
<html>
    <head > 
        <title>Absensi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">


    </head>
    <style>
.r{
    position: flex;
    left: 50%;
    transform: translate(-50%);
    width: 351px;
    height: 257px;

    background: linear-gradient(0deg, #E31212, #E31212);
    box-shadow: 0px 100px 80px rgba(0, 0, 0, 0.1), 0px 41.7776px 33.4221px rgba(0, 0, 0, 0.0718854), 0px 22.3363px 17.869px rgba(0, 0, 0, 0.0596107), 0px 12.5216px 10.0172px rgba(0, 0, 0, 0.05), 0px 6.6501px 5.32008px rgba(0, 0, 0, 0.0403893), 0px 2.76726px 2.21381px rgba(0, 0, 0, 0.0281146);
    border-radius: 20px;
}

.mapel {
    font-family: 'Angkor';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 25px;
    letter-spacing: 0.1em;
    color: #FFFFFF;
}

.waktu{
    font-family: 'Angkor';
    font-weight: 400;
    font-style: normal;
    color: #FFFFFF;
}

form {
    text-align: center;
    position: relative;
}

.abs{
    position: absolute;
    width: 152px;
    height: 42px;
    left: 50%;
    transform: translate(-50%);

    background: #C20303;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;

    text-align: center;
    font-family: 'Angkor';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 25px;
    letter-spacing: 0.1em;
    border: none;
    color: #FFFFFF;

}

#Mapel{
    width: 276px;
    height: 25px;
    background: #D9D9D9;
    border-radius: 10px;
    border: none;
}

#waktu{
    background: #D9D9D9;
    border-radius: 10px;
    border: none;
}

.welcome{
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    width: 351px;
    height: 257px;

    top: 55%;
    

    opacity: 0.5;
}

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

    </style>

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
        	<a href="profil.php">
        		<img class="pcon" src="profilcon.png" alt="Ikon Profil">
        	</a>
        </div>

        <br><br><br>
        <form action="absen.php" target="_self" method="post" class="r">

            <label for="Mapel" class="mapel">Mata Pelajaran <br></label>
            <input type="text" id="Mapel" name="Mapel" require><br><br>
            <label for="Waktu" class="waktu" >Waktu <br></label>
            <?php
            date_default_timezone_set('Asia/Makassar');
            ?>
            <input type="text" id="waktu" name="waktu" value="<?php echo date('Y-d-m H:i:s'); ?>" readonly><br><br>
            <a href="abs.php">
                <input type="button" type="submit" value="Absen" class="abs">
            </a>

        </form>
        <img class="welcome" src="wlcome.png" alt="https://www.figma.com/file/S7CmYYE8uM7QQkxQur4gJA/Untitled?node-id=93%3A489&t=jqaWko0w3PyqsZSH-4">
    </body>
</html>