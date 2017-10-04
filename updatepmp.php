<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
	
	$iRecId = $_REQUEST['RecId'];
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
		
	$sqlup="UPDATE pmp SET Pmp_Item_Id ='$pmpitem[0]',Pmp_Type_Id ='$pmpType[0]',Quote_From = '$pmpQuote',Pmp_Make_Id = '$pmpmake[0]',Pmp_Model = '$pmpModel',Flow = '$pmpFlow',Head = '$pmpHead',Motor_Type_rating = '$pmpMotor',Seal = '$pmpSeal',MOC = '$pmpMOC',Unit_Price = '$unit_price',file_location = '$file',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = 'date(Y-m-d)',IsUpdatedBy = '0' WHERE Id = $iRecId ";	
	$rsupdatepmp = mysqli_query($connection, $sqlup);
	$fp = fopen("pp.txt","w");
	fwrite($fp,"sql".$rsupdatepmp['Pmp_Item_Id']);
	 if($rsupdatepmp)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
?>