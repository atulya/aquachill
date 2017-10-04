<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
$page = $_SERVER['PHP_SELF'];
$sec = "30";
?>

 <meta charset="UTF-8" http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

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
 
 $sql = ' SELECT  vl.Id AS Id, MI.Description AS item,Pressure_rating,mk.Description AS maker,Size_NB,Size_Inch,Specifications,VlvMake_Id,Cost,Cost_inch,vlvDate,Location 
          FROM vlv AS vl INNER JOIN master_item AS MI ON vl.VlvItem_Id = MI.Id 
						INNER JOIN master_make AS mk ON vl.VlvMake_Id = mk.Id ';
 
 //$sql = 'SELECT * FROM oom';
$rsVlv = mysqli_query($connection, $sql);
$no_of_vlv_records = mysqli_num_rows($rsVlv);

	
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
        <h3>VLV - Entry No. <span class="label label-success"><?=$no_of_vlv_records?></span></h3>
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
				?>
						<option value="<?=$sMasterItem['Id']?>~<?=$sMasterItem['Description']?>"><?=$sMasterItem['Description']?></option>
				<?php
				}
				?>				
				</select>

            </div>
            <div class="form-group col-md-6 ">
              <label>Pressure rating <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Pressure rating" name = "Pressure_rate">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size (NB)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Size ( NB)" name = "size_NB">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size (inch)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Size (inch)" name = "size_inch">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specifications<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specifications" name = "Specifications">
            </div>
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "vlvmake">
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
              <label>Cost<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email" name = "vlvCost">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost/Inch<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="cost_inch" placeholder="Password" name="cost_inch">
            </div>
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="date" class="form-control"  placeholder="DD / MM / YY" name = "vlvDate">
            </div>
            <div class="form-group col-md-6 ">
              <label>Location<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="location" placeholder="Location" name = "location">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_vlv();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>

	<div class="col-md-12 main" id= "updatevlv">
      <h3>VLV Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Item Name</strong>
              </td>
              <td class="small"><strong>Pressure rating</strong>
              </td>
              <td class="small"><strong>Size (NB)</strong>
              </td>
              <td class="small"><strong>Size (inch)</strong>
              </td>
              <td class="small"><strong>Specifications</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Cost</strong>
			  </td>
              <td class="small"><strong>Cost/Inch</strong>
              </td>
              <td class="small"><strong>Date</strong>
              </td>
              <td class="small"><strong>Location</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
		  <?php
				for($i=0;$i<$no_of_vlv_records;$i++)
				{
					$sVlv = mysqli_fetch_assoc($rsVlv);
			  ?>
				<tr>
				  <td class="small"><?=$sVlv['Id']?></td>
				  <td class="small"><?=$sVlv['item']?></td>
				  <td class="small"><?=$sVlv['Pressure_rating']?> </td>
				 
				  <td class="small"><?=$sVlv['Size_NB']?></td>
				  <td class="small"><?=$sVlv['Size_Inch']?></td>
				  <td class="small"><?=$sVlv['Specifications']?></td>
				  <td class="small"><?=$sVlv['VlvMake_Id']?></td>
				  <td class="small"><?=$sVlv['Cost']?></td>
				  <td class="small"><?=$sVlv['Cost_inch']?></td>
				  <td class="small"><?=$sVlv['vlvDate']?></td>
				  <td class="small"><?=$sVlv['Location']?></td>
				  <td class="small"><a onclick="edit_vlv(this.id);" id="<?=$sVlv['Id']?>">Edit</a></td>
				  <td class="small"><a onclick="delete_recordVLV(this.id);" id="<?=$sVlv['Id']?>">Delete</a></td>
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
