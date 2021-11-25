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
            <form id="productForm" action="s-db-interaction.php" method="POST">
              <div id="basic">
                <div class="form-group"><h2>Basic Product Information</h2></div>
                <div class="form-group">
                  <label for="productname">PRODUCT NAME: </label>
                  <input class="form-control" type="text" name="productname">
                </div>
                <div class="form-group">
                  <label for="productdescription">PRODUCT DESCRIPTION: </label>
                  <textarea class="form-control" name="productdescription" id="productdescription" rows="10"></textarea>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="productCat">PRODUCT CATEGORY</label>
                      <select class="form-control" data-style="btn btn-sm btn-primary btn-link" id="productCat">
                        <option id="fragranceOpt">Fragrance</option>
                        <option id="skincareOpt">Skincare</option>
                        <option id="haircareOpt">Haircare</option>
                        <option id="cosmeticsOpt">Cosmetics</option>
                        <option id="beautyToolsOpt">Beauty Tools</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <div><label for="productdescription">GENDER:</label></div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="male" value="make"> Male
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="female" value="female"> Female
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="both" value="both"> both
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                          </label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="productbrand">PRODUCT BRAND: </label>
                      <input class="form-control" name="productbrand"type="text">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="stock">STOCKS AVAILABLE: </label>
                      <input class="form-control" name="stock"type="text" >
                    </div>
                  </div>
                </div>
              </div>
              <div id="fragranceForm">
                <div class="form-group"><h2>Fragrance: Product Specific Information</h2></div>
                  <div class="form-group">
                    <label for="fragranceCat">FRAGRANCE CATEGORY</label>
                    <select class="form-control" data-style="btn btn-sm btn-primary btn-link" id="exampleFormControlSelect1">
                      <option>Fragrance Mist</option>
                      <option>Eau De Parfum (EDP)</option>
                      <option>Eau De Toilette (EDT)</option>
                      <option>Cologne</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="productvolume">PRODUCT CONTENT VOLUME (ml): </label>
                    <input class="form-control" name="productvolume"type="text">
                  </div>
                  <div class="form-group">
                    <label for="fragnotes">FRAGRANCE NOTES: </label>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="floralchecks">FLORAL</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Floral Fruity
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Classic Floral
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Powdery Floral (Iris/Violet)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Warm Floral (Vanilla)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="freshchecks">FRESH</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Citrus
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Aquatics
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Fresh Florals (Lillies/Honeysuckle)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="warmchecks">WARM & SPICY</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Warm and Sweet
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Vanilla and Coffee
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Cool Spices (Bergamont/Nutmeg)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Oud/Leather
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="woodychecks">WOODY & EARTH</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Warm Woods (Sandalwood/Pine)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Classic Woods (Moss/Cedar)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Earth Greens (Herbs/Fresh cut grass)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Citrus Wood (Bergamont/Vertiver)
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="producting">PRODUCT INGREDIENTS: </label>
                      <textarea class="form-control" name="producting" id="producting" rows="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="images">PRODUCT IMAGES: </label>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add Main Image">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 1">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 2">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="productprice">PRODUCT PRICE: </label>
                  <input class="form-control" name="productprice"type="text">
                </div>
              </div>
              <div id="haircareForm">
                <div class="form-group"><h2>Haircare: Product Specific Information</h2></div>
                <div class="form-group">
                    <label for="fragranceCat">HAIRCARE PRODUCT CATEGORY</label>
                    <select class="form-control" data-style="btn btn-sm btn-primary btn-link" id="exampleFormControlSelect1">
                      <option>Shampoo</option>
                      <option>Conditioner</option>
                      <option>Gel</option>
                      <option>Hair Spray</option>
                      <option>Serum</option>
                      <option>Mousse</option>
                      <option>Wax</option>
                      <option>Volumizer</option>
                      <option>Conditioning Mask</option>
                      <option>Leave-in Conditioner</option>
                      <option>Dry Shampoo</option>
                      <option>Oil</option>
                      <option>Heat Protectant</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="productvolume">PRODUCT CONTENT VOLUME (ml): </label>
                    <input class="form-control" name="productvolume"type="text">
                  </div>
                  <div class="form-group">
                    <label for="fragnotes">PRODUCT PROPERTIES: </label>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="floralchecks">HAIR TYPE</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Straight Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Wavy Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Curly Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Very Curly (Coily) Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="freshchecks">SCALP CONDITION:</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Oily Scalp
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Dry Scalp
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Flaky Scalp
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="warmchecks">HAIR CONDITION: </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Split-ends
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Rough
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Gray Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Permed Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Straightened Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Coloured Hair
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>  
                    </div>
                  </div><hr>
                  <div class="form-group">
                    <label for="producting">PRODUCT INGREDIENTS: </label>
                    <textarea class="form-control" name="producting" id="producting" rows="10"></textarea>
                  </div><br>
                  <div class="form-group">
                  <label for="images">PRODUCT IMAGES: </label>
                </div><br>
                <div class="row">
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add Main Image">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 1">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 2">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="form-group">
                  <label for="productprice">PRODUCT PRICE: </label>
                  <input class="form-control" name="productprice"type="text">
                </div>
              </div>
              <div id="skincareForm">
                <div class="form-group"><h2>Skincare: Product Specific Information</h2></div>
                <div class="form-group">
                    <label for="fragranceCat">ADDRESSES SKIN TYPE:</label>
                    <select class="form-control" data-style="btn btn-sm btn-primary btn-link" id="exampleFormControlSelect1">
                      <option>Cleanser</option>
                      <option>Exfoliator</option>
                      <option>Treatment</option>
                      <option>Serum</option>
                      <option>Face Oil</option>
                      <option>Sunscreen</option>
                      <option>Moisturizer</option>
                      <option>Chemical Peel</option>
                      <option>Toner</option>
                      <option>Face Mask</option>
                      <option>Eye Cream</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="productvolume">PRODUCT CONTENT VOLUME (ml): </label>
                    <input class="form-control" name="productvolume"type="text">
                  </div>
                  <div class="form-group">
                    <label for="fragnotes">PRODUCT PROPERTIES: </label>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="floralchecks">SKIN CONCERNS ADDRESSED:</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Acne and Pores
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Signs of aging
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Darkspots
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Wrinkles and finelines
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Dullness
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Redness
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="freshchecks">PRODUCT AIMS:</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Hydration/Moisturize
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Fade scars
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Whitening
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Skin toning/reduce skin texture
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">All-rounder
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="warmchecks">OTHER PROPERTIES: </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Gel-based textured
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Creamy textured
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">lotion textured
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">without fragrance
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>  
                    </div>
                  </div><hr>
                  <div class="form-group">
                    <label for="producting">PRODUCT INGREDIENTS: </label>
                    <textarea class="form-control" name="producting" id="producting" rows="10"></textarea>
                  </div><br>
                  <div class="form-group">
                  <label for="images">PRODUCT IMAGES: </label>
                </div><br>
                <div class="row">
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add Main Image">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 1">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 2">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="form-group">
                  <label for="productprice">PRODUCT PRICE: </label>
                  <input class="form-control" name="productprice"type="text">
                </div>
              </div>
              <div id="cosmeticsForm">
                <div class="form-group"><h2>Skincare: Product Specific Information</h2></div>
                <div class="form-group">
                    <label for="fragranceCat">ADDRESSES SKIN TYPE:</label>
                    <select class="form-control" data-style="btn btn-sm btn-primary btn-link" id="exampleFormControlSelect1">
                      <option>Cleanser</option>
                      <option>Exfoliator</option>
                      <option>Treatment</option>
                      <option>Serum</option>
                      <option>Face Oil</option>
                      <option>Sunscreen</option>
                      <option>Moisturizer</option>
                      <option>Chemical Peel</option>
                      <option>Toner</option>
                      <option>Face Mask</option>
                      <option>Eye Cream</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="productvolume">PRODUCT CONTENT VOLUME (ml): </label>
                    <input class="form-control" name="productvolume"type="text">
                  </div>
                  <div class="form-group">
                    <label for="fragnotes">PRODUCT PROPERTIES: </label>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="floralchecks">SKIN CONCERNS ADDRESSED:</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Acne and Pores
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Signs of aging
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Darkspots
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Wrinkles and finelines
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Dullness
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Redness
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="freshchecks">PRODUCT AIMS:</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Hydration/Moisturize
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Fade scars
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Whitening
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Skin toning/reduce skin texture
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">All-rounder
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="warmchecks">OTHER PROPERTIES: </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Gel-based textured
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">Creamy textured
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">lotion textured
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">without fragrance
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                      </div>  
                    </div>
                  </div><hr>
                  <div class="form-group">
                    <label for="producting">PRODUCT INGREDIENTS: </label>
                    <textarea class="form-control" name="producting" id="producting" rows="10"></textarea>
                  </div><br>
                  <div class="form-group">
                  <label for="images">PRODUCT IMAGES: </label>
                </div><br>
                <div class="row">
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add Main Image">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 1">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 2">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                </div><br>
                <div class="form-group">
                  <label for="productprice">PRODUCT PRICE: </label>
                  <input class="form-control" name="productprice"type="text">
                </div>
              </div>
              <div id="otherForm">
                <div class="form-group"><h2>Basic Product Information</h2></div>
                <div class="form-group">
                  <label for="productname">PRODUCT NAME: </label>
                  <input class="form-control" type="text" id="productname" placeholder=>
                </div>
                
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">PRODUCT CATEGORY</label>
                      <select class="form-control" data-style="btn btn-sm btn-primary btn-link" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <div><label for="productdescription">GENDER:</label></div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="male" value="make"> Male
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="female" value="female"> Male
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="both" value="both"> both
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                          </label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="productbrand">PRODUCT BRAND: </label>
                      <input class="form-control" name="productbrand"type="text">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="productvolume">PRODUCT CONTENT VOLUME (ml): </label>
                      <input class="form-control" name="productvolume"type="text">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="stock">STOCKS AVAILABLE: </label>
                      <input class="form-control" name="stock"type="text"vplaceholder="No. of products">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="producting">PRODUCT INGREDIENTS: </label>
                  <textarea class="form-control" name="producting" id="producting" rows="10"></textarea>
                  <button class="btn btn-primary btn-sm">CHECK VALIDITY</button>
                </div>
                <div class="form-group">
                  <label for="images">PRODUCT IMAGES: </label>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add Main Image">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 1">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 2">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 3">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 4">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="Add image 5">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Form buttons -->
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="addprodbtn">ADD PRODUCT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /pagination product list -->