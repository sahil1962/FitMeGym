<html>
<style>
    body {
	background-image: url('https://img.wallpapersafari.com/desktop/1680/1050/26/45/aOjCeg.jpg');
    <!--background-attachment: fixed;-->
    background-repeat: no-repeat;
    background-size: cover; 
	}
    img {
        float: left;
        margin: -27px -490px;
    }
	form{
		text-align:left;
		margin-left: 500px;
		<!--margin-bottom: 250px;-->
	}
	input{
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid orangered;
		  border-radius: 4px;
    	  background-color:#d1a3a4;
    }
	echo{
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid orangered;
		  border-radius: 4px;
    	  background-color:#d1a3a4;
    }
</style>
<head>
<title>Report Based on Daily/Weekly/Monthly Targets </title>
</head>
<form action="reportThree.php" method= "post">
<h>  </h>
</br></br>
<body>
	<img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <HEAD>
 <label for="" job">
			<select id="des" input type"text" name="des">

				<option value="">Fitness Goal</option>
				<option value="Aerobic exercise for 5 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Aerobic exercise for 5 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Strength training for 4 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Strength training for 4 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Stretching for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Stretching for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Squats for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Squats for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Balance exercises for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Balance exercises for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Push-ups for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Push-ups for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Stretching for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Stretching for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Strength training for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Strength training for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Abdominal Crunches for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Abdominal Crunches for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
				<option value="Balance exercises for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).">Balance exercises for 2 weeks. Daily average intake to meet the nutrient requirements is (97%-98%).</option>
			</select>
		</label>
		<br><br>

	<label for=""save"><input type="submit" name="sub" value="Search " /></label>
</form>
<label for=""save">
<form action="report.php" method="get"><input type="submit" value="Back"></form>
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
 
 $des=$_REQUEST["des"];
 
 
 }

 $q="select * from workout_plan";
			  
  $query_ids = oci_parse($con, $q);
 $r = oci_execute($query_ids);
 $rs_arr = oci_fetch_array($query_ids, OCI_BOTH+OCI_RETURN_NULLS);
while($row=oci_fetch_array($query_ids,OCI_ASSOC+OCI_RETURN_NULLS))
      	  {

			$des1=$row['DESCRIPTION'];
			if($des==$des1)
			{
			
	        $type = $row["TYPE"];
			
			 echo "<br>";
	      echo "<p> <font color=green font face='courier' size='3pt'>Suitable Execrise Type : </font>";
	      echo "<font color=red font face='courier' size='3pt'>$type</font> </p>";
		  //echo"$type";
			echo"<br>";
			echo"<br>";
            $des=0;
				break;
			}
				
			}



?>
</body>
</html>