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
$iRecId = $_REQUEST['RecId'];
if($iRecId)
{
	$sql = "DELETE FROM ct";
	$sql = $sql.' WHERE Id = '.$iRecId;
	$rseDltCt = mysqli_query($connection, $sql);
	if($rseDltCt === TRUE)
	{
			echo "Record Delete Successfully.";
			//header( "refresh:1; url=ads.php" );
	}
	else
	{
		
			echo "Record not Delete.";
			//header( "refresh:1; url=ads.php" );
	}	

	
}

?>