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
	$query = "SELECT * FROM `ahu` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditAhu = mysqli_query($connection, $query);
	$sAhu = mysqli_fetch_assoc($rseditAhu);
	$no_of_Ahu_records = mysqli_num_rows($rseditAhu);
}

	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="col-md-12">
        <h3>AHU - Entry No. <span class="label label-success"><?=$sAhu['Id']?></span></h3>
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
              <input type="text" class="form-control" placeholder="Description" name = "AhuDescription" value = "<?=$sAhu['Ahu_Description']?>">
            </div>
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "Ahumake">
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($sAhu['ahu_Make_Id'] == $smake['Id'])
					{
					?>
				  <option value="<?=$smake['Id']?>~<?=$smake['Description']?>"selected><?=$smake['Description']?></option>
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
              <label>Air Flowrate (CFM) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Air Flowrate" name = "AirFlowrate" value = "<?=$sAhu['Air_Flowrate']?>"> 
            </div>
            <div class="form-group col-md-6 ">
              <label>Static Pressure (MMWC) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Pressure" placeholder="Static Pressure (MMWC)" name = "Pressure" value = "<?=$sAhu['Static_Pressure']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Type of Fan<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Type of Fan" name = "TypeFan" value = "<?=$sAhu['Type_of_Fan']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Filter <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Filter" placeholder="Filter" name = "Filter"value = "<?=$sAhu['Filter']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>PUF Panel Thk <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="PUF Panel Thk" name = "PUFThk" value = "<?=$sAhu['PUF_Panel_Thk']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Inner Skin <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="InnerSkin" placeholder="Inner Skin" name = "InnerSkin" value = "<?=$sAhu['Inner_Skin']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Outer Skin <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="OuterSkin" placeholder="Outer Skin" name = "OuterSkin" value = "<?=$sAhu['Outer_Skin']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Number of rows Cooling coil <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Number of rows Cooling coil" name = "Cooling" value = "<?=$sAhu['Number_Of_Coil']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Number of rows of reheat Coil <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="reheat" placeholder="Number of rows of reheat Coil" name= "reheat" value = "<?=$sAhu['Number_Reheat_Coil']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Heater Section KW <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Heater Section KW" name = "Section" value = "<?=$sAhu['Heater_Section']?>">
            </div>

            <div class="form-group col-md-6 ">
              <label>Humidifier section <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Humidifier section" name = "Humidifier"value = "<?=$sAhu['Humidifier_Section']?>">
            </div>
            <div class="form-group col-md-6">
              <label>Motor kW <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Motor kW" name = "MotorKw" value = "<?=$sAhu['Motor_KW']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost (Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Cost (Rs)" name = "Cost"value = "<?=$sAhu['Cost_Rs']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label> Specific Cost RS per CFM <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder=" Specific Cost RS per CFM" name = "SpecificCost" value = "<?=$sAhu['Specific_Cost_CFM']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="AhuFile" placeholder="Password" id= "AhuFile" value = "<?=$sAhu['File_Location']?>">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "ahuUpdate(this.id);" id="<?=$sAhu['Id']?>">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!--  -->
  </body>
</html>
