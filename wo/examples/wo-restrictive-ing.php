<?php 
 include("wo-header.php");
?>
<div class="content">
    <div class="container-fluid">
        <div class="col">
            <div class="card">
                <div class="card-header card-header-tabs card-header-info">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                    <span class="nav-tabs-title">Tasks:</span>
                    <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                        <a class="nav-link active" href="#harmfulList" data-toggle="tab">
                            <i class="material-icons">checklist</i> Harmful Ingredient List
                            <div class="ripple-container"></div>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#adding" data-toggle="tab">
                            <i class="material-icons">playlist_add</i> Add Ingredient
                            <div class="ripple-container"></div>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="harmfulList">
                    <table class="table">
                      <thead class=" text-info">
                        <th>Ingredient ID</th>
                        <th>Ingredient Name</th>
                        <th>Belonging Category</th>
                        <th>Remove</th>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Paraben</td>
                            <td>Skincare</td>
                            <td>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="adding">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Ingredient Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group"><label>Select the applicable category: </label></div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Skincare
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Haircare
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Cosmetics/Make-up
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Fragrance
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Harmful Reason</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">ADD INGREDIENT</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                  </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
 include("wo-footer.php");
?>