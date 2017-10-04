<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include 'include/assetCss.php'; ?>
  </head>
  <body>
    <?php include 'include/header.php'; ?>
	
 <?php
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

	$sql = ' SELECT SUM(Capacity) AS Capacity FROM oem ';
	$rsSum = mysqli_query($connection, $sql);
	$sSum = mysqli_fetch_assoc($rsSum);
 //$no_of_ahu_records = mysqli_num_rows($rssumm);
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="col-md-12 main">
        <h3>OME Entry List</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="small"><strong>Sr.No.</strong>
                </td>
                <td class="small"><strong>Description</strong>
                </td>
                <td class="small"><strong>Capacity Sum</strong>
                </td>
                <td class="small"><strong>Cost Sum</strong>
                </td>
                <td class="small"><strong>Cost per TR</strong>
                </td>
                <td class="small"><strong>Edit</strong></td>
                <td class="small"><strong>Delete</strong></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="small">1</td>
                <td class="small">Water Cooled Screw Chiller</td>
                <td class="small"><?=$sSum['Capacity']?></td>
                <td class="small">344</td>
                <td class="small">13796</td>
                <td class="small"><a href="javascript:void(0);">Edit</a></td>
                <td class="small"><a href="javascript:void(0);">Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 main">
        <h3>Other Original Equipment Manufactured ( OOM )</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="small"><strong>Sr.No.</strong>
                </td>
                <td class="small"><strong>Description</strong>
                </td>
                <td class="small"><strong>Capacity Sum</strong>
                </td>
                <td class="small"><strong>Cost Sum</strong>
                </td>
                <td class="small"><strong>Cost per TR</strong>
                </td>
                <td class="small"><strong>Edit</strong></td>
                <td class="small"><strong>Delete</strong></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="small">1</td>
                <td class="small">Water Cooled Package AC with R 22</td>
                <td class="small"></td>
                <td class="small">235000</td>
                <td class="small">14242.42424</td>
                <td class="small"><a href="javascript:void(0);">Edit</a></td>
                <td class="small"><a href="javascript:void(0);">Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 main">
        <h3>Piping (PPG)</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="small"><strong>Sr.No.</strong>
                </td>
                <td class="small"><strong>Description</strong>
                </td>
                <td class="small"><strong>Size Summ</strong>
                </td>
                <td class="small"><strong>Weight sum</strong>
                </td>
                <td class="small"><strong>Cost sum</strong>
                </td>
                <td class="small"><strong>Cost per Inch Diameter (Rs)</strong>
                </td>
                <td class="small"><strong>Cost per Kg (Rs)</strong>
                </td>
                <td class="small"><strong>Edit</strong></td>
                <td class="small"><strong>Delete</strong></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="small">1</td>
                <td class="small">MS ERW IS 1239</td>
                <td class="small">4036</td>
                <td class="small">541</td>
                <td class="small">25227</td>
                <td class="small">156</td>
                <td class="small">47</td>
                <td class="small"><a href="javascript:void(0);">Edit</a></td>
                <td class="small"><a href="javascript:void(0);">Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 main">
        <h3>Cooling Tower (CT)</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="small"><strong>Sr.No.</strong>
                </td>
                <td class="small"><strong>Description</strong>
                </td>
                <td class="small"><strong>Flow Sum</strong>
                </td>
                <td class="small"><strong>Cost sum</strong>
                </td>
                <td class="small"><strong>Range sum</strong>
                </td>
                <td class="small"><strong>approach sum</strong>
                </td>
                <td class="small"><strong>Cost per m3/hr</strong>
                </td>
                <td class="small"><strong>cost per m3/hr per range and approach</strong>
                </td>
                <td class="small"><strong>Edit</strong></td>
                <td class="small"><strong>Delete</strong></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="small">1</td>
                <td class="small">FRP Counterflow with basin</td>
                <td class="small">9444</td>
                <td class="small">17257200</td>
                <td class="small">149</td>
                <td class="small">120</td>
                <td class="small">1827</td>
                <td class="small">1476</td>
                <td class="small"><a href="javascript:void(0);">Edit</a></td>
                <td class="small"><a href="javascript:void(0);">Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php include 'include/footer.php'; ?>
    <!--  -->
  </body>
</html>
