<HTML>
<body>
 <HEAD>
	<TITLE<tr align=middle ><td>> New Member Registration </TITLE>
	
<form action="workoutplan.php" method= "post">
<h>  </h>
</br></br>

<label for=""Mem_ID">Enter the Member ID----:	<input type="number" name="Mem_ID" id="Mem_ID"></input></label>
</br></br>

	<label for=""Name">Enter the Member Name:	<input type="text" name="Name" id="Name"></input></label>
	</br></br>
	<label for=""Gender">Gender-----------------------:	<input type="text" name="Gender" id="Gender"></input></label>
	</br></br>
	<label for=""Weight">Intial Weight----------------:   <input type="number" name="weight" id="weight"></input></label>
	</br></br>
	<label for=""Member Ph_No">Member Contact_No------:	<input type="text" name="number" id="number"></input></label>
	</br></br>
	<label for=""Age">Age----------------------------:	<input type="number" name="age" id="age"></input></label>
		</br></br>
	
	<TABLE>
	<tr align=middle ><td>
<TD></TD>
       </br>
</br>
<label for=""save">save:
        <input type="submit" name="sub" value="Save to DataBase" /></td>
		</label>
        </table>	
</form>
<form action="Registration.php" method="get">
<input type="submit" value="Open Form">
</form>
<?php
$db_sid =
 "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-0V5JOQE)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = aqeel)
    )
  )"; // Your oracle SID, can be found in tnsnames.ora
//((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN)

 $db_user = "scott"; // Oracle username e.g "scott"
 $db_pass = "aq4427"; // Password for user e.g "1234"
 $con = oci_connect($db_user,$db_pass,$db_sid);
 if($con)
 { echo "Oracle Connection Successful........................>"; }
 else
 { die('Could not connect to Oracle: '); }
 if(isset($_get["sub"]))
 { echo "yes";}
 else
 {  
 $memID=$_REQUEST["Mem_ID"];
 $Name=$_REQUEST["Name"];
 $Number=$_REQUEST["number"];
 $gender=$_REQUEST["Gender"];
 $weight=$_REQUEST["weight"];
 $age=$_REQUEST["age"];
 

  $qr1="INSERT INTO member values( '$gender','$Name','$memID','$weight','$Number','$age')";
 $query_id = oci_parse($con, $qr1);
 $r = oci_execute($query_id);
 echo "";
 if($query_id)
 {
 echo "Insertion Successful";
 }
 else {
	echo "Insertion Not Successful";
}
 
 
 }

?>
	</body>
 </HEAD>
</HTML>

