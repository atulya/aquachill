<?php
//include 'oem.php';
		// Rquested variable and insert query for oom
	$AdsItem = explode('~',($_REQUEST['AdsItem']));
	$AdsMake = explode('~',($_REQUEST['AdsMake']));
	$AdsDate = $_REQUEST['AdsDate'];
	$AdsFileName = "upload/".$_FILES['AdsFile']['name'];
	$file_loc = $_FILES['AdsFile']['tmp_name'];
	$filelocation =  move_uploaded_file($file_loc,$AdsFileName);
	
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

		 $query="INSERT INTO ads VALUES('','$AdsItem[0]','$AdsMake[0]','$AdsDate','$AdsFileName','0','0','','','','')";
		$rsinsertads = mysqli_query($connection, $query);
		echo "1 record added";
?>