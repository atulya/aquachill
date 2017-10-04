<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
	
	
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
		
	$query="INSERT INTO vlv VALUES('','$vlvitem[0]','$Pressure_rate','$size_NB','$size_inch','$Specifications','$vlvmake[0]',
		   '$vlvCost','$cost_inch','$vlvDate','$location','0','0','','','','')";
	
	$rsinsertvlv = mysqli_query($connection, $query);
//echo $sql;
	//$no_of_insertoom_records = mysqli_num_rows($rsinsertvlv);
	echo "1 record added";
?>