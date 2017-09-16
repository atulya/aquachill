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
        <h3>PMP - Entry No. <span class="label label-success">#2</span></h3>
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
              <input type="text" class="form-control" placeholder="Item Name">
            </div>
            <div class="form-group col-md-6 ">
              <label>Type <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type">
            </div>
            <div class="form-group col-md-6 ">
              <label>Quote from <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Quote from">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Make">
            </div>
            <div class="form-group col-md-6 ">
              <label>Model<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Model">
            </div>
            <div class="form-group col-md-6 ">
              <label>Flow<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Flow">
            </div>
            <div class="form-group col-md-6 ">
              <label>Head <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Head">
            </div>
            <div class="form-group col-md-6 ">
              <label>Motor type & Rating(KW) <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motor type & Rating(KW)">
            </div>
            <div class="form-group col-md-6 ">
              <label>Seal<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Seal">
            </div>
            <div class="form-group col-md-6 ">
              <label>MOC<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Unit Price<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Unit Price">
            </div>

            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="exampleInputPassword1" placeholder="File Location">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="col-md-12 main">
      <h3>PMP Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Item Name</strong>
              </td>
              <td class="small"><strong>Type</strong>
              </td>
              <td class="small"><strong>Quote from</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Model</strong>
              </td>
              <td class="small"><strong>Flow</strong>
              </td>
              <td class="small"><strong>Head</strong>
              <td class="small"><strong>Motor type & Rating(KW)</strong>
              </td>
              <td class="small"><strong>Seal</strong>
              </td>
              <td class="small"><strong>MOC</strong>
              </td>
              <td class="small"><strong>Unit Price</strong>
              </td>
              <td class="small"><strong>File location</strong>
              </td>

              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="small">1</td>
              <td class="small">Primary Chilled Water Pump</td>
              <td class="small">Long coupled End Suction</td>
              <td class="small">Veda Engg.</td>
              <td class="small">Armstrong</td>
              <td class="small">4030-150-250-18.5kW</td>
              <td class="small">259</td>
              <td class="small">17</td>
              <td class="small">EFF2 & 18.5</td>
              <td class="small">Mechanical</td>
              <td class="small">MOC : CI casing Impeller : Bronze</td>
              <td class="small">149164</td>
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
