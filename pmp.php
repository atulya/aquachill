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
        <h3>PMP - Entry No. <span class="label label-success">#2</span></h3>
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
				?>
						<option value="<?=$sMasterItem['Id']?>~<?=$sMasterItem['Description']?>"><?=$sMasterItem['Description']?></option>
				<?php
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
				?>
						<option value="<?=$sMasterType['Id']?>~<?=$sMasterType['Description']?>"><?=$sMasterType['Description']?></option>
				<?php
				}
				?>				
 			</select>
			 </div>
            <div class="form-group col-md-6 ">
              <label>Quote from <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Quote from" name = "pmpQuote">
            </div>
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "pmpmake">
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
              <label>Model<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Model"name = "pmpModel">
            </div>
            <div class="form-group col-md-6 ">
              <label>Flow<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Flow" name = "pmpFlow">
            </div>
            <div class="form-group col-md-6 ">
              <label>Head <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Head" name = "pmpHead">
            </div>
            <div class="form-group col-md-6 ">
              <label>Motor type & Rating(KW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="motor" placeholder="Motor type & Rating(KW)" name = "pmpMotor">
            </div>
            <div class="form-group col-md-6 ">
              <label>Seal<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Seal" name = "pmpSeal">
            </div>
            <div class="form-group col-md-6 ">
              <label>MOC<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email" name = "pmpMOC">
            </div>
            <div class="form-group col-md-6 ">
              <label>Unit Price<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="unit_price" placeholder="Unit Price" name = "unit_price">
            </div>

            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="pmpfile" placeholder="File Location" name = "pmpfile">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_pmp();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
<?php
 $sql = ' SELECT  pm.Id AS Id, MI.Description AS item,mt.Description AS Type,Quote_From,mk.Description AS maker,Pmp_Model,
			Flow, Head, Motor_Type_rating, Seal, MOC, Unit_Price, file_location 
			FROM pmp AS pm INNER JOIN master_item AS MI ON pm.Pmp_Item_Id = MI.Id 
			INNER JOIN master_make AS mk ON pm.Pmp_Make_Id = mk.Id 
			INNER JOIN master_type AS mt ON pm.Pmp_Type_Id = mt.Id';
 //$sql = 'SELECT * FROM oom';
 $rsPpm = mysqli_query($connection, $sql);
 $no_of_pmp_records = mysqli_num_rows($rsPpm);
?>
 
	<div class="col-md-12 main" id = "updatepmp">
      <h3>PMP Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Item Name</strong>
              </td>
              <td class="small"><strong>Type</strong>
              </td>
              <td class="small"><strong>Quote from</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Model</strong>
              </td>
              <td class="small"><strong>Flow</strong>
              </td>
              <td class="small"><strong>Head</strong>
              <td class="small"><strong>Motor type & Rating(KW)</strong>
              </td>
              <td class="small"><strong>Seal</strong>
              </td>
              <td class="small"><strong>MOC</strong>
              </td>
              <td class="small"><strong>Unit Price</strong>
              </td>
              <td class="small"><strong>File location</strong>
              </td>

              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
  		  <?php
				for($i=0;$i<$no_of_pmp_records;$i++)
				{
					$sPpm = mysqli_fetch_assoc($rsPpm);
				?>
           <tr>
              <td class="small"><?=$sPpm['Id']?></td>
              <td class="small"><?=$sPpm['item']?></td>
              <td class="small"><?=$sPpm['Type']?></td>
              <td class="small"><?=$sPpm['Quote_From']?></td>
              <td class="small"><?=$sPpm['maker']?></td>
              <td class="small"><?=$sPpm['Pmp_Model']?></td>
              <td class="small"><?=$sPpm['Flow']?></td>
              <td class="small"><?=$sPpm['Head']?></td>
              <td class="small"><?=$sPpm['Motor_Type_rating']?></td>
              <td class="small"><?=$sPpm['Seal']?></td>
              <td class="small"><?=$sPpm['MOC']?></td>
              <td class="small"><?=$sPpm['Unit_Price']?></td>
              <td class="small"><a href="<?=$sPpm['file_location'] ?>" target="_blank">View File</a></td>
              <td class="small"><a onclick="edit_pmp(this.id);" id="<?=$sPpm['Id']?>">Edit</a></td>
              <td class="small"><a onclick="delete_recordPMP(this.id);" id="<?=$sPpm['Id']?>">Delete</a></td>
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
