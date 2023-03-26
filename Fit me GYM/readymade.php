<html>
<style>
	 body {
		background-image: url('https://img.wallpapersafari.com/desktop/1920/1080/87/29/tNW0jP.jpg');
		background-attachment: fixed;
		background-size: cover;
	 }
	 form{
		font-family: Helvetica, sans-serif;
		color:blue;
		text-align:left;
		margin-left: 50px;
		margin-top: 120px;
	 }
	 img {
        float: left;
        margin: -102px -40px;
     }
	 input{
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid orangered;
		  border-radius: 4px;
		  background-color:#503335;
	 }
</style>
<head>
<title>Ready Made WorkOut Plans </title>
</head>
<form action="readymade.php" method= "post">

<body>
			    <img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
				<br><br><br><br><br><br><br><br>
 <HEAD>
	<TITLE <tr align=middle ><td>> New Member Registration </TITLE>

	 <br>
 <label for=""Mem_ID"><!--Enter your Member ID----:-->	<input placeholder="Enter Member ID" type="number" name="Mem_ID" id="Mem_ID"></input></label>
 <br><br>
 <label for=""p_ID"><!--Enter Plan ID which you want to set ----:-->	<input placeholder="Enter Plan ID" type="number" name="p_IDs" id="p_IDs"></input></label>
<br><br>
<TABLE>
	<tr align=middle ><td></td>
<label for=""save"><input type="submit" name="sub" value="Set Plan" /></td>
        </table>
		</form>
<label for=""save"><form action="planchoice.php" method="get">
<input type="submit" value="Back">
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
 { echo "Oracle Connection Successful>>>>>>>>>>>>>>>>>."; }
 else
 { die('Could not connect to Oracle: '); }
 if(isset($_get["sub"]))
 { echo "yes";}
 else
 {  
 $memID=$_REQUEST["Mem_ID"];
 $pIDs=$_REQUEST["p_IDs"];
 }



 $q="select * from workout_plan";
			  
  $query_ids = oci_parse($con, $q);
 $r = oci_execute($query_ids);
 $rs_arr = oci_fetch_array($query_ids, OCI_BOTH+OCI_RETURN_NULLS);
while($row=oci_fetch_array($query_ids,OCI_ASSOC+OCI_RETURN_NULLS))
      	  {

			$id=$row['PLAN_ID'];
			if($id==$pIDs)
			{
			
		$des=$row["DESCRIPTION"];
			$plan= $row["PLAN_ID"];
			$equip = $row["EQUIP_ID"];
	        $daliy_t = $row["DAILY_TARGET"];
			 $weekly_t = $row["WEEKLY_TARGET"];
			 $monthly_t = $row["MONTHLY_TARGET"];
	       $type = $row["TYPE"];
	        $NQ = $row["NUTRITIONAL_QUANTITY"];	

	$q3="insert into custom_plan values('$des','$plan','$memID','$daliy_t','$weekly_t','$monthly_t','$type','$NQ')";
	$query_id3= oci_parse($con, $q3);
 $r = oci_execute($query_id3);
 echo "";
 
			}
			}

 $qr1="select * from workout_plan";
				  
 $query_id = oci_parse($con, $qr1);
 $r = oci_execute($query_id);
 $rs_arr = oci_fetch_array($query_id, OCI_BOTH+OCI_RETURN_NULLS);
while($row=oci_fetch_array($query_id,OCI_ASSOC+OCI_RETURN_NULLS))
      	  {
		
echo "<br>";
	       echo"Description---->   ";
echo $row['DESCRIPTION'] ."<br>";
 echo "<br>";
echo "<br>";
echo"Plan_ID---->   ";
echo $row['PLAN_ID'] ."<br>";
echo "<br>";
echo "<br>";
echo"Equip_ID---->   ";
echo $row['EQUIP_ID'] ."<br>";
 echo "<br>";
echo "<br>";
echo"Plan_fee---->   ";
echo $row['PLAN_FEE'] ."<br>";
 echo "<br>";
echo "<br>";
echo"Staff_ID---->   ";
echo $row['STAFF_ID'] ."<br>";
 echo "<br>";
echo "<br>";
echo"daily_target---->   ";
echo $row['DAILY_TARGET'] ."<br>";
echo "<br>";
echo "<br>";
echo"WEEKLY_target---->   ";
echo $row['WEEKLY_TARGET'] ."<br>";
echo "<br>";
echo "<br>";
echo"Monthly_target---->   ";
echo $row['MONTHLY_TARGET'] ."<br>";
 echo "<br>";
echo "<br>";
echo"Type---->   ";
echo $row['TYPE'] ."<br>";
 echo "<br>";
echo "<br>";
echo"Nutritional_Quantity---->   ";
echo $row['NUTRITIONAL_QUANTITY'] ."<br>";
 echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
		  } 
		  

?>
</body>
</html>