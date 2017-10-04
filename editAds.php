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
	$query = "SELECT * FROM `ads` WHERE Id='" .$iRecId. "' AND IsDeleted= 0 ";
	$rseditAds = mysqli_query($connection, $query);
	$sAds = mysqli_fetch_assoc($rseditAds);
}
$sqlitem = 'SELECT * FROM master_item';
$rsMasterItem = mysqli_query($connection, $sqlitem);
//echo $sql;
$no_of_masterItem_records = mysqli_num_rows($rsMasterItem);
	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
 

?>
 

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
      <div class="col-md-12">
        <h3>ADS - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6 ">
              <label>Item Name <span class="mandatory">*</span></label>
				<select class ="form-control" name = "AdsItem">
					<option value="0">(Item Name)</option>
				<?php
				for($i=0;$i<$no_of_masterItem_records;$i++)
				{
					$sMasterItem = mysqli_fetch_assoc($rsMasterItem);
					if($sAds['Ads_Item_Id'] == $sMasterItem['Id'])
					{
				?>
				
					<option  value = "<?=$sMasterItem['Id']?>~<?=$sMasterItem['Description']?>" selected><?=$sMasterItem['Description']?></option>
					 <?php
					 }
					 else
					 {
						 
					 ?>
					<option  value = "<?=$sMasterItem['Id']?>~<?=$sMasterItem['Description']?>" ><?=$sMasterItem['Description']?></option>
						 <?php
					 }
					}
					?>
				</select>

            </div>
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "AdsMake">
				<option value="0">(Make)</option>
				<?php
				for($i=0;$i<$no_of_make_records;$i++)
				{
					$smake = mysqli_fetch_assoc($rsmake);
					if($sAds['Ads_Make_Id'] == $smake['Id'])
					{
				?>
					<option  value="<?=$smake['Id']?>~<?=$smake['Description']?>" selected><?=$smake['Description']?></option>
					 <?php
					 }
					 else
					 {
					 ?>
					<option  value="<?=$smake['Id']?>~<?=$smake['Description']?>" ><?=$smake['Description']?></option>				<?php
					 }
				}
				?>
				
				</select>
             </div>
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="Date" class="form-control"  placeholder="DD / MM / YY" name = "AdsDate" value="<?=$sAds['Ads_Date']?>">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
				<?php
					//echo '<a src="upload/'.base64_encode($sAds['Ads_File']).'"> </a>';
					$adsfile = $sAds['Ads_File'];
				?>
              <input type="file" class="form-control" id="AdsFile" placeholder="File Location" value="<?="upload/".$_FILES['adsfile']['name']?>">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "update_ads(this.id);" id="<?=$sAds['Id']?>">Update</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
    </div>
    <?php //include 'include/footer.php'; ?>
    <!--  -->
  </body>
</html>
