<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include 'include/assetCss.php'; ?>
  </head>
  <body>
    <?php 
	include 'include/header.php'; 
	include 'js.php'; 

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
	$query = "SELECT * FROM `oom` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditoom = mysqli_query($connection,$query);
	$soom = mysqli_fetch_assoc($rseditoom);
	$no_of_oom_records = mysqli_num_rows($rseditoom);
}

	
$query = 'SELECT * FROM master_item';
$rsMasterItem = mysqli_query($connection, $query);
//echo $sql;
$no_of_masterItem_records = mysqli_num_rows($rsMasterItem);
	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
	
	?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainOOM">
      <div class="col-md-12">
        <h3>OOM - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">
            <div class="form-group col-md-6">
			 <label>Item Name  <span class="mandatory">*</span></label>
				<select class ="form-control" name = "item_Id">
				<option value="0">(Item Name)</option>
				<?php
 				for($j=0;$j<$no_of_masterItem_records;$j++)
				{
					$sMasterItem = mysqli_fetch_assoc($rsMasterItem);
					if($soom['item_Id'] == $sMasterItem['Id'])
					{
						?>
			
						<option value="<?=$sMasterItem['Id']?>~<?=$sMasterItem['Description']?>" selected><?=$sMasterItem['Description']?></option>
						<?php
					}
					else
					{
					?>	
						<option value="<?=$sMasterItem['Id']?>~<?=$sMasterItem['Description']?>"><?=$sMasterItem['Description']?></option>					
					<?php
					}
				}
					?>
 			</select>
			 </div>

            <div class="form-group col-md-6 ">
              <label>Refrigerant<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Refrigerant" name = "Refrigerant" placeholder="Refrigerant" value="<?=$soom['Refrigerant']?>">
            </div>
            <div class="form-group col-md-6">
			 <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "Make_Id">
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($soom['Make_Id'] == $smake['Id'])
					{
					?>
				    <option value="<?=$smake['Id']?>~<?=$smake['Description']?>" selected><?=$smake['Description']?></option>
					<?php
					}
					else
					{
					?>
					<option value="<?=$smake['Id']?>~<?=$smake['Description']?>"><?=$smake['Description']?></option>
					<?php
					}
				}
				?>
				</select>
			 </div>
            <div class="form-group col-md-6 ">
              <label>Capacity <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="ChillerModel" name="ChillerModel" placeholder="Capacity" value="<?=$soom['Capacity']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Model<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Model" name= "Model" value="<?=$soom['Model']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost (Rs)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Cost_R" placeholder="Cost (Rs)" name = "Cost_R" value="<?=$soom['Cost']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="FileOOM" placeholder="File Location" name = "FileOOM" value="<?=$soom['OOM_File']?>">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "oomUpdate(this.id);" id="<?=$soom['Id']?>">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->
  </body>
</html>