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
        <h3>DCT - Entry No. <span class="label label-success">#2</span></h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="alert alert-success" role="alert">
            <i class="glyphicon glyphicon-ok-circle"></i> <strong>Well done!</strong> You successfully saved the entry. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form class="">

            <div class="form-group col-md-6 ">
              <label>Gauge <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Gauge">
            </div>
            <div class="form-group col-md-6 ">
              <label>Thickness <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Thickness">
            </div>
            <div class="form-group col-md-6 ">
              <label>Flange Type<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Flange Type">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic Rate   <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Basic Rate">
            </div>
            <div class="form-group col-md-6 ">
              <label>New Basic Rate <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="New Basic Rate">
            </div>
            <div class="form-group col-md-6 ">
              <label>Discount<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Discount">
            </div>
            <div class="form-group col-md-6 ">
              <label>Basic after Discount <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Basic after Discount">
            </div>
            <div class="form-group col-md-6 ">
              <label>Excise <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Excise">
            </div>
            <div class="form-group col-md-6 ">
              <label>Transportation <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Transportation">
            </div>
            <div class="form-group col-md-6 ">
              <label>Sealant gasket <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Sealant gasket">
            </div>
            <div class="form-group col-md-6 ">
              <label>Support <span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Support">
            </div>
            <div class="form-group col-md-6 ">
              <label>Wastage <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Wastage">
            </div>

            <div class="form-group col-md-6 ">
              <label>Total <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Total">
            </div>
            <div class="form-group col-md-6 ">
              <label>VAT <span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6 ">
              <label>Grand Total<span class="mandatory">*</span></label>
              <input type="text" class="form-control" placeholder="Grand Total">
            </div>
            <div class="form-group col-md-12 ">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="col-md-12 main">
      <h3>DCT Entry List</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="small"><strong>Sr.No.</strong>
              </td>
              <td class="small"><strong>Gauge</strong>
              </td>
              <td class="small"><strong>Thickness</strong>
              </td>
              <td class="small"><strong>Flange Type</strong>
              </td>
              <td class="small"><strong>Basic Rate</strong>
              </td>
              <td class="small"><strong>New Basic Rate</strong>
              </td>
              <td class="small"><strong>Discount</strong>
              </td>
              <td class="small"><strong>Basic after Discount</strong>
              <td class="small"><strong>Excise</strong>
              </td>
              <td class="small"><strong>Transportation</strong>
              </td>
              <td class="small"><strong>Sealant gasket</strong>
              </td>
              <td class="small"><strong>Support</strong>
              </td>
              <td class="small"><strong>Wastage</strong>
              </td>
              <td class="small"><strong>Total</strong></td>
              <td class="small"><strong>VAT</strong>
              </td>
              <td class="small"><strong>Grand Total</strong>
              </td>
              <td class="small"><strong>Edit</strong></td>
              <td class="small"><strong>Delete</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="small">1</td>
              <td class="small">18</td>
              <td class="small">1.25</td>
              <td class="small">TDF</td>
              <td class="small">745</td>
              <td class="small">745</td>
              <td class="small">0</td>
              <td class="small">745</td>
              <td class="small">0</td>
              <td class="small">0</td>
              <td class="small">22</td>
              <td class="small">115</td>
              <td class="small">0</td>
              <td class="small">881</td>
              <td class="small">0</td>
              <td class="small">881</td>
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
