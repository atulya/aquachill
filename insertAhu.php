<?php
//include 'oem.php';

	// Rquested variable and insert query for oom
$fp = fopen("web1.txt","w");
fwrite($fp,"insert");
	$AhuDescription = $_REQUEST['AhuDescription'];
	fwrite($fp,"-p1-".$AhuDescription);
	$Ahumake = explode('~',($_REQUEST['Ahumake']));
	fwrite($fp,"-p2-".$Ahumake[0]);
	$AirFlowrate = $_REQUEST['AirFlowrate'];
	fwrite($fp,"-p3-".$AirFlowrate);
	$Pressure = $_REQUEST['Pressure'];
	fwrite($fp,"-p4-".$Pressure);
	$TypeFan = $_REQUEST['TypeFan'];
	fwrite($fp,"-p5-".$TypeFan);
	
	$Filter = $_REQUEST['Filter'];
	fwrite($fp,"-p6-".$Filter);
	$PUFThk = $_REQUEST['PUFThk'];
	fwrite($fp,"-p7-".$PUFThk);
	$InnerSkin = $_REQUEST['InnerSkin'];
	fwrite($fp,"-p8-".$InnerSkin);
	$OuterSkin = $_REQUEST['OuterSkin'];
	fwrite($fp,"-p9-".$OuterSkin);
	$Cooling = $_REQUEST['Cooling'];
	fwrite($fp,"-p10-".$Cooling);
	$reheat = $_REQUEST['reheat'];
	fwrite($fp,"-p11-".$reheat);
	$Section = $_REQUEST['Section'];
	fwrite($fp,"-p12-".$Section);
	$Humidifier = $_REQUEST['Humidifier'];
	fwrite($fp,"-p13-".$Humidifier);
	$MotorKw = $_REQUEST['MotorKw'];
	fwrite($fp,"-p14-".$MotorKw);
	$Cost = $_REQUEST['Cost'];
	fwrite($fp,"-p15-".$Cost);
	$SpecificCost = $_REQUEST['SpecificCost'];
	fwrite($fp,"-p16-".$SpecificCost);
	
	 $AhuFileName = "upload/".$_FILES['AhuFile']['name'];
	 $file_loc = $_FILES['AhuFile']['tmp_name'];
	 $filelocation =  move_uploaded_file($file_loc,$AhuFileName);
	 fwrite($fp,"-p17-".$filelocation);
	
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
		
	$query="INSERT INTO ahu VALUES('','$AhuDescription','$Ahumake[0]','$AirFlowrate','$Pressure','$TypeFan','$Filter','$PUFThk',
		   '$InnerSkin','$OuterSkin','$Cooling','$reheat','$Section','$Humidifier','$MotorKw','$Cost','$SpecificCost','$AhuFileName','0','0','','','','')";
	
	$rsinsertahu = mysqli_query($connection, $query);
	fwrite($fp,"-p18-".$query);
//echo $sql;
	//$no_of_insertoom_records = mysqli_num_rows($rsinsertvlv);
	echo "1 record added";
?>