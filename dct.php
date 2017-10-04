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

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "MainDct">
      <div class="col-md-12">
        <h3>DCT - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6 ">
              <label>Gauge <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Gauge" name= "Gauge">
            </div>
            <div class="form-group col-md-6 ">
              <label>Thickness <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Thickness" placeholder="Thickness" name = "Thickness">
            </div>
            <div class="form-group col-md-6 ">
              <label>Flange Type<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Flange Type" name = "Flange">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic Rate   <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Basic" placeholder="Basic Rate" name = "Basic_Rate">
            </div>
            <div class="form-group col-md-6 ">
              <label>New Basic Rate <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="New Basic Rate" name = "New_BasicRate">
            </div>
            <div class="form-group col-md-6 ">
              <label>Discount<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Discount" placeholder="Discount" name = "Discount">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic after Discount <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Basic after Discount" name = "BasicDiscount">
            </div>
            <div class="form-group col-md-6 ">
              <label>Excise <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Excise" placeholder="Excise" name = "Excise">
            </div>
            <div class="form-group col-md-6 ">
              <label>Transportation <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Transportation" placeholder="Transportation" name = "Transportation">
            </div>
            <div class="form-group col-md-6 ">
              <label>Sealant gasket <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Sealant gasket" name = "Sealant_gasket">
            </div>
            <div class="form-group col-md-6 ">
              <label>Support <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Support" placeholder="Support" name = "Support">
            </div>
            <div class="form-group col-md-6 ">
              <label>Wastage <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Wastage" name = "Wastage">
            </div>

            <div class="form-group col-md-6 ">
              <label>Total <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Total" name = "Total">
            </div>
            <div class="form-group col-md-6 ">
              <label>VAT <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="VAT" name = "VAT">
            </div>
            <div class="form-group col-md-6 ">
              <label>Grand Total<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Grand Total" name = "Grand_Total">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_dct();">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
 <?php
 $sql = 'SELECT * FROM dct';
 $rsdct = mysqli_query($connection, $sql);
 $no_of_dct_records = mysqli_num_rows($rsdct);
?>
     <div class="col-md-12 main" id = "updateDct">
      <h3>DCT Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Gauge</strong>
              </td>
              <td class="small"><strong>Thickness</strong>
              </td>
              <td class="small"><strong>Flange Type</strong>
              </td>
              <td class="small"><strong>Basic Rate</strong>
              </td>
              <td class="small"><strong>New Basic Rate</strong>
              </td>
              <td class="small"><strong>Discount</strong>
              </td>
              <td class="small"><strong>Basic after Discount</strong>
              <td class="small"><strong>Excise</strong>
              </td>
              <td class="small"><strong>Transportation</strong>
              </td>
              <td class="small"><strong>Sealant gasket</strong>
              </td>
              <td class="small"><strong>Support</strong>
              </td>
              <td class="small"><strong>Wastage</strong>
              </td>
              <td class="small"><strong>Total</strong></td>
              <td class="small"><strong>VAT</strong>
              </td>
              <td class="small"><strong>Grand Total</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
  		  <?php
				for($i=0;$i<$no_of_dct_records;$i++)
				{
					$sdct = mysqli_fetch_assoc($rsdct);
				?>
				<tr>
              <td class="small"><?=$sdct['Id']?></td>
              <td class="small"><?=$sdct['Gauge']?></td>
              <td class="small"><?=$sdct['Thickness']?></td>
              <td class="small"><?=$sdct['FlangeType']?></td>
              <td class="small"><?=$sdct['Basic_Rate']?></td>
              <td class="small"><?=$sdct['New_BasicRate']?></td>
              <td class="small"><?=$sdct['Discount']?></td>
              <td class="small"><?=$sdct['Basic_Discount']?></td>
              <td class="small"><?=$sdct['Excise']?></td>
              <td class="small"><?=$sdct['Transportation']?></td>
              <td class="small"><?=$sdct['Sealant_Gasket']?></td>
              <td class="small"><?=$sdct['Support']?></td>
              <td class="small"><?=$sdct['Wastage']?></td>
              <td class="small"><?=$sdct['Total']?></td>
              <td class="small"><?=$sdct['VAT']?></td>
              <td class="small"><?=$sdct['Grand_Total']?></td>
              <td class="small"><a onclick="edit_dct(this.id);" id="<?=$sdct['Id']?>">Edit</a></td>
              <td class="small"><a onclick="delete_recordDCT(this.id);" id="<?=$sdct['Id']?>">Delete</a></td>
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
