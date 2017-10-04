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
	$query = "SELECT * FROM `ct` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditCt = mysqli_query($connection, $query);
	$sCt = mysqli_fetch_assoc($rseditCt);
	$no_of_ct_records = mysqli_num_rows($rseditCt);
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
        <h3>CT - Entry No. <span class="label label-success"><?=$sCt['Id']?></span></h3>
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
					if($sCt['CT_Type_Id'] == $sMasterType['Id'])
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
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "ctmake">
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($sCt['CT_Make_Id'] == $smake['Id'])
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
              <label>Date <span class="mandatory">*</span></label>
              <input type="date" class="form-control" id="ctdate" placeholder="DD / MM / YY" name = "ctdate" value="<?=$sCt['CT_Quote_Date']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Water flow <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Water flow" name = "water_flow" value="<?=$sCt['Water_Flow']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Range <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Range" placeholder="Range" name = "Range"value="<?=$sCt['CT_Range']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Approach <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Approach"name = "Approach" value="<?=$sCt['Approach']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Cost" placeholder="Cost" name= "ct_Cost" value="<?=$sCt['CT_Cost']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost (Rs/m3/hr)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specific Cost (Rs/m3/hr)" name = "Specific_Cost" value="<?=$sCt['Specific_Cost']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost (Rs/flow/approach and range)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="SpecificCost" placeholder="Specific Cost (Rs/flow/approach and range)" name = "Specific_Cost_RS" value="<?=$sCt['Specific_Cost_Flow']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="ctFile" placeholder="Password" name = "ctFile" value="<?=$sCt['CT_file_location']?>">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "update_ct(this.id);" id="<?=$sCt['Id']?>">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->
  </body>
</html>
