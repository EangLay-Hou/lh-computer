<?php require_once'connectdb.php';
// create a variable
$Case_Name=$_POST['Case_Name'];
$CPU_Name=$_POST['CPU_Name'];
$Motherboard_Name=$_POST['Motherboard_Name'];
$Power_Supply_Name=$_POST['Power_Supply_Name'];
$RAM_Name=$_POST['RAM_Name'];
$VGA_Name=$_POST['VGA_Name'];
$GenerationAndCore=$_POST['Generation_and_Core'];
$Ca_Type=$_POST['Ca_Type'];
$Mo_Type=$_POST['Mo_Type'];
$Po_Type=$_POST['Po_Type'];
$Ra_Type=$_POST['Ra_Type'];
$Vg_Type=$_POST['Vg_Type'];
$Size_Ram=$_POST['Size_Ram'];
$Size_Vga=$_POST['Size_Vga'];
$Ca_Price=$_POST['Ca_Price'];
$Cp_Price=$_POST['Cp_Price'];
$Mo_Price=$_POST['Mo_Price'];
$Po_Price=$_POST['Po_Price'];
$Ra_Price=$_POST['Ra_Price'];
$Vg_Price=$_POST['Vg_Price'];

//Execute the query

Database::query("INSERT INTO cases(Name,Type,Price)
						VALUES('$Case_Name','$Ca_Type','$Ca_Price')");
				//echo "Successful To Insert<br/><a href=\"../call/callProduct.php\">Go Back</a>";

Database::query("INSERT INTO cpu(Name,Generation_and_Core,Price)
				VALUES('$CPU_Name','$GenerationAndCore','$Cp_Price')");
		//echo "Successful To Insert<br/><a href=\"../call/callProduct.php\">Go Back</a>";

Database::query("INSERT INTO motherboard(Name,Type,Price)
						VALUES('$Motherboard_Name','$Mo_Type','$Mo_Price')");
				//echo "Successful To Insert<br/><a href=\"../call/callProduct.php\">Go Back</a>";

Database::query("INSERT INTO power_supply(Name,Type,Price)
						VALUES('$Power_Supply_Name','$Po_Type','$Po_Price')");
				//echo "Successful To Insert<br/><a href=\"../call/callProduct.php\">Go Back</a>";

Database::query("INSERT INTO ram(Name,Type,Size,Price)
						VALUES('$RAM_Name','$Ra_Type','$Size_Ram','$Ra_Price')");
				//echo "Successful To Insert<br/><a href=\"../call/callProduct.php\">Go Back</a>";

Database::query("INSERT INTO vga(Name,Type,Size,Price)
						VALUES('$VGA_Name','$Vg_Type','$Size_Vga','$Vg_Price')");
				echo "Successful To Insert<br/><a href=\"../admin0.php\">Go Back</a>";
?>
