<html>
<style>
	 body {
		background-image: url('https://img.wallpapersafari.com/desktop/1600/900/66/58/36uvIx.jpg');
		background-attachment: fixed;
		background-size: cover;
	 }
	 RegisterYourself{
		font-family: Papyrus;
		font-weight: bold;
		color:orangered;
		font-size: 40px;
		text-align:center;
		margin-top: 230px;
		margin-left: 330px;	 
	 }
	 input{
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid orangered;
		  border-radius: 4px;
		  background-color:darkorange;
	 }
	 img {
        float: left;
        margin: 10px 10px;
     }
</style>
<head>
<title>Database connection </title>
</head>
<body>

	<img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
	<br><br><RegisterYourself>Choose Your Workout Plan!</RegisterYourself>

 <br> <br> <br> <br>
	<HEAD>

 <TITLE<tr align=middle ><td> <!--Ready Made Plans--> </TITLE>
	<form action="readymade.php" method="get">
<input type="submit" value="Ready Made Plans">
</form>



<TITLE<tr align=middle ><td> <!--Set your own WorkOut Plan--> </TITLE>
<form action="customplan.html" method="get">
<input type="submit" value=" Set your own WorkOut Plan">
</form>

		
</form>
<label for=""save">:
<form action="mainform.php" method="get">
<input color: blue type="submit" value="Back">
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