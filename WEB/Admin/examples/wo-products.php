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
                        <a class="nav-link active" href="#tobereviewed" data-toggle="tab">
                            <i class="material-icons">checklist</i> To be Reviewed
                            <div class="ripple-container"></div>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#approved" data-toggle="tab">
                            <i class="material-icons">playlist_add</i> Approved
                            <div class="ripple-container"></div>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#disapproved" data-toggle="tab">
                            <i class="material-icons">playlist_add</i> Disapproved
                            <div class="ripple-container"></div>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tobereviewed">
                    <table class="table">
                      <thead class=" text-info">
                        <th>Seller ID</th>
                        <th>Shop Name</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Approve/Disapprove </th>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>OriCosmetics</td>
                            <td>MATTE LIPSTICK</td>
                            <td>Cosmetics</td>
                            <td>Rs. 1,200</td>
                            <td>
                                <button type="button" rel="tooltip" title="Disapprove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                                <button type="button" rel="tooltip" title="Approved" class="btn btn-success btn-link btn-sm">
                                    <i class="material-icons">done</i>
                                </button>
                                <button type="button" rel="tooltip" title="View information" class="btn btn-info btn-link btn-sm">
                                    <i class="material-icons">info</i>
                                </button>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="approved">
                        <table class="table">
                        <thead class=" text-info">
                            <th>Seller ID</th>
                            <th>Shop Name</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>OriCosmetics</td>
                                <td>MATTE LIPSTICK</td>
                                <td>Cosmetics</td>
                                <td>Rs. 1,200</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="disapproved">

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