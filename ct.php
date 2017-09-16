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
        <h3>CT - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6 ">
              <label>Type <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Type">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Make">
            </div>
             <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="datepicker" placeholder="DD / MM / YY">
            </div>
            <div class="form-group col-md-6 ">
              <label>Water flow <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Water flow">
            </div>
            <div class="form-group col-md-6 ">
              <label>Range <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Range">
            </div>
            <div class="form-group col-md-6 ">
              <label>Approach <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Approach">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cost">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost (Rs/m3/hr)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specific Cost (Rs/m3/hr)">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost (Rs/flow/approach and range)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Specific Cost (Rs/flow/approach and range)">
            </div>
            <div class="form-group col-md-6 ">
              <label>File Location <span class="mandatory">*</span></label>
              <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="col-md-12 main">
      <h3>CT Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Type</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>date of quote</strong>
              </td>
              <td class="small"><strong>Water flow</strong>
              </td>
              <td class="small"><strong>Range</strong>
              </td>
              <td class="small"><strong>Approach</strong>
              </td>
              <td class="small"><strong>Cost</strong>
              <td class="small"><strong>Specific Cost (Rs/m3/hr)</strong>
              </td>
              <td class="small"><strong>Specific Cost (Rs/flow/approach and range)</strong>
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
              <td class="small">FRP Counterflow with basin</td>
              <td class="small">Paharpur</td>
              <td class="small">01/01/2013</td>
              <td class="small">480</td>
              <td class="small">3</td>
              <td class="small">4</td>
              <td class="small">600000</td>
              <td class="small">1250</td>
              <td class="small">1667</td>
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
