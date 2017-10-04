<?php
//include 'oem.php';
// Rquested variable and insert query for oem
		$iRecId = $_REQUEST['RecId'];
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
	 $sqlup="UPDATE oem SET OemDate ='$Ddate',Type_Id ='$sType[0]',Make_Id = '$sMake[0]',Capacity = '$sCapacity',
	 Chiller_Model = '$sChiller_Model',Chilled_water_supply_temp = '$sChiller_temp',Condenser_water_temp = '$sCondenser_temp',
	 condenser_water_flow = '$sCondenser_waterF',ambient_design_temp = '$sAmbient_temp',compressor_power = '$sCompressor_power',
	 fan_power = '$sFan_power',basic_price_Rs = '$sBasic_price',price_cvd = '$sPrice_CVD',
	 file_location = '$file_loc',cost_per_tr = '$sCost',total_power = '$sTotal_power',kw_tr = '$sKw_tr' ,IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = '',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	 $rsOemUpdate = mysqli_query($connection,$sqlup); 
	 if($rsOemUpdate)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }

	
?>