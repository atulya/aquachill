<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
	
	
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
		
	$query="INSERT INTO ct VALUES('','$ctType[0]','$ctmake[0]','$ctdate','$water_flow','$Range','$Approach',
		   '$ct_Cost','$Specific_Cost','$Specific_Cost_RS','$ctFileName','0','0','','','','')";
	
	$rsinsertct = mysqli_query($connection, $query);
//echo $sql;
	//$no_of_insertoom_records = mysqli_num_rows($rsinsertvlv);
	echo "1 record added";
?>