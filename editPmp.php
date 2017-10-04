<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include 'include/assetCss.php'; ?>
  </head>
  <body>
    <?php include 'include/header.php'; 
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
	$query = "SELECT * FROM `pmp` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditpmp = mysqli_query($connection,$query);
	$spmp = mysqli_fetch_assoc($rseditpmp);
	$no_of_pmp_records = mysqli_num_rows($rseditpmp);
}	
	
	
$query = 'SELECT * FROM master_type';
$rsMasterType = mysqli_query($connection, $query);
//echo $sql;
$no_of_mastertype_records = mysqli_num_rows($rsMasterType);

	
$query = 'SELECT * FROM master_item';
$rsMasterItem = mysqli_query($connection, $query);
//echo $sql;
$no_of_masterItem_records = mysqli_num_rows($rsMasterItem);
	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainPmp">
      <div class="col-md-12">
        <h3>PMP - Entry No. <span class="label label-success"><?=$no_of_pmp_records?></span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="" method="post" enctype="multipart/form-data">

            <div class="form-group col-md-6 ">
              <label>Item Name <span class="mandatory">*</span></label>
				<select class ="form-control" name = "pmpitem">
				<option value="0">(Item Name)</option>
				<?php
 				for($j=0;$j<$no_of_masterItem_records;$j++)
				{
					$sMasterItem = mysqli_fetch_assoc($rsMasterItem);
					if($spmp['Pmp_Item_Id'] == $sMasterItem['Id'])
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
            <div class="form-group col-md-6">
			 <label>Type <span class="mandatory">*</span></label>
				<select class ="form-control" name = "pmpType">
				<option value="0">(Type)</option>
				<?php
 				for($j=0;$j<$no_of_mastertype_records;$j++)
				{
					$sMasterType = mysqli_fetch_assoc($rsMasterType);
					if($spmp['Pmp_Type_Id'] == $sMasterType['Id'])
					{
					?>
						<option value="<?=$sMasterType['Id']?>~<?=$sMasterType['Description']?>" selected><?=$sMasterType['Description']?></option>
					<?php
					}
					else
					{
					?>
						<option value="<?=$sMasterType['Id']?>~<?=$sMasterType['Description']?>"><?=$sMasterType['Description']?></option>
					<?php
					}
				}
					?>				
 			</select>
			 </div>
            <div class="form-group col-md-6 ">
              <label>Quote from <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Quote from" name = "pmpQuote" value="<?=$spmp['Quote_From']?>">
            </div>
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "pmpmake">
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($spmp['Pmp_Make_Id'] == $smake['Id'])
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
              <label>Model<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Model"name = "pmpModel" value="<?=$spmp['Pmp_Model']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Flow<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Flow" name = "pmpFlow" value="<?=$spmp['Flow']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Head <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Head" name = "pmpHead" value="<?=$spmp['Head']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Motor type & Rating(KW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="motor" placeholder="Motor type & Rating(KW)" name = "pmpMotor" value="<?=$spmp['Motor_Type_rating']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Seal<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Seal" name = "pmpSeal" value="<?=$spmp['Seal']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>MOC<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email" name = "pmpMOC" value="<?=$spmp['MOC']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Unit Price<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="unit_price" placeholder="Unit Price" name = "unit_price" value="<?=$spmp['Unit_Price']?>">
            </div>

            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="pmpfile" placeholder="File Location" name = "pmpfile"value="<?=$spmp['file_location']?>">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "pmpUpdate(this.id);" id = "<?=$spmp['Id']?>">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->
  </body>
</html>
