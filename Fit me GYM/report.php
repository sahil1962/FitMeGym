<html>
<style>
        body {
		background-image: url('https://img.wallpapersafari.com/desktop/1536/864/0/99/bxcKBe.jpg');
        <!--background-attachment: fixed;-->
        background-repeat: no-repeat;
        background-size: cover;
        
	}
    img {
        float: left;
        margin: 10px 10px;
    }
	form{
		text-align:left;
		margin-left: 100px;
		<!--margin-bottom: 200px;-->
	}
	input{
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid orangered;
		  border-radius: 4px;
    	  background-color:#d1a3a4;
    }
</style>
<head>
</head>
<body>
	<img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
    <br><br><br><br><br><br><br><br><br><br><br>
 <HEAD>
 <br><br>
<form action="reportThree.php" method="get"><input type="submit" value="Report for Fitness Goal"></form>
<form action="reportOne.php" method="get"><input type="submit" value="Report for Personalize Plan "></form>
<form action="reportTwo.php" method="get"><input type="submit" value="Report for Daily/Weekly/Monthly Targets "></form>
<label for=""save"><form action="mainform.php" method="get"><input type="submit" value="Back"></form>

<?php // creating a database connection
 $db_sid =
 "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-M9J62J9)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = Shalu)
    )
  )"; // Your oracle SID, can be found in tnsnames.ora
//((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN)

 $db_user = "scott"; // Oracle username e.g "scott"
 $db_pass = "1234"; // Password for user e.g "1234"
 $con = oci_connect($db_user,$db_pass,$db_sid);
 if($con)
 { echo "Oracle Connection Successful."; }
 else
 { die('Could not connect to Oracle: '); }


?>
</body>
</html>