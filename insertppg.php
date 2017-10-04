<?php
include 'ppg.php';

	// Rquested variable and insert query for oom
	
	$spipe = $_REQUEST['spipe'];
	$spipe_make = explode('~',($_REQUEST['spipe_make']));
	$squote = $_REQUEST['squote'];
	$ssize = $_REQUEST['ssize'];
	$sThk = $_REQUEST['sThk'];
	$schedule = $_REQUEST['schedule'];
	$weight = $_REQUEST['weight'];
	$scost_mtr = $_REQUEST['scost_mtr'];
	$scost_basis = $_REQUEST['scost_basis'];
	$dquote_date = $_REQUEST['dquote_date'];
	$scost_inch = $_REQUEST['scost_inch'];
	$scost_kg = $_REQUEST['scost_kg'];
	$PpgFileName = "upload/".$_FILES['sPpg_file']['name'];
	$file_loc = $_FILES['sPpg_file']['tmp_name'];
	$filelocation = move_uploaded_file($file_loc,$PpgFileName);

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
		
$query="INSERT INTO ppg VALUES('','$spipe','$spipe_make[0]','$squote','$ssize','$sThk','$schedule',
		'$weight','$scost_mtr','$scost_basis','$dquote_date','$scost_inch','$scost_kg','$PpgFileName','0','0','','','','')";
	
	$rsinsertppg = mysqli_query($connection, $query);
			if($rsinsertppg)
			{
				//Success alert
				$sMessage = 'You successfully saved the entry.';
				//$_SESSION['$sAlert'] = alert_success($sMessage);
				$alertmsg = $_SESSION['$sAlert'];
			}
			else
			{
				//Error alert
				$sMessage = 'Category record not inserted';
				$_SESSION['$sAlert'] = alert_error($sMessage);
			}
?>