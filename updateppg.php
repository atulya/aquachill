<?php
include 'ppg.php';

	// Rquested variable and insert query for oom
	$iRecId = $_REQUEST['RecId'];
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
	 $sqlup="UPDATE ppg SET Pipe_Standard ='$spipe',PPGMake_Id ='$spipe_make[0]',Quote_from = '$squote',Size_Pipe = '$ssize',
	 Thk = '$sThk',Schedule = '$schedule',Weight_per_mtr = '$weight',Cost_mtr = '$scost_mtr',Cost_basis = '$scost_basis',Date_of_quote = '$dquote_date',
	 Specific_Cost_inch = '$scost_inch',Specific_Cost_mtr = '$scost_kg',File_Ppg = '$PpgFileName',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = 'date(Y-m-d)',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	 $rsPpgUpdate = mysqli_query($connection,$sqlup); 
	 if($rsPpgUpdate)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
?>