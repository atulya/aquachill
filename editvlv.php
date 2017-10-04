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
	$query = "SELECT * FROM `vlv` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditvlv = mysqli_query($connection,$query);
	$svlv = mysqli_fetch_assoc($rseditvlv);
	$no_of_vlv_records = mysqli_num_rows($rseditvlv);
}	

	
$query = 'SELECT * FROM master_item';
$rsMasterItem = mysqli_query($connection, $query);
//echo $sql;
$no_of_masterItem_records = mysqli_num_rows($rsMasterItem);
	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainVlv">
      <div class="col-md-12">
        <h3>VLV - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6 ">
              <label>Item Name<span class="mandatory">*</span></label>
				<select class ="form-control" name = "vlvitem">
				<option value="0">(Item Name)</option>
				<?php
 				for($j=0;$j<$no_of_masterItem_records;$j++)
				{
					$sMasterItem = mysqli_fetch_assoc($rsMasterItem);
					if($svlv['VlvItem_Id'] == $sMasterItem['Id'])
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
              <label>Pressure rating <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Pressure rating" name = "Pressure_rate" value="<?=$svlv['Pressure_rating']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size (NB)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Size ( NB)" name = "size_NB" value="<?=$svlv['Size_NB']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size (inch)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Size (inch)" name = "size_inch" value="<?=$svlv['Size_Inch']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specifications<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specifications" name = "Specifications" value="<?=$svlv['Specifications']?>">
            </div>
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "vlvmake" >
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($svlv['VlvMake_Id'] == $smake['Id'])
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
              <label>Cost<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email" name = "vlvCost" value="<?=$svlv['Cost']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost/Inch<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="cost_inch" placeholder="Password" name="cost_inch" value="<?=$svlv['Cost_inch']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="date" class="form-control"  placeholder="DD / MM / YY" name = "vlvDate" value="<?=$svlv['vlvDate']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Location<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="location" placeholder="Location" name = "location" value="<?=$svlv['Location']?>">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "vlvUpdate(this.id);" id = <?=$svlv['Id']?>>Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->
  </body>
</html>
