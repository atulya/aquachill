<?php	
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


$iRecDctId = $_REQUEST['RecIdDct'];
if($iRecDctId)
{
	$sql = "DELETE FROM dct";
	$sql = $sql.' WHERE Id = '.$iRecDctId;
	$rseDltDct = mysqli_query($connection, $sql);
	if($rseDltDct === TRUE)
	{
			echo "Record Delete Successfully.";
			//header( "refresh:1; url=ads.php" );
	}
	else
	{
		//Error alert
			echo "Record not Delete.";
			//header( "refresh:1; url=ads.php" );
	}	

}
?>