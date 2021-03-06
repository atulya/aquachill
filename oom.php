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
        <h3>OOM - Entry No. <span class="label label-success">#2</span></h3>
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
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Refrigerant<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Chiller Model <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Model<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost (Rs)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
      <h3>OOM Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Item Name</strong>
              </td>
              <td class="small"><strong>Refrigerant</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Capacity (TR)</strong>
              </td>
              <td class="small"><strong>Model</strong>
              </td>
              <td class="small"><strong>Cost (Rs)</strong>
              </td>
              <td class="small"><strong>File location</strong>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="small">1</td>
              <td class="small">Split AC with R 22</td>
              <td class="small">R 22</td>
              <td class="small">Bluestar</td>
              <td class="small">1.5</td>
              <td class="small">SCR181YD</td>
              <td class="small">50000</td>
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
