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
        margin: -27px -90px;
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

<html>
<head>
<title>Ready Made WorkOut Plans </title>
</head>
<form action="reportOne.php" method= "post">
<h>  </h>
</br></br>
<body>
	<img src="http://blackfit.getmytemplate.com/images/logo.svg" width="180" height="70">
    <br><br><br><br><br><br><br><br>
 <HEAD>
 <label for=""age"><input placeholder="Enter your Age" type="number" name="age" id="age"></input></label>
 </br></br>
 <label for=""weight"><input placeholder="Enter your Weight" type="float" name="weight" id="weight"></input></label>
 </br></br>
 <label for=""height"><input placeholder="Enter your Height" type="float" name="height" id="height"></input></label>
 </br></br>
 <label for=""gender"><input placeholder="Gender" type="text" name="gender" id="gender"></input></label>
 </br></br>
 <label for="" job">
			<select id="pl" input type"text" name="pl">
			<option value="">Fitness Goal</option>
			<option value="Daily">Daily</option>
			<option value="Weekly">Weekly</option>
			<option value="Monthly">Monthlty</option>
			</select>
		</label>
		</br>
		</br>
<TABLE>
	<tr align=middle ><td>
<TD></TD>
       </br>
<label for=""save">
        <input type="submit" name="sub" value="Search Plan" /></td>
		</label>
        </table>

		</form>
<label for="save">
<form action="report.php" method="get">
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
 $age=$_REQUEST["age"];
 $weight=$_REQUEST["weight"];
 $height=$_REQUEST["height"];
 $gender=$_REQUEST["gender"];
 $pl=$_REQUEST["pl"];
 
 }



 $q="select * from personalized_plan";
 $temp = 1;
 $lop = 10;
$a1 =0;	
$a2 =0;	
$a3 =0;	
$a4 =0;	
$a5 =0;	
$a6 =0;	
$a7 =0;	
$a8 =0;	
$a9 =0;
$a10 =0;
$p1="";$p2="";$p3="";$p4="";$p5="";$p6="";$p7="";$p8="";$p9="";$p10="";
  $query_ids = oci_parse($con, $q);
 $r = oci_execute($query_ids);
 $rs_arr = oci_fetch_array($query_ids, OCI_BOTH+OCI_RETURN_NULLS);
while($row=oci_fetch_array($query_ids,OCI_ASSOC+OCI_RETURN_NULLS))
      	  {
			
			if($temp==1)
			{$a1=$row["AGE"];
			 $temp=$temp+1;
				if($pl=='Daily')
				{$p1=$row["DALIY"];}
				if($pl=='Weekly')
				{$p1=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p1=$row["MONTHLY"];}
				}
			else if($temp==2)
			{$a2=$row["AGE"];
			 $temp=$temp+1;
			if($pl=='Daily')
				{$p2=$row["DALIY"];}
				if($pl=='Weekly')
				{$p2=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p2=$row["MONTHLY"];}
				}
			else  if($temp==3)
			{$a3=$row["AGE"];
			 $temp=$temp+1;
				if($pl=='Daily')
				{$p3=$row["DALIY"];}
				if($pl=='Weekly')
				{$p3=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p3=$row["MONTHLY"];}
				}
			else if($temp==4)
			{$a4=$row["AGE"];
			 $temp=$temp+1;
			 if($pl=='Daily')
				{$p4=$row["DALIY"];}
				if($pl=='Weekly')
				{$p4=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p4=$row["MONTHLY"];}
				}
			else if($temp==5)
			{$a5=$row["AGE"];
			 $temp=$temp+1;
			 if($pl=='Daily')
				{$p5=$row["DALIY"];}
				if($pl=='Weekly')
				{$p5=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p5=$row["MONTHLY"];}
				}
			else if($temp==6)
			{$a6=$row["AGE"];
			 $temp=$temp+1;
			 if($pl=='Daily')
				{$p6=$row["DALIY"];}
				if($pl=='Weekly')
				{$p6=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p6=$row["MONTHLY"];}
				}
			else if($temp==7)
			{$a7=$row["AGE"];
			 $temp=$temp+1;
			 if($pl=='Daily')
				{$p7=$row["DALIY"];}
				if($pl=='Weekly')
				{$p7=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p7=$row["MONTHLY"];}
				}
			else if($temp==8)
			{$a8=$row["AGE"];
			 $temp=$temp+1;
			if($pl=='Daily')
				{$p8=$row["DALIY"];}
				if($pl=='Weekly')
				{$p8=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p8=$row["MONTHLY"];}
				}
			else if($temp==9)
			{$a9=$row["AGE"];
			 $temp=$temp+1;
			 if($pl=='Daily')
				{$p9=$row["DALIY"];}
				if($pl=='Weekly')
				{$p9=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p9=$row["MONTHLY"];}
				}
			else if($temp==10)
			{$a10=$row["AGE"];
			 $temp=$temp+1;
			if($pl=='Daily')
				{$p10=$row["DALIY"];}
				if($pl=='Weekly')
				{$p10=$row["WEEKLY"];}
				if($pl=='Monthly')
				{$p10=$row["MONTHLY"];}
				}
			}
			
if($age<=$a1&& $age>0)
{
echo "<br>";
echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p1";
 echo "<br>";
echo "<br>";
}
else if($age>$a1 && $age<=$a2)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p2";
 echo "<br>";
echo "<br>";
}
else if($age>$a2 && $age<=$a3)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p3";
 echo "<br>";
echo "<br>";
}
else if($age>$a3 && $age<=$a4)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p4";
 echo "<br>";
echo "<br>";
}
else if($age>$a4 && $age<=$a5)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p5";
 echo "<br>";
echo "<br>";
}
else if($age>$a5 && $age<=$a6)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p6";
 echo "<br>";
echo "<br>";
}
else if($age>$a6 && $age<=$a7)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p7";
 echo "<br>";
echo "<br>";
}

else if($age>$a7 && $age<=$a8)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p8";
 echo "<br>";
echo "<br>";
}
else if($age>$a8 && $age<=$a9)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p9";
 echo "<br>";
echo "<br>";
}
else if($age>$a9)
{
echo "<br>";
	       echo"Age---->   ";
echo "$age";
 echo "<br>";
	       echo"Weight---->   ";
echo "$weight";
echo "<br>";
	       echo"height---->   ";
echo "$height";
echo "<br>";
	       echo"Gender---->   ";
echo "$gender";
echo "<br>";
	       echo"Personalized Plan Based On the Above Specs ---->   ";
echo "$p10";
 echo "<br>";
echo "<br>";
}


?>
</body>
</html>