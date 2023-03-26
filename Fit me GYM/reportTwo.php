<html>
<style>
    body {
	background-image: url('https://img.wallpapersafari.com/desktop/1920/1080/23/59/WrlD0a.jpg');
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
<body>
	<img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
	<br><br><br><br><br><br><br><br><br><br>	

</body>
<title>Ready Made WorkOut Plans </title>
</head>
<form action="reportTwo.php" method= "post">
<h>  </h>
</br></br>
<body>
 <HEAD>
 <label for="Mem_ID"><input placeholder="Enter your Member ID" type="number" name="Mem_ID" id="Mem_ID"></input></label>
 </br></br>
<TABLE>
<label for=" job">
			<select id="pl" input type"text" name="pl">
			<option >Plan</option>
			<option value="Options">Options</option>
			<option value="Daily">Daily</option>
			<option value="Weekly">Weekly</option>
			<option value="Monthly">Monthlty</option>
			</select>
		</label><br><br>

	<tr align=middle >
<label for=""save">
        <input type="submit" name="sub" value="Search" /></td>
		</label>
        </table>

		</form>
<label for=""save">:
<form action="report.php" method="get">
<input type="submit" value="Back">
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
 { echo "Oracle Connection Successful>>>>>>>>>>>>>>>>>."; }
 else
 { die('Could not connect to Oracle: '); }
 if(isset($_get["sub"]))
 { echo "yes";}
 else
 {  
 $memID=$_REQUEST["Mem_ID"];
 $pl=$_REQUEST["pl"];
 }

 $p1="";

 $q="select * from custom_plan where mem_ID=$memID ";
			  
  $query_ids = oci_parse($con, $q);
 $r = oci_execute($query_ids);
 $rs_arr = oci_fetch_array($query_ids, OCI_BOTH+OCI_RETURN_NULLS);
while($row=oci_fetch_array($query_ids,OCI_ASSOC+OCI_RETURN_NULLS))
      	  {

			
			

			if($pl=='Daily')
				{$p1=$row["DALIY"];
				echo $row['DAILY_TARGET'];
				}
				if($pl=='Weekly')
				{echo $row['WEEKLY_TARGET'];
				}
				if($pl=='Monthly')
				{echo $row['MONTHLY_TARGET'];
				}

			
			}

 
		  

?>
</body>
</html>