<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include 'include/assetCss.php'; ?>
  </head>
  <body>
    <?php include 'include/header.php'; ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="col-md-12">
        <h3>OME - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="datepicker" placeholder="DD / MM / YY">
            </div>
            <div class="form-group col-md-6 ">
              <label>Type <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Capacity (TR) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Chiller Model <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Chilled water supply temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Condenser water temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Condenser water flow (m3/hr) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Ambient Sesign Temp (Deg C) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Compressor power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Fan power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic Price (Lakhs Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Price Including Import Duty less of CVD (Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost per TR (Rs/TR) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Total Power (kW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="col-md-12 main">
      <h3>OME Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Date</strong>
              </td>
              <td class="small"><strong>Type</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Capacity (TR)</strong>
              </td>
              <td class="small"><strong>Chiller Model</strong>
              </td>
              <td class="small"><strong>chilled water supply temp (Deg C)</strong>
              </td>
              <td class="small"><strong>Condenser water temp (Deg C)</strong>
              <td class="small"><strong>Condenser water flow (m3/hr)</strong>
              </td>
              <td class="small"><strong>ambient design temp (Deg C)</strong>
              </td>
              <td class="small"><strong>compressor power (kW)</strong>
              </td>
              <td class="small"><strong>fan power (kW)</strong>
              </td>
              <td class="small"><strong>Basic Price (Lakhs Rs)</strong>
              </td>
              <td class="small"><strong>Price Including Import Duty
              less of CVD (Rs)</strong></td>
              <td class="small"><strong>File Location</strong>
              </td>
              <td class="small"><strong>Cost per TR (Rs/TR)</strong>
              </td>
              <td class="small"><strong>Total Power (kW)</strong>
              </td>
              <td class="small"><strong>kW / TR</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="small">1</td>
              <td class="small">23/08/2014</td>
              <td class="small">Water Cooled Screw Chiller</td>
              <td class="small">Kirloskar</td>
              <td class="small">240</td>
              <td class="small">KWK 240.24</td>
              <td class="small">7</td>
              <td class="small">36</td>
              <td class="small">212</td>
              <td class="small"></td>
              <td class="small"></td>
              <td class="small"></td>
              <td class="small">32</td>
              <td class="small">37.12</td>
              <td class="small"><a href="javascript:void(0);">View File</a></td>
              <td class="small">15466.66667</td>
              <td class="small">0</td>
              <td class="small">100</td>
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
