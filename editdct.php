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
	$query = "SELECT * FROM `dct` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditDct = mysqli_query($connection, $query);
	$sDct = mysqli_fetch_assoc($rseditDct);
	$no_of_dct_records = mysqli_num_rows($rseditDct);
}
	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="col-md-12">
        <h3>DCT - Entry No. <span class="label label-success"><?=$sDct['Id']?></span></h3>
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
              <input type="text" class="form-control" placeholder="Gauge" name= "Gauge" value = "<?=$sDct['Gauge']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Thickness <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Thickness" placeholder="Thickness" name = "Thickness" value = "<?=$sDct['Thickness']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Flange Type<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Flange Type" name = "Flange" value = "<?=$sDct['FlangeType']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic Rate   <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Basic" placeholder="Basic Rate" name = "Basic_Rate" value = "<?=$sDct['Basic_Rate']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>New Basic Rate <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="New Basic Rate" name = "New_BasicRate" value = "<?=$sDct['New_BasicRate']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Discount<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Discount" placeholder="Discount" name = "Discount" value = "<?=$sDct['Discount']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic after Discount <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Basic after Discount" name = "BasicDiscount" value = "<?=$sDct['Basic_Discount']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Excise <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Excise" placeholder="Excise" name = "Excise" value = "<?=$sDct['Excise']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Transportation <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Transportation" placeholder="Transportation" name = "Transportation" value = "<?=$sDct['Transportation']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Sealant gasket <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Sealant gasket" name = "Sealant_gasket" value = "<?=$sDct['Sealant_Gasket']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Support <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="Support" placeholder="Support" name = "Support" value = "<?=$sDct['Support']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Wastage <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Wastage" name = "Wastage" value = "<?=$sDct['Wastage']?>">
            </div>

            <div class="form-group col-md-6 ">
              <label>Total <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Total" name = "Total" value = "<?=$sDct['Total']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>VAT <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="VAT" name = "VAT" value = "<?=$sDct['VAT']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>Grand Total<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Grand Total" name = "Grand_Total" value = "<?=$sDct['Grand_Total']?>">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary" onclick = "dctUpdate(this.id);" id= "<?=$sDct['Id']?>">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->
  </body>
</html>
