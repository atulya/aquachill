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

	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainAhu">
      <div class="col-md-12">
        <h3>AHU - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6 ">
              <label>Description <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Description" name = "AhuDescription">
            </div>
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "Ahumake">
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
              <label>Air Flowrate (CFM) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Air Flowrate" name = "AirFlowrate">
            </div>
            <div class="form-group col-md-6 ">
              <label>Static Pressure (MMWC) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Pressure" placeholder="Static Pressure (MMWC)" name = "Pressure">
            </div>
            <div class="form-group col-md-6 ">
              <label>Type of Fan<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Type of Fan" name = "TypeFan">
            </div>
            <div class="form-group col-md-6 ">
              <label>Filter <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Filter" placeholder="Filter" name = "Filter">
            </div>
            <div class="form-group col-md-6 ">
              <label>PUF Panel Thk <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="PUF Panel Thk" name = "PUFThk">
            </div>
            <div class="form-group col-md-6 ">
              <label>Inner Skin <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="InnerSkin" placeholder="Inner Skin" name = "InnerSkin">
            </div>
            <div class="form-group col-md-6 ">
              <label>Outer Skin <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="OuterSkin" placeholder="Outer Skin" name = "OuterSkin">
            </div>
            <div class="form-group col-md-6 ">
              <label>Number of rows Cooling coil <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Number of rows Cooling coil" name = "Cooling">
            </div>
            <div class="form-group col-md-6 ">
              <label>Number of rows of reheat Coil <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="reheat" placeholder="Number of rows of reheat Coil" name= "reheat">
            </div>
            <div class="form-group col-md-6 ">
              <label>Heater Section KW <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Heater Section KW" name = "Section">
            </div>

            <div class="form-group col-md-6 ">
              <label>Humidifier section <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Humidifier section" name = "Humidifier">
            </div>
            <div class="form-group col-md-6">
              <label>Motor kW <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Motor kW" name = "MotorKw">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost (Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Cost (Rs)" name = "Cost">
            </div>
            <div class="form-group col-md-6 ">
              <label> Specific Cost RS per CFM <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder=" Specific Cost RS per CFM" name = "SpecificCost">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="AhuFile" placeholder="Password" id= "AhuFile">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_ahu();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
 <?php
 $sql = ' SELECT  A.Id AS Id, Ahu_Description,mk.Description AS make,Air_Flowrate, Static_Pressure, 
		 Type_of_Fan, Filter, PUF_Panel_Thk, Inner_Skin, Outer_Skin, Number_Of_Coil, Number_Reheat_Coil,
		 Heater_Section, Humidifier_Section, Motor_KW, Cost_Rs, Specific_Cost_CFM, File_Location 
		FROM ahu AS A INNER JOIN master_make AS mk ON A.ahu_Make_Id = mk.Id ';

 //$sql = 'SELECT * FROM oom';
 $rsAhu = mysqli_query($connection, $sql);
 $no_of_ahu_records = mysqli_num_rows($rsAhu);
?>
     <div class="col-md-12 main" id = "updateAhu">
      <h3>AHU Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Description</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Air Flowrate (CFM)</strong>
              </td>
              <td class="small"><strong>Static Pressure (MMWC)</strong>
              </td>
              <td class="small"><strong>Type of Fan</strong>
              </td>
              <td class="small"><strong>Filter</strong>
              </td>
              <td class="small"><strong>PUF Panel Thk</strong>
              <td class="small"><strong>Inner Skin</strong>
              </td>
              <td class="small"><strong>Outer Skin</strong>
              </td>
              <td class="small"><strong>Number of rows Cooling coil</strong>
              </td>
              <td class="small"><strong>Number of rows of reheat Coil</strong>
              </td>
              <td class="small"><strong>Heater Section KW</strong>
              </td>
              <td class="small"><strong>Humidifier section</strong></td>
              <td class="small"><strong>Motor kW</strong>
              </td>
              <td class="small"><strong>Cost (Rs)</strong>
              </td>
              <td class="small"><strong> Specific Cost RS per CFM</strong>
              </td>
              <td class="small"><strong>File Location</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
   		  <?php
				for($i=0;$i<$no_of_ahu_records;$i++)
				{
					$sAhu = mysqli_fetch_assoc($rsAhu);
				?>
           <tr>
              <td class="small"><?=$sAhu['Id']?></td>
              <td class="small"><?=$sAhu['Ahu_Description']?></td>
              <td class="small"><?=$sAhu['make']?></td>
              <td class="small"><?=$sAhu['Air_Flowrate']?></td>
              <td class="small"><?=$sAhu['Static_Pressure']?></td>
              <td class="small"><?=$sAhu['Type_of_Fan']?></td>
              <td class="small"><?=$sAhu['Filter']?></td>
              <td class="small"><?=$sAhu['PUF_Panel_Thk']?></td>
              <td class="small"><?=$sAhu['Inner_Skin']?></td>
              <td class="small"><?=$sAhu['Outer_Skin']?></td>
              <td class="small"><?=$sAhu['Number_Of_Coil']?></td>
              <td class="small"><?=$sAhu['Number_Reheat_Coil']?></td>
              <td class="small"><?=$sAhu['Heater_Section']?></td>
              <td class="small"><?=$sAhu['Humidifier_Section']?></td>
              <td class="small"><?=$sAhu['Motor_KW']?></td>
              <td class="small"><?=$sAhu['Cost_Rs']?></td>
              <td class="small"><?=$sAhu['Specific_Cost_CFM']?></td>
              <td class="small"><a href="<?=$sAhu['File_Location']?>" target="_blank">View File</a></td>
              <td class="small"><a onclick="edit_ahu(this.id);" id="<?=$sAhu['Id']?>">Edit</a></td>
              <td class="small"><a onclick="delete_recordAhu(this.id);" id="<?=$sAhu['Id']?>">Delete</a></td>
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
