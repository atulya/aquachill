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
				?>
						<option value="<?=$sMasterItem['Id']?>~<?=$sMasterItem['Description']?>"><?=$sMasterItem['Description']?></option>
				<?php
				}
				?>				
 			</select>
			 </div>

            <div class="form-group col-md-6 ">
              <label>Refrigerant<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Refrigerant" name = "Refrigerant" placeholder="Refrigerant">
            </div>
            <div class="form-group col-md-6">
			 <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "Make_Id">
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
              <label>Capacity <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="ChillerModel" name="ChillerModel" placeholder="Capacity">
            </div>
            <div class="form-group col-md-6 ">
              <label>Model<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Model" name= "Model" >
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost (Rs)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Cost_R" placeholder="Cost (Rs)" name = "Cost_R">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="FileOOM" placeholder="File Location" name = "FileOOM">
            </div>

            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_oom();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
<?php
 $sql = ' SELECT  om.Id AS Id, MI.Description AS item,Refrigerant,mk.Description AS maker,Capacity,Model,Cost,OOM_File  
FROM oom AS om INNER JOIN master_item AS MI ON om.item_Id = MI.Id 
			INNER JOIN master_make AS mk ON om.Make_Id = mk.Id ';
 
 //$sql = 'SELECT * FROM oom';
 $rsOom = mysqli_query($connection, $sql);
 $no_of_oom_records = mysqli_num_rows($rsOom);
?>

      <div class="col-md-12 main" id = "update">
      <h3>OOM Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Item Name</strong>
              </td>
              <td class="small"><strong>Refrigerant</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Capacity (TR)</strong>
              </td>
              <td class="small"><strong>Model</strong>
              </td>
              <td class="small"><strong>Cost (Rs)</strong>
              </td>
              <td class="small"><strong>File location</strong>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
 		  <?php
				for($i=0;$i<$no_of_oom_records;$i++)
				{
					$sOom = mysqli_fetch_assoc($rsOom);
				?>

			<tr>
              <td class="small"><?=$sOom['Id']?></td>
              <td class="small"><?=$sOom['item']?></td>
              <td class="small"><?=$sOom["Refrigerant"]?></td>
              <td class="small"><?=$sOom['maker']?></td>
              <td class="small"><?=$sOom['Capacity']?></td>
              <td class="small"><?=$sOom['Model']?></td>
              <td class="small"><?=$sOom['Cost']?></td>
              <td class="small"><a href="<?=$sOom['OOM_File'] ?>" target="_blank">View File</a></td>
              <td class="small"><a onclick="edit_oom(this.id);" id="<?=$sOom['Id']?>">Edit</a></td>
              <td class="small"><a onclick="delete_recordOOM(this.id);" id="<?=$sOom['Id']?>">Delete</a></td>
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
