<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
	
	$iRecId = $_REQUEST['RecId'];	
	$ctType = explode('~',($_REQUEST['ctType']));
	$ctmake = explode('~',($_REQUEST['ctmake']));
	$ctdate = $_REQUEST['ctdate'];
	$water_flow = $_REQUEST['water_flow'];
	$Range = $_REQUEST['Range'];
	$Approach = $_REQUEST['Approach'];
	$ct_Cost = $_REQUEST['ct_Cost'];
	$Specific_Cost = $_REQUEST['Specific_Cost'];
	$Specific_Cost_RS = $_REQUEST['Specific_Cost_RS'];
	
 $ctFileName = "upload/".$_FILES['ctFile']['name'];
 $file_loc = $_FILES['ctFile']['tmp_name'];
 $filelocation =  move_uploaded_file($file_loc,$ctFileName);
	
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
		
	 $sqlup="UPDATE ct SET CT_Type_Id ='$ctType[0]',CT_Make_Id ='$ctmake[0]',CT_Quote_Date = '$ctdate',Water_Flow = '$water_flow',CT_Range = '$Range',Approach = '$Approach',CT_Cost = '$ct_Cost',Specific_Cost = '$Specific_Cost',Specific_Cost_Flow = '$Specific_Cost_RS',CT_file_location = '$ctFileName',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = '',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	 $rsctUpdate = mysqli_query($connection,$sqlup); 
	 $fp = fopen("web.txt","w");
	 fwrite($fp,"sql".$sqlup);
	 if($rsctUpdate)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
	 ?>