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
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainCt">
      <div class="col-md-12">
        <h3>CT - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6">
			 <label>Type <span class="mandatory">*</span></label>
				<select class ="form-control" name = "ctType">
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
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "ctmake">
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
              <label>Date <span class="mandatory">*</span></label>
              <input type="date" class="form-control" id="ctdate" placeholder="DD / MM / YY" name = "ctdate">
            </div>
            <div class="form-group col-md-6 ">
              <label>Water flow <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Water flow" name = "water_flow">
            </div>
            <div class="form-group col-md-6 ">
              <label>Range <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Range" placeholder="Range" name = "Range">
            </div>
            <div class="form-group col-md-6 ">
              <label>Approach <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Approach"name = "Approach">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Cost" placeholder="Cost" name= "ct_Cost">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost (Rs/m3/hr)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specific Cost (Rs/m3/hr)" name = "Specific_Cost">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost (Rs/flow/approach and range)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="SpecificCost" placeholder="Specific Cost (Rs/flow/approach and range)" name = "Specific_Cost_RS">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="ctFile" placeholder="Password" name = "ctFile">
            </div>

            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_ct();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
<?php
 $sql = 'SELECT c.Id AS Id, mk.Description AS make, mt.Description AS Type, CT_Quote_Date, Water_Flow, CT_Range, Approach, CT_Cost, Specific_Cost, Specific_Cost_Flow, CT_file_location 
			FROM ct AS c INNER JOIN master_make AS mk ON c.CT_Make_Id = mk.Id 
						INNER JOIN master_type AS mt ON c.CT_Type_Id = mt.Id';
 //$sql = 'SELECT * FROM oom';
 $rsCt = mysqli_query($connection, $sql);
 $no_of_ct_records = mysqli_num_rows($rsCt);
?>
      <div class="col-md-12 main" id = "updatect"> 
      <h3>CT Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Type</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>date of quote</strong>
              </td>
              <td class="small"><strong>Water flow</strong>
              </td>
              <td class="small"><strong>Range</strong>
              </td>
              <td class="small"><strong>Approach</strong>
              </td>
              <td class="small"><strong>Cost</strong>
              <td class="small"><strong>Specific Cost (Rs/m3/hr)</strong>
              </td>
              <td class="small"><strong>Specific Cost (Rs/flow/approach and range)</strong>
              </td>
              <td class="small"><strong>File Location</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
  		  <?php
				for($i=0;$i<$no_of_ct_records;$i++)
				{
					$sCt = mysqli_fetch_assoc($rsCt);
				?>
            <tr>
              <td class="small"><?=$sCt['Id']?></td>
              <td class="small"><?=$sCt['Type']?></td>
              <td class="small"><?=$sCt['make']?></td>
              <td class="small"><?=$sCt['CT_Quote_Date']?></td>
              <td class="small"><?=$sCt['Water_Flow']?></td>
              <td class="small"><?=$sCt['CT_Range']?></td>
              <td class="small"><?=$sCt['Approach']?></td>
              <td class="small"><?=$sCt['CT_Cost']?></td>
              <td class="small"><?=$sCt['Specific_Cost']?></td>
              <td class="small"><?=$sCt['Specific_Cost_Flow']?></td>
              <td class="small"><a href="<?=$sCt['CT_file_location'] ?>" target="_blank">View File</a></td>
              <td class="small"><a onclick="edit_ct(this.id);" id="<?=$sCt['Id']?>">Edit</a></td>
              <td class="small"><a onclick="delete_recordCT(this.id);" id="<?=$sCt['Id']?>">Delete</a></td>
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
