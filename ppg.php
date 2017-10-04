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
	if (!$select_db)
	{
		die("Database Selection Failed" . mysqli_error($connection));
	}
	if(!$connection)
	{
		die('Could not connect: ' . mysqli_error());
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
              <input type="text" class="form-control" placeholder="Pipe Standard" name = "pipe">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "pipe_make">
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
              <label>Quote from<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Quote from" name = "quote">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Size" name = "size">
            </div>
            <div class="form-group col-md-6 ">
              <label>Thk<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Thk" name = "Thk">
            </div>
            <div class="form-group col-md-6 ">
              <label>Schedule<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="schedule" name = "schedule">
            </div>
            <div class="form-group col-md-6 ">
              <label>Weight per mtr<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="weight per mtr" name = "weight">
            </div>
            <div class="form-group col-md-6 ">
              <label>cost (Rs/ mtr)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cost (Rs/ mtr)" name = "cost_mtr">
            </div>
            <div class="form-group col-md-6 ">
              <label>cost basis<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cost basis" name = "cost_basis">
            </div>
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="date" class="form-control"  placeholder="DD / MM / YY" name = "quote_date">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost Rs / inch Dia<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specific Cost Rs / inch Dia" name = "cost_inch">
            </div>
            <div class="form-group col-md-6 ">
              <label>specific cost Rs / Kg<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="specific cost Rs / Kg" name = "cost_rs">
            </div>

            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="Ppg_file" placeholder="Password" name = "Ppg_file">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_ppg();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
 <?php
 $sql = ' SELECT  pg.Id AS Id,Pipe_Standard, mk.Description AS PpgMake, Quote_from, Size_Pipe, Thk, 
 Schedule, Weight_per_mtr, Cost_mtr, Cost_basis, Date_of_quote, Specific_Cost_inch, Specific_Cost_mtr,file_Ppg 
FROM ppg AS pg INNER JOIN master_make AS mk ON pg.PPGMake_Id = mk.Id '; 
			
 
 //$sql = 'SELECT * FROM oom';
 $rsppg = mysqli_query($connection, $sql);
 $no_of_ppg_records = mysqli_num_rows($rsppg);
?>

	<div class="col-md-12 main" id= "updateppg">
      <h3>PPG Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Pipe Standard</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Quote from</strong>
              </td>
              <td class="small"><strong>Size</strong>
              </td>
              <td class="small"><strong>Thk</strong>
              </td>
              <td class="small"><strong>Schedule</strong>
              </td>
              <td class="small"><strong>weight per mtr</strong>
              <td class="small"><strong>cost (Rs/ mtr)</strong>
              </td>
              <td class="small"><strong>cost basis</strong>
              </td>
              <td class="small"><strong>date of quote</strong>
              </td>
              <td class="small"><strong>Specific Cost Rs / inch Dia</strong>
              </td>
              <td class="small"><strong>specific cost Rs / Kg</strong>
              </td>
              <td class="small"><strong>file location</strong></td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
  		  <?php
				for($i=0;$i<$no_of_ppg_records;$i++)
				{
					$sppg = mysqli_fetch_assoc($rsppg);
				?>

				<tr>
				  <td class="small"><?=$sppg['Id']?></td>
				  <td class="small"><?=$sppg['Pipe_Standard']?></td>
				  <td class="small"><?=$sppg['PpgMake']?></td>
				  <td class="small"><?=$sppg['Quote_from']?></td>
				  <td class="small"><?=$sppg['Size_Pipe']?></td>
				  <td class="small"><?=$sppg['Thk']?></td>
				  <td class="small"><?=$sppg['Schedule']?></td>
				  <td class="small"><?=$sppg['Weight_per_mtr']?></td>
				  <td class="small"><?=$sppg['Cost_mtr']?></td>
				  <td class="small"><?=$sppg['Cost_basis']?></td>
				  <td class="small"><?=$sppg['Date_of_quote']?></td>
				  <td class="small"><?=$sppg['Specific_Cost_inch']?></td>
				  <td class="small"><?=$sppg['Specific_Cost_mtr']?></td>
				  <td class="small"><a href="<?=$sppg['File_Ppg']?>" target="_blank">View File</a></td>
				  <td class="small"><a onclick="edit_ppg(this.id);" id="<?=$sppg['Id']?>">Edit</a></td>
				  <td class="small"><a onclick="delete_recordPPG(this.id);" id="<?=$sppg['Id']?>">Delete</a></td>
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
