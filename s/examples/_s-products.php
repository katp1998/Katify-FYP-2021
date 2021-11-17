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
                      <div class="justify-content-center">
                    <form class="form-horizontal">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="product_id">Product Name</label>  
                          <div class="col-md">
                          <input id="product_id" name="product_id" placeholder="Enter product name" class="form-control" required="" type="text">
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="product_name_fr">Product Description</label>  
                          <div class="col-md">
                          <textarea id="product_name_fr" name="product_name_fr" placeholder="Enter Product Description" class="form-control" required="" type="text"></textarea>
                            
                          </div>
                        </div>

                        <!-- Select Basic -->
                        
                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group">
                                <label for="trgtuser">Target user: </label>
                                  <label for="trgtuser" class="radio-inline">
                                    <input type="radio">Male
                                  </label>
                                  <label for="trgtuser" class="radio-inline">
                                    <input type="radio">Female
                                  </label>
                                  <label for="trgtuser" class="inline">
                                    <input type="radio">Common
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm">
                                <label for="category">Category</label>
                                <button class="btn btn-primary btn-sm" data-toggle="dropdown"></button>
                              </div>
                            </div>
                          <label class="col-md control-label" for="product_categorie">PRODUCT CATEGORY</label>
                          <div class="col-md">
                            <select id="product_categorie" name="product_categorie" class="form-control">
                            </select>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
                          <div class="col-md">
                          <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control" required="" type="text">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="product_weight">PRODUCT WEIGHT</label>  
                          <div class="col-md">
                          <input id="product_weight" name="product_weight" placeholder="PRODUCT WEIGHT" class="form-control" required="" type="text">
                            
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md control-label" for="product_description">PRODUCT DESCRIPTION</label>
                          <div class="col-md">                     
                            <textarea class="form-control" id="product_description" name="product_description"></textarea>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="percentage_discount">PERCENTAGE DISCOUNT</label>  
                          <div class="col-md">
                          <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control" required="" type="text">
                            
                          </div>
                        </div>

                        <!-- Search input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="stock_critical">STOCK CRITICAL</label>
                          <div class="col-md">
                            <input id="stock_critical" name="stock_critical" placeholder="STOCK CRITICAL" class="form-control" required="" type="search">
                            
                          </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="online_date">ONLINE DATE</label>  
                          <div class="col-md">
                          <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control" required="" type="text">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="author">AUTHOR</label>  
                          <div class="col-md">
                          <input id="author" name="author" placeholder="AUTHOR" class="form-control" required="" type="text">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md control-label" for="enable_display">ENABLE DISPLAY</label>  
                          <div class="col-md">
                          <input id="enable_display" name="enable_display" placeholder="ENABLE DISPLAY" class="form-control" required="" type="text">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="control-label" for="comment">COMMENT</label>  
                          <div class="col">
                          <input id="comment" name="comment" placeholder="COMMENT" class="form-control" required="" type="text">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="control-label" for="approuved_by">APPROUVED BY</label>  
                          <div class="col">
                          <input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control " required="" type="text">
                            
                        <!-- File Button --> 
                        <div class="form-group">
                          <label class="control-label" for="filebutton">main_image</label>
                          <div class="col">
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                          </div>
                        </div>
                        <!-- File Button --> 
                        <div class="form-group">
                          <label class="control-label" for="filebutton">auxiliary_images</label>
                          <div class="col">
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                          </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                          <label class="control-label" for="singlebutton">Single Button</label>
                          <div class="col">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
                          </div>
                          </div>

                        </fieldset>
</div>
                      <!--
                    <div class="form-group">
                      <label for="productname">Product Name</label>
                      <input type="text" class="form-control" id="productname">
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                      <div class="form-group">
                      <label for="productcategories">Product Category</label>
                      <select name="productcategories" class="btn btn-primary btn-sm dropdown-toggle" id="productcategories" type="button" data-toggle="dropdown">
                        <option value="skincare">Skincare</option>
                        <option value="haircare">Haircare</option>
                        <option value="fragrance">Fragrance</option>
                        <option value="tools">Beauty tools</option>
                        <option value="cosmetics">Cosmetics</option>
                        <option value="mens">men's grooming</option>
                        <option value="oralcare">oral care</option>
                      </select>
                    </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="targetuser">User Category</label>
                          <div class="d-inline">
                          <input type="radio" class="radio-inline" value="male" id="male" name="for">
                          <label for="male">Male</label>
                          <input type="radio" class="radio-inline" value="female" id="female" name="for">
                          <label for="female">Female</label>
                          <input type="radio" class="radio-inline" value="both" id="both" name="for">
                          <label for="both">Both</label>
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
                    <div class="clearfix"></div> -->
                  </form> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /pagination product list -->