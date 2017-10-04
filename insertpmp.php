<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
	
	
	$pmpitem = explode('~',($_REQUEST['pmpitem']));
	$pmpType = explode('~',($_REQUEST['pmpType']));
	$pmpQuote = $_REQUEST['pmpQuote'];
	$pmpmake = explode('~',($_REQUEST['pmpmake']));
	$pmpModel = $_REQUEST['pmpModel'];
	$pmpFlow = $_REQUEST['pmpFlow'];
	$pmpHead = $_REQUEST['pmpHead'];
	$pmpMotor = $_REQUEST['pmpMotor'];
	$pmpSeal = $_REQUEST['pmpSeal'];
	$pmpMOC = $_REQUEST['pmpMOC'];
	$unit_price = $_REQUEST['unit_price'];
//	$filename = $_FILES['pmpfile']['name'];	
	//$pmpfilename=addslashes (file_get_contents($_FILES['pmpfile']['tmp_name']));
	
 $file = "upload/".$_FILES['pmpfile']['name'];
 $file_loc = $_FILES['pmpfile']['tmp_name'];
/* $file_size = $_FILES['pmpfile']['size'];
 $file_type = $_FILES['pmpfile']['type'];
 $folder="upload/".$_FILES['pmpfile']['name'];*/
$filelocation =  move_uploaded_file($file_loc,$file);
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
		
	$query="INSERT INTO pmp VALUES('','$pmpitem[0]','$pmpType[0]','$pmpQuote','$pmpmake[0]','$pmpModel','$pmpFlow',
		   '$pmpHead','$pmpMotor','$pmpSeal','$pmpMOC','$unit_price','$file','0','0','','','','')";
	
	$rsinsertpmp = mysqli_query($connection, $query);
//echo $sql;
	//$no_of_insertoom_records = mysqli_num_rows($rsinsertvlv);
	echo "1 record added";
?>