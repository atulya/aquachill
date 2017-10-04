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

	
$query = 'SELECT * FROM master_item';
$rsMasterItem = mysqli_query($connection, $query);
//echo $sql;
$no_of_masterItem_records = mysqli_num_rows($rsMasterItem);
	
$sqlmake = "SELECT * FROM master_make";
$rsmake = mysqli_query($connection,$sqlmake);
$no_of_make_records = mysqli_num_rows($rsmake);
?>
   <?php include 'include/header.php'; ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id = "Mainads">
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
            <div class="form-group col-md-6 ">
             <label>Make <span class="mandatory">*</span></label>
				<select class ="form-control" name = "AdsMake">
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
              <input type="Date" class="form-control"  placeholder="DD / MM / YY" name = "AdsDate">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="AdsFile" placeholder="File Location">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary" onclick = "submit_ads(this.id);" id = "0">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
<?php
 $sql = ' SELECT  Ad.Id AS Id, MI.Description AS item,mk.Description AS Make,Ads_Date,Ads_File 
			FROM ads AS Ad INNER JOIN master_item AS MI ON Ad.Ads_Item_Id = MI.Id 
							INNER JOIN master_make AS mk ON Ad.Ads_Make_Id = mk.Id ';
 $rsAds = mysqli_query($connection, $sql);
 $no_of_ads_records = mysqli_num_rows($rsAds);
?>
      <div class="col-md-12 main" id = "updateAds">
      <h3>ADS Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Item Name</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Date</strong>
              </td>
              <td class="small"><strong>File location</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
  		  <?php
				for($i=0;$i<$no_of_ads_records;$i++)
				{
					$sAds = mysqli_fetch_assoc($rsAds);
				?>
            <tr>
              <td class="small"><?=$sAds['Id']?></td>
              <td class="small"><?=$sAds['item']?></td>
              <td class="small"><?=$sAds['Make']?></td>
              <td class="small"><?=$sAds['Ads_Date']?></td>
              <td class="small"><a href="<?=$sAds['Ads_File'] ?>" target="_blank">View File</a></td>
              <td class="small"><a onclick="edit_ads(this.id);" id="<?=$sAds['Id']?>">Edit</a></td>
              <td class="small"><a onclick="delete_recordADS(this.id);" id="<?=$sAds['Id']?>">Delete</a></td>
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
