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
              <input type="text" class="form-control" placeholder="Description">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Make">
            </div>
            <div class="form-group col-md-6 ">
              <label>Air Flowrate (CFM) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Static Pressure (MMWC) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Static Pressure (MMWC)">
            </div>
            <div class="form-group col-md-6 ">
              <label>Type of Fan<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Type of Fan">
            </div>
            <div class="form-group col-md-6 ">
              <label>Filter <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Filter">
            </div>
            <div class="form-group col-md-6 ">
              <label>PUF Panel Thk <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="PUF Panel Thk">
            </div>
            <div class="form-group col-md-6 ">
              <label>Inner Skin <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Inner Skin
">
            </div>
            <div class="form-group col-md-6 ">
              <label>Outer Skin <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Outer Skin">
            </div>
            <div class="form-group col-md-6 ">
              <label>Number of rows Cooling coil <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Number of rows Cooling coil">
            </div>
            <div class="form-group col-md-6 ">
              <label>Number of rows of reheat Coil <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Number of rows of reheat Coil">
            </div>
            <div class="form-group col-md-6 ">
              <label>Heater Section KW <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Heater Section KW">
            </div>

            <div class="form-group col-md-6 ">
              <label>Humidifier section <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Humidifier section">
            </div>
            <div class="form-group col-md-6 ">
              <label>Motor kW <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Motor kW">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost (Rs) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Cost (Rs)">
            </div>
            <div class="form-group col-md-6 ">
              <label> Specific Cost RS per CFM <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder=" Specific Cost RS per CFM">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="col-md-12 main">
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
            <tr>
              <td class="small">1</td>
              <td class="small">DX Air Handling Unit with Mixing Box</td>
              <td class="small">Zeco</td>
              <td class="small">2900</td>
              <td class="small">150</td>
              <td class="small">backward curved PLUG fan</td>
              <td class="small">EU-4 , EU-5, EU-7 , Eu-9</td>
              <td class="small">25 mm</td>
              <td class="small">0.6 mm Powder- coated G.I</td>
              <td class="small">0.6 mm Powder- coated G.I</td>
              <td class="small">6</td>
              <td class="small"></td>
              <td class="small">2</td>
              <td class="small"></td>
              <td class="small">3.7</td>
              <td class="small">263000</td>
              <td class="small">91</td>
              <td class="small"><a href="javascript:void(0);">View File</a></td>
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
