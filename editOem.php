<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"> 
    <title>Document</title>
    <?php
	include 'include/assetCss.php'; 
	include 'js.php'; 
	
	?>
  </head>
  <body>
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
	$query = "SELECT * FROM `oem` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditOem = mysqli_query($connection, $query);
	$sOem = mysqli_fetch_assoc($rseditOem);
	$no_of_oem_records = mysqli_num_rows($rseditOem);
}
	
$query = 'SELECT * FROM master_type';
$rsMasterType = mysqli_query($connection, $query);
//echo $sql;
$no_of_mastertype_records = mysqli_num_rows($rsMasterType);
	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
	?>
    <?php include 'include/header.php'; ?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainOEM">
      <div class="col-md-12">
        <h3>OME - Entry No. <span class="label label-success"><?=$no_of_oem_records?></span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">
           <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="date" class="form-control"  name="Oem_Date" placeholder="DD / MM / YY" value="<?=$sOem['OemDate']?>">
            </div>
            <div class="form-group col-md-6">
			 <label>Type <span class="mandatory">*</span></label>
				<select class ="form-control" name = "TypeId">
				<option value="0">(Type)</option>
				<?php
 				for($j=0;$j<$no_of_mastertype_records;$j++)
				{
					$sMasterType = mysqli_fetch_assoc($rsMasterType);
					if($sOem['Type_Id'] == $sMasterType['Id'])
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
            <div class="form-group col-md-6">
			 <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "MakeId">
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($sOem['Make_Id'] == $smake['Id'])
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
              <label>Capacity (TR) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Capacity" id="capacity" name="capacity"  value="<?=$sOem['Capacity']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Chiller Model <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Chiller_Model" name = "Chiller_Model" placeholder="Chiller Model" value="<?=$sOem['Chiller_Model']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Chilled water supply temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Chilled water supply temp (Deg C)"  id="Chiller_temp" name = "Chiller_temp" value="<?=$sOem['Chilled_water_supply_temp']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Condenser water temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Condenser temp" name = "Condenser_temp" id = "Condenser_temp" value="<?=$sOem['Condenser_water_temp']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Condenser water flow (m3/hr) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Condenser water flow (m3/hr)" name = "Condenser_waterF" id = "Condenser_waterF" value="<?=$sOem['condenser_water_flow']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Ambient Sesign Temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Ambient Sesign Temp (Deg C)" name = "ambient_temp" id = "ambient_temp" value="<?=$sOem['ambient_design_temp']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Compressor power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Compressor power" name = "Compressor_power" id = "Compressor_power" value="<?=$sOem['compressor_power']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Fan power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Fan power (kW)" name = "fan_power" id = "fan_power" value="<?=$sOem['fan_power']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic Price (Lakhs Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Basic Price (Lakhs Rs)" name = "basic_price" id = "basic_price" value="<?=$sOem['basic_price_Rs']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Price Including Import Duty less of CVD (Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Price Including Import Duty less of CVD (Rs)" name = "price_CVD" id = "price_CVD" value="<?=$sOem['price_cvd']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control"  placeholder="File Location" id = "file_location" name = "file_location" value="<?=$sOem['file_location']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost per TR (Rs/TR) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Cost per TR (Rs/TR)" name = "cost" id = "cost" value="<?=$sOem['cost_per_tr']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Total Power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Total Power (kW)" name = "total_power" id= "total_power" value="<?=$sOem['total_power']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>kw/tr <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="kw/tr" name = "Kw_tr" id= "Kw_tr" value="<?=$sOem['kw_tr']?>">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "oemUpdate(this.id);" id="<?=$sOem['Id']?>">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php //include 'include/footer.php'; ?>
    <!--  -->
  </body>
</html>
