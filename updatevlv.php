<?php
//include 'ppg.php';
	 $fp  = fopen("web.txt","w");
	 fwrite($fp,"sql".$sqlup);

	// Rquested variable and insert query for oom
	$iRecId = $_REQUEST['RecId'];
	$vlvitem = explode('~',($_REQUEST['svlvitem']));
	$Pressure_rate = $_REQUEST['sPressure_rate'];
	$size_NB = $_REQUEST['ssize_NB'];
	$size_inch = $_REQUEST['ssize_inch'];
	$Specifications = $_REQUEST['sSpecifications'];
	$vlvmake = explode('~',($_REQUEST['svlvmake']));
	$vlvCost = $_REQUEST['svlvCost'];
	$cost_inch = $_REQUEST['scost_inch'];
	$vlvDate = $_REQUEST['dvlvDate'];
	$location = $_REQUEST['slocation'];

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
	 $sqlup="UPDATE vlv SET VlvItem_Id ='$vlvitem[0]',Pressure_rating ='$Pressure_rate',Size_NB = '$size_NB',Size_Inch = '$size_inch',Specifications = '$Specifications',VlvMake_Id = '$vlvmake[0]',Cost = '$vlvCost',Cost_inch = '$cost_inch',vlvDate = '$vlvDate',Location = '$location',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = 'date(Y-m-d)',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	 $rsVlvUpdate = mysqli_query($connection,$sqlup); 
	$fp = fopen("pp.txt","w");
	fwrite($fp,"sql".$sqlup);

	 if($rsVlvUpdate)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
?>