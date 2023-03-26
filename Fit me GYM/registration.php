<HTML>
<style>
	 body {
		background-image: url('http://blackfit.getmytemplate.com/images/main-slider/image-4.jpg');
		background-attachment: fixed;
		background-size: cover;
	 }
	 form{
		font-family: Helvetica, sans-serif;
		color:blue;
		text-align:right;
		margin-right: 50px;
		margin-top: -120px;
	 }
	 h2{
		font-family: Courier New, Courier,monospace;
		font-weight: normal;
		color:orangered;
		text-align:justify;
		margin-top: 200px;
		margin-left: 50px;
	 }
	 RegisterYourself{
		font-family: Brush Script MT, cursive;
		font-weight: bold;
		color:orangered;
		font-size: 40px;
		text-align:justify;
		margin-top: 230px;
		margin-left: 850px;
	 }
	 div{
		font-family: Courier New, Courier,monospace;
		color:orangered;
		font-size: 50px;
		font-weight: bold;
		text-align:justify;	
		margin-left: 50px;
	 }
	 div2{
		font-family: Courier New, Courier,monospace;
		color:white;
		font-size: 50px;
		font-weight: bold;
		text-align:justify;
		margin-top: -100px;
		margin-left: -40px;
	 }
	 div3{
		font-family: Courier New, Courier,monospace;
		color:white;
		font-size: 50px;
		font-weight: bold;
		text-align:justify;
		margin-top: -100px;
		margin-left: 48px;
	 }
	 img {
        float: left;
        margin: 10px 10px;
     }
	 input{
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid orangered;
		  border-radius: 4px;
		  background-color:#503335;
	 }
	</style>
	<body>
		    <img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
			<br>
			<h2>ARE YOU READY TO
			<RegisterYourself>Register Yourself!</RegisterYourself></h2>
			<div>GET FIT
			<div2>, STRONG</div2></div>
			<div3>& MOTIVATED!</div3>
		
<HEAD>
	<TITLE <tr align=middle ><td>> New Member Registration </TITLE>

<form action="registration.php" method= "post">
</br></br>

<label for=""Mem_ID"><input placeholder="Enter the Member ID" type="number" name="Mem_ID" id="Mem_ID"></input></label>
</br></br>
	<label for=""Name">	<input placeholder="Enter the Member Name" type="text" name="Name" id="Name"></input></label>
	</br></br>
	<label for=""Gender"><input placeholder="Gender" type="text" name="Gender" id="Gender"></input></label>
	</br></br>
	<label for=""Weight"><input placeholder="Weight" type="number" name="weight" id="weight"></input></label>
	</br></br>
	<label for=""Member Ph_No"><input placeholder="Contact No" type="text" name="number" id="number"></input></label>
	</br></br>
	<label for=""Age"><input placeholder="Age" type="number" name="age" id="age"></input></label>
		</br></br>
		<label for=""fee"><input placeholder="Registration fee" type="number" name="fee" id="fee"></input></label>
		</br></br>
	
	<TABLE>
	<tr align=middle ><td>
<TD></TD>        
<label for=""save"> <input type="submit" name="sub" value="login" /></td>
		</label>
        </table>
	
</form>
<label for=""save">:
<form action="mainform.php" method="get">
	<br><br><br><br>
<input type="submit" value="Back">
</form>
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
 $fee=$_REQUEST["fee"];
 

  $qr1="INSERT INTO member values( '$gender','$Name','$memID','$weight','$Number','$age','$fee')";
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

