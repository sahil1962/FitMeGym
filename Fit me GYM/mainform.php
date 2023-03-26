<html>
    <style>
    body {
		background-image: url('https://img.wallpapersafari.com/desktop/1920/1080/82/25/bBCFyt.jpg');
        <!--background-attachment: fixed;-->
        background-repeat: no-repeat;
        background-size: cover;
        
	}
    img {
        float: left;
        margin: 10px 10px;
    }
	form{
		text-align:right;
		margin-right: 30px;
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
<title>Database connection </title>
</head>

<body>
        <img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
 <HEAD>
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <TITLE<tr align=middle ><td><!-- New Member Registration--> </TITLE>
	<form action="registration.php" method="get">
<input type="submit" value="Open Registration From">
</form>



<TITLE<tr align=middle ><td><!--Choose a WorkOut Plan--> </TITLE>
<form action="planchoice.php" method="get">
<input type="submit" value="Choose a WorkOut Plan">
</form>

<TITLE<tr align=middle ><td><!--Genarate Report --></TITLE>
<form action="report.php" method="get">
<input type="submit" value="Genarate Report">
    <br><br><br><br><br><br><br>
</form>




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