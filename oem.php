<!DOCTYPE html>
<html lang="en">
  <head>
 <?php
$page = $_SERVER['PHP_SELF'];
$sec = "30";
?>

 <meta charset="UTF-8" http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

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
        <h3>OME - Entry No. <span class="label label-success">#2</span></h3>
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
              <input type="date" class="form-control"  name="Oem_Date" placeholder="DD / MM / YY">
            </div>
            <div class="form-group col-md-6">
			 <label>Type <span class="mandatory">*</span></label>
				<select class ="form-control" name = "TypeId">
				<option value="0">(Type)</option>
				<?php
 				for($j=0;$j<$no_of_mastertype_records;$j++)
				{
					$sMasterType = mysqli_fetch_assoc($rsMasterType);
				?>
						<option value="<?=$sMasterType['Id']?>~<?=$sMasterType['Description']?>"><?=$sMasterType['Description']?></option>
				<?php
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
				?>
				  <option value="<?=$smake['Id']?>~<?=$smake['Description']?>"><?=$smake['Description']?></option>
				<?php
				}
				?>
				
				</select>
			 </div>
            <div class="form-group col-md-6 ">
              <label>Capacity (TR) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Capacity" id="capacity" name="capacity">
            </div>
            <div class="form-group col-md-6 ">
              <label>Chiller Model <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Chiller_Model" name = "Chiller_Model" placeholder="Chiller Model">
            </div>
            <div class="form-group col-md-6 ">
              <label>Chilled water supply temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Chilled water supply temp (Deg C)"  id="Chiller_temp" name = "Chiller_temp">
            </div>
            <div class="form-group col-md-6 ">
              <label>Condenser water temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Condenser temp" name = "Condenser_temp" id = "Condenser_temp">
            </div>
            <div class="form-group col-md-6 ">
              <label>Condenser water flow (m3/hr) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Condenser water flow (m3/hr)" name = "Condenser_waterF" id = "Condenser_waterF">
            </div>
            <div class="form-group col-md-6 ">
              <label>Ambient Sesign Temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Ambient Sesign Temp (Deg C)" name = "ambient_temp" id = "ambient_temp">
            </div>
            <div class="form-group col-md-6 ">
              <label>Compressor power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Compressor power" name = "Compressor_power" id = "Compressor_power ">
            </div>
            <div class="form-group col-md-6 ">
              <label>Fan power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Fan power (kW)" name = "fan_power" id = "fan_power">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic Price (Lakhs Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control"  placeholder="Basic Price (Lakhs Rs)" name = "basic_price" id = "basic_price">
            </div>
            <div class="form-group col-md-6 ">
              <label>Price Including Import Duty less of CVD (Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Price Including Import Duty less of CVD (Rs)" name = "price_CVD" id = "price_CVD">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control"  placeholder="File Location" id = "file_location" name = "file_location">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost per TR (Rs/TR) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Cost per TR (Rs/TR)" name = "cost" id = "cost">
            </div>
            <div class="form-group col-md-6 ">
              <label>Total Power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Total Power (kW)" name = "total_power" id= "total_power">
            </div>
            <div class="form-group col-md-6 ">
              <label>kw/tr <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="kw/tr" name = "Kw_tr" id= "Kw_tr">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_oem();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>

<?php
      //  $username = $_POST['username'];
       // $password = $_POST['password'];
	   
$sql = ' SELECT  o.Id AS Id, OemDate,MT.Description AS TI,mk.Description AS maker,Capacity,Chiller_Model,Chilled_water_supply_temp,Condenser_water_temp,condenser_water_flow,ambient_design_temp,compressor_power,fan_power,basic_price_Rs,price_cvd,file_location,cost_per_tr,total_power,kw_tr 
FROM oem AS o INNER JOIN master_type AS MT ON o.Type_Id = MT.Id 
			  INNER JOIN master_make AS mk ON o.Make_Id = mk.Id ';
$rsOem = mysqli_query($connection, $sql);
$no_of_oem_records = mysqli_num_rows($rsOem);

 	  ?>
      <div class="col-md-12 main" id = "updateoem">
      <h3>OME Entry List</h3>
      <div class="table-responsive ">
        <table class="table table-bordered">
          <thead>
			   <tr>
				  <td class="small"><strong>Sr.No.</strong>
				  </td>
				  <td class="small"><strong>Date</strong>
				  </td>
				  <td class="small"><strong>Type</strong>
				  </td>
				  <td class="small"><strong>Make</strong>
				  </td>
				  <td class="small"><strong>Capacity (TR)</strong>
				  </td>
				  <td class="small"><strong>Chiller Model</strong>
				  </td>
				  <td class="small"><strong>chilled water supply temp (Deg C)</strong>
				  </td>
				  <td class="small"><strong>Condenser water temp (Deg C)</strong>
				  <td class="small"><strong>Condenser water flow (m3/hr)</strong>
				  </td>
				  <td class="small"><strong>ambient design temp (Deg C)</strong>
				  </td>
				  <td class="small"><strong>compressor power (kW)</strong>
				  </td>
				  <td class="small"><strong>fan power (kW)</strong>
				  </td>
				  <td class="small"><strong>Basic Price (Lakhs Rs)</strong>
				  </td>
				  <td class="small"><strong>Price Including Import Duty
				  less of CVD (Rs)</strong></td>
				  <td class="small"><strong>File Location</strong>
				  </td>
				  <td class="small"><strong>Cost per TR (Rs/TR)</strong>
				  </td>
				  <td class="small"><strong>Total Power (kW)</strong>
				  </td>
				  <td class="small"><strong>kW / TR</strong>
				  </td>
				  <td class="small"><strong>Edit</strong></td>
				  <td class="small"><strong>Delete</strong></td>
				</tr>
          </thead>
          <tbody>
		  <?php
				for($i=0;$i<$no_of_oem_records;$i++)
				{
					$sOem = mysqli_fetch_assoc($rsOem);
			  ?>
            <tr>
              <td class="small"><?=$sOem['Id']?></td>
              <td class="small"><?=$sOem['OemDate']?></td>
              <td class="small"><?=$sOem['TI']?> </td>
              <td class="small"><?=$sOem['maker']?></td>
              <td class="small"><?=$sOem['Capacity']?></td>
              <td class="small"><?=$sOem['Chiller_Model']?></td>
              <td class="small"><?=$sOem['Chilled_water_supply_temp']?></td>
			  <td class="small"><?=$sOem['Condenser_water_temp']?></td>             
			  <td class="small"><?=$sOem['condenser_water_flow']?></td>
              <td class="small"><?=$sOem['ambient_design_temp']?></td>
              <td class="small"><?=$sOem['compressor_power']?></td>
              <td class="small"><?=$sOem['fan_power']?></td>
              <td class="small"><?=$sOem['basic_price_Rs']?></td>
              <td class="small"><?=$sOem['price_cvd']?></td>
              <td class="small"><a href="<?=$sOem['file_location'] ?>" target="_blank"> View File</a></td>
              <td class="small"><?=$sOem['cost_per_tr']?></td>
              <td class="small"><?=$sOem['total_power']?></td>
              <td class="small"><?=$sOem['kw_tr']?></td>
              <td class="small"><a onclick="edit_oem(this.id);" id="<?=$sOem['Id']?>">Edit</a></td>
              <td class="small"><a onclick="delete_recordOEM(this.id);" id="<?=$sOem['Id']?>">Delete</a></td>
            </tr>
			<?php
				}
				?>
				</tbody>
        </table>
      </div>
    </div>
    </div>
    <?php include 'include/footer.php'; ?>
    <!--  -->
  </body>
</html>
