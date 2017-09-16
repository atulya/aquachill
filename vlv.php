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
        <h3>VLV - Entry No. <span class="label label-success">#2</span></h3>
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
              <label>Pressure rating <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Pressure rating">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size ( NB)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Size ( NB)">
            </div>
            <div class="form-group col-md-6 ">
              <label>Size (inch)<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Size (inch)">
            </div>
            <div class="form-group col-md-6 ">
              <label>Specifications<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Specifications">
            </div>
            <div class="form-group col-md-6 ">
              <label>Make<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Cost/Inch<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6 ">
              <label>Date <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="datepicker" placeholder="DD / MM / YY">
            </div>
            <div class="form-group col-md-6 ">
              <label>Location<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Location">
            </div>
            <div class="form-group col-md-6 ">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="col-md-12 main">
      <h3>VLV Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Item Name</strong>
              </td>
              <td class="small"><strong>Pressure rating</strong>
              </td>
              <td class="small"><strong>Size ( NB)</strong>
              </td>
              <td class="small"><strong>Size (inch)</strong>
              </td>
              <td class="small"><strong>Specifications</strong>
              </td>
              <td class="small"><strong>Make</strong>
              </td>
              <td class="small"><strong>Cost</strong>
              <td class="small"><strong>Cost/Inch</strong>
              </td>
              <td class="small"><strong>Date</strong>
              </td>
              <td class="small"><strong>Location</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="small">1</td>
              <td class="small">Butterfly Valve ( CI )</td>
              <td class="small">PN 10 </td>
              <td class="small">50</td>
              <td class="small">2</td>
              <td class="small">C.I. Wafer B/F Valve Hand Lever</td>
              <td class="small">Advance</td>
              <td class="small">1810</td>
              <td class="small">905</td>
              <td class="small">27/4/2015</td>
              <td class="small">BASF</td>
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
