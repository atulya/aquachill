<?php
//include 'oem.php';

	// Rquested variable and insert query for oom

	$Gauge = $_REQUEST['Gauge'];
	$Thickness = $_REQUEST['Thickness'];
	$Flange = $_REQUEST['Flange'];
	$Basic_Rate = $_REQUEST['Basic_Rate'];
	$New_BasicRate = $_REQUEST['New_BasicRate'];
	$Discount = $_REQUEST['Discount'];
	$BasicDiscount = $_REQUEST['BasicDiscount'];
	$Excise = $_REQUEST['Excise'];
	$Transportation = $_REQUEST['Transportation'];
	$Sealant_gasket = $_REQUEST['Sealant_gasket'];
	$Support = $_REQUEST['Support'];
	$Wastage = $_REQUEST['Wastage'];
	$Total = $_REQUEST['Total'];
	$VAT = $_REQUEST['VAT'];
	$Grand_Total = $_REQUEST['Grand_Total'];
	
	$connection = mysqli_connect('localhost','root','root');

	if (!$connection){
		echo "Database Connection Failed" . mysqli_error($connection);
	}
	$select_db = mysqli_select_db($connection, 'aquachill');
	if (!$select_db){
		die("Database Selection Failed" . mysqli_error($connection));
		
	}
	
	if (!$connection)
	{
		die('Could not connect: ' . mysqli_error());
	}
		
	$query="INSERT INTO dct VALUES('','$Gauge','$Thickness','$Flange','$Basic_Rate','$New_BasicRate','$Discount','$BasicDiscount',
		   '$Excise','$Transportation','$Sealant_gasket','$Support','$Wastage','$Total','$VAT','$Grand_Total','0','0','','','','')";
	
	$rsinsertdct = mysqli_query($connection, $query);
//echo $sql;
	//$no_of_insertoom_records = mysqli_num_rows($rsinsertvlv);
	echo "1 record added";
?>