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
	$query = "SELECT * FROM `ppg` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditppg = mysqli_query($connection,$query);
	$sppg = mysqli_fetch_assoc($rseditppg);
	$no_of_ppg_records = mysqli_num_rows($rseditppg);
}	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
	
	?>


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainPPG">
      <div class="col-md-12">
        <h3>PPG - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">
            <div class="form-group col-md-6 ">
              <label>Pipe Standard<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Pipe Standard" name = "pipe" value="<?=$sppg['Pipe_Standard']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "pipe_make">
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($sppg['PPGMake_Id'] == $smake['Id'])
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
              <label>Quote from<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Quote from" name = "quote" value="<?=$sppg['Quote_from']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Size" name = "size" value="<?=$sppg['Size_Pipe']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Thk<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Thk" name = "Thk" value="<?=$sppg['Thk']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Schedule<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="schedule" placeholder="schedule" name = "schedule" value="<?=$sppg['Schedule']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Weight per mtr<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="weight per mtr" name = "weight" value="<?=$sppg['Weight_per_mtr']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>cost (Rs/ mtr)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cost (Rs/ mtr)" name = "cost_mtr" value="<?=$sppg['Cost_mtr']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>cost basis<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cost basis" name = "cost_basis" value="<?=$sppg['Cost_basis']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="date" class="form-control"  placeholder="DD / MM / YY" name = "quote_date" value="<?=$sppg['Date_of_quote']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost Rs / inch Dia<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specific Cost Rs / inch Dia" name = "cost_inch"value="<?=$sppg['Specific_Cost_inch']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>specific cost Rs / Kg<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="specific cost Rs / Kg" name = "cost_rs" value="<?=$sppg['Specific_Cost_mtr']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="Ppg_file" placeholder="Password" name = "Ppg_file" value="<?=$sppg['File_Ppg']?>">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "ppgUpdate(this.id);" id="<?=$sppg['Id']?>")>Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!--  -->
  </body>
</html>
