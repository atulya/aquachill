<?php
//include 'oem.php';

// Rquested variable and insert query for oem
 		$Ddate = $_REQUEST['Oem_Date'];
		$sType = explode('~',($_REQUEST['Type']));
		$sMake = explode('~',($_REQUEST['Make']));
		$sCapacity = $_REQUEST['capacity'];
		$sChiller_Model = $_REQUEST['Chiller_Model'];
		$sCondenser_temp = $_REQUEST['Condenser_temp'];
		$sAmbient_temp = $_REQUEST['ambient_temp'];
		$sChiller_temp = $_REQUEST['Chiller_temp'];
		$sCondenser_waterF = $_REQUEST['Condenser_waterF'];
		$sCompressor_power = $_REQUEST['Compressor_power'];
		$sFan_power = $_REQUEST['fan_power'];
		$sBasic_price = $_REQUEST['basic_price'];
		$sPrice_CVD = $_REQUEST['price_CVD'];
		$OemFileName = "upload/".$_FILES['file_location']['name'];
		$file_loc = $_FILES['file_location']['tmp_name'];
		$filelocation =  move_uploaded_file($file_loc,$OemFileName);
		$sCost = $_REQUEST['cost'];
		$sTotal_power = $_REQUEST['total_power'];
		$sKw_tr = $_REQUEST['Kw_tr'];

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
		
		
	
	

	
	//$correct_date = date('Y-m-d', str_replace('/', '-', $Ddate));
	$sql="INSERT INTO oem VALUES('','$Ddate','$sType[0]','$sMake[0]','$sCapacity','$sChiller_Model','$sCondenser_temp',
	'$sAmbient_temp','$sChiller_temp','$sCondenser_waterF','$sCompressor_power','$sFan_power','$sBasic_price','$sPrice_CVD','$OemFileName',
	'$sCost','$sTotal_power','$sKw_tr','0','0','','','','')";
	$rsinsertoem = mysqli_query($connection, $sql);
//echo $sql;
	//$no_of_insertoom_records = mysqli_num_rows($rsinsertvlv);
	echo "1 record added";

	
?>