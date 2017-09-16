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
        <h3>PPG - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6 ">
              <label>Pipe Standard<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Pipe Standard">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Make">
            </div>
            <div class="form-group col-md-6 ">
              <label>Quote from<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Quote from">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Size">
            </div>
            <div class="form-group col-md-6 ">
              <label>Thk<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Thk">
            </div>
            <div class="form-group col-md-6 ">
              <label>Schedule<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="schedule">
            </div>
            <div class="form-group col-md-6 ">
              <label>Weight per mtr<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="weight per mtr">
            </div>
            <div class="form-group col-md-6 ">
              <label>cost (Rs/ mtr)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cost (Rs/ mtr)">
            </div>
            <div class="form-group col-md-6 ">
              <label>cost basis<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cost basis">
            </div>
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="datepicker" placeholder="DD / MM / YY">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specific Cost Rs / inch Dia<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specific Cost Rs / inch Dia">
            </div>
            <div class="form-group col-md-6 ">
              <label>specific cost Rs / Kg<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="specific cost Rs / Kg">
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
      <h3>PPG Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Pipe Standard</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Quote from</strong>
              </td>
              <td class="small"><strong>Size</strong>
              </td>
              <td class="small"><strong>Thk</strong>
              </td>
              <td class="small"><strong>Schedule</strong>
              </td>
              <td class="small"><strong>weight per mtr</strong>
              <td class="small"><strong>cost (Rs/ mtr)</strong>
              </td>
              <td class="small"><strong>cost basis</strong>
              </td>
              <td class="small"><strong>date of quote</strong>
              </td>
              <td class="small"><strong>Specific Cost Rs / inch Dia</strong>
              </td>
              <td class="small"><strong>specific cost Rs / Kg</strong>
              </td>
              <td class="small"><strong>file location</strong></td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="small">1</td>
              <td class="small">SA 106 Gr B Seamless</td>
              <td class="small">MSL / ISMT</td>
              <td class="small">Vinayak Tubes</td>
              <td class="small">300</td>
              <td class="small">7.1</td>
              <td class="small">sch 20</td>
              <td class="small">56.18</td>
              <td class="small">4025</td>
              <td class="small">ED Extra</td>
              <td class="small">27/12/2012</td>
              <td class="small">335</td>
              <td class="small">72</td>
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
