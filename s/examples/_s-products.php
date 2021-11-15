<!-- pagination product list start-->
<div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Products:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                          <a class="nav-link active" href="#all" data-toggle="tab">
                            <i class="material-icons">list</i> All
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#active" data-toggle="tab">
                            <i class="material-icons">check</i> Active
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#pendingapproval" data-toggle="tab">
                            <i class="material-icons">autorenew</i> Pending Approval
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#inactive" data-toggle="tab">
                            <i class="material-icons">close</i> Inactive
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#addproduct" data-toggle="tab">
                            <i class="material-icons">add</i> Add product
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="pendingapproval">
                      <table class="table">
                        <thead class=" text-primary" >
                        <th >
                          P_ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Stock
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Price
                        </th>
                        <th style="text-align: center; vertical-align: middle;">
                          Status
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-warning btn-sm">Pending</div>
                          </td>
                    
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-warning btn-sm">Pending</div>
                          </td>
                        
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-warning btn-sm">Pending</div>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-warning btn-sm">Pending</div>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-warning btn-sm">Pending</div>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-warning btn-sm">Pending</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="active">
                    <table class="table">
                      <thead class=" text-primary">
                      <th >
                          P_ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Stock
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Price
                        </th>
                        <th style="text-align: center; vertical-align: middle;">
                          Active/Inactive
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="all">
                    <table class="table">
                        <thead class=" text-primary" >
                        <th >
                          P_ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Stock
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Price
                        </th>
                        <th style="text-align: center; vertical-align: middle;">
                          Status
                        </th>
                        <th style="text-align: center; vertical-align: middle;">
                          Active/Inactive
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-danger btn-sm">Not Approved</div>
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-success btn-sm">Approved</div>
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-success btn-sm">Approved</div>
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-warning btn-sm">Pending</div>
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-success btn-sm">Approved</div>
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                          <td class="text-center" >
                              <div class="btn btn-outline-success btn-sm">Approved</div>
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="inactive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th >
                          P_ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Stock
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Price
                        </th>
                        <th style="text-align: center; vertical-align: middle;">
                          Active/Inactive
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="addproduct">
                    <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Name</label>
                          <input type="text" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Seller name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /pagination product list -->