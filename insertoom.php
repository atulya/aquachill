<?php
//include 'oem.php';

	// Rquested variable and insert query for oom

	$sitem = explode('~',($_REQUEST['item']));
	$sRefrigerant = $_REQUEST['Refrigerant'];
	$sOomMake = explode('~',($_REQUEST['Make_Id']));
	$sChillerModel = $_REQUEST['ChillerModel'];
	$sModel = $_REQUEST['Model'];
	$sCost_R = $_REQUEST['Cost_R'];
	$sFileOOM = $_REQUEST['FileOOM'];
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
		
	$query="INSERT INTO oom VALUES('','$sitem[0]','$sRefrigerant','$sOomMake[0]','$sChillerModel','$sModel','$sCost_R','$oomFileName','0','0','','','','')";
	$rsinsertoom = mysqli_query($connection, $query);
//echo $sql;
	//$no_of_insertoom_records = mysqli_num_rows($rsinsertoom);
	echo "1 record added";
?>