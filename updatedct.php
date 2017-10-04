<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
$iRecId = $_REQUEST['RecId'];
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
		
	 $sqlup="UPDATE dct SET Gauge ='$Gauge',Thickness ='$Thickness',FlangeType = '$Flange',Basic_Rate = '$Basic_Rate',New_BasicRate ='$New_BasicRate',Discount ='$Discount',Basic_Discount ='$BasicDiscount',Excise = '$Excise',Transportation = '$Transportation',
	 Sealant_Gasket = '$Sealant_gasket',Support = '$Support',Wastage = '$Wastage',Total = '$Total',VAT = '$VAT',Grand_Total = '$Grand_Total',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = '',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	 $rsDctUpdate = mysqli_query($connection,$sqlup); 
	 $fp = fopen("web.txt","w");
	 fwrite($fp,"sql - ".$sqlup);
	 if($rsDctUpdate)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
?>