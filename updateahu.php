<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
	$iRecId = $_REQUEST['RecId'];
	$AhuDescription = $_REQUEST['AhuDescription'];
	$Ahumake = explode('~',($_REQUEST['Ahumake']));
	$AirFlowrate = $_REQUEST['AirFlowrate'];
	$Pressure = $_REQUEST['Pressure'];
	$TypeFan = $_REQUEST['TypeFan'];
	
	$Filter = $_REQUEST['Filter'];
	$PUFThk = $_REQUEST['PUFThk'];
	$InnerSkin = $_REQUEST['InnerSkin'];
	$OuterSkin = $_REQUEST['OuterSkin'];
	$Cooling = $_REQUEST['Cooling'];
	$reheat = $_REQUEST['reheat'];
	$Section = $_REQUEST['Section'];
	$Humidifier = $_REQUEST['Humidifier'];
	$MotorKw = $_REQUEST['MotorKw'];
	$Cost = $_REQUEST['Cost'];
	$SpecificCost = $_REQUEST['SpecificCost'];
	
	 $AhuFileName = "upload/".$_FILES['AhuFile']['name'];
	 $file_loc = $_FILES['AhuFile']['tmp_name'];
	 $filelocation =  move_uploaded_file($file_loc,$AhuFileName);
	
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
		
	 $sqlup="UPDATE ahu SET Ahu_Description ='$AhuDescription',ahu_Make_Id ='$Ahumake[0]',Air_Flowrate = '$AirFlowrate',Static_Pressure = '$Pressure',Type_of_Fan ='$TypeFan',Filter ='$Filter',PUF_Panel_Thk = '$PUFThk',Inner_Skin = '$InnerSkin',
	 Outer_Skin = '$OuterSkin',Number_Of_Coil = '$Cooling',Number_Reheat_Coil = '$reheat',Heater_Section = '$Section',Humidifier_Section = '$Humidifier',Motor_KW = '$MotorKw',Cost_Rs = '$Cost',Specific_Cost_CFM = '$SpecificCost',File_Location = '$AhuFileName',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = '',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	 $rsAhuUpdate = mysqli_query($connection,$sqlup); 
	 if($rsAhuUpdate)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
?>