<?php
		// Rquested variable and insert query for Ads
	$iRecId = $_REQUEST['RecId'];
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
	 $sqlup="UPDATE ads SET Ads_Item_Id ='$AdsItem[0]',Ads_Make_Id ='$AdsMake[0]',Ads_Date = '$AdsDate',Ads_File = '$AdsFileName',IsDeleted = '0',IsSelected = '0',IsCreatedOn = '',IsCreatedBy = '0',IsUpdatedOn = '',IsUpdatedBy = '0' WHERE Id = $iRecId ";
	 $rsAdsUpdate = mysqli_query($connection,$sqlup); 
	 if($rsAdsUpdate)
	 {
		 echo "Record Update Successfully";
	 }
	 else
	 {
		 echo "Record is not update";
	 }
?>