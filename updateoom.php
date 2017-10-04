<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
	$iRecId = $_REQUEST['RecId'];
	$sitem = explode('~',($_REQUEST['item']));
	$sRefrigerant = $_REQUEST['Refrigerant'];
	$sOomMake = explode('~',($_REQUEST['Make_Id']));
	$sChillerModel = $_REQUEST['ChillerModel'];
	$sModel = $_REQUEST['Model'];
	$sCost_R = $_REQUEST['Cost_R'];
	$oomFileName = "upload/".$_FILES['sFileOOM']['name'];
	$file_loc = $_FILES['sFileOOM']['tmp_name'];
	$filelocation =  move_uploaded_file($file_loc,$oomFileName);

	$connection = mysqli_connect('localhost', 'root', 'root');
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
		
	 $sqlup="UPDATE oom SET item_Id	 ='$sitem[0]',Refrigerant ='$sRefrigerant',Make_Id = '$sOomMake[0]',Capacity = '$sChillerModel',Model = '$sModel',Cost = '$sCost_R',OOM_File = '$oomFileName',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = '',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	$rsupdateoom = mysqli_query($connection, $sqlup);
	 if($rsupdateoom)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
?>