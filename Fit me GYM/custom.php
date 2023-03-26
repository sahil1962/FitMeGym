<html>
<style>
    body {
	background-image: url('https://img.wallpapersafari.com/desktop/1920/1080/23/59/WrlD0a.jpg');
    <!--background-attachment: fixed;-->
    background-repeat: no-repeat;
    background-size: cover; 
	}
    </style>
<body>
    </form>
<label for=""save">:
<form action="customplan.html" method="get">
<input type="submit" value="Back">
</form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php

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
 if(isset($_get["submit"]))
 { echo "yes";}
 else
 {  
 $des= $_REQUEST['des'];
 $plan = $_REQUEST['pid'];
 $memID = $_REQUEST['mid'];
 $daliy_t= $_REQUEST['DT'];
 $WEEKLY_t= $_REQUEST['WT'];
 $MONTHLY_t= $_REQUEST['MT'];
 $type = $_REQUEST['type'];
 $NQ = $_REQUEST['Nutritional_Quantity'];
 }
 $q3="insert into custom_plan values('$des','$plan','$memID','$daliy_t','$WEEKLY_t','$MONTHLY_t','$type','$NQ')";
	$query_id3= oci_parse($con, $q3);
 $r = oci_execute($query_id3);

?>


</body>
</html>