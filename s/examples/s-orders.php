<?php 
 include("s-header.php");
?>
<div class="content">
    <div class="container-fluid">
        <!-- pagination product list start-->
        <div class="row">
            <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Orders: </span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#pendingorders" data-toggle="tab">
                                <i class="material-icons">pending_actions</i> Pending Orders
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tobehanded" data-toggle="tab">
                                <i class="material-icons">arrow_upward</i> To be Handed
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#shipped" data-toggle="tab">
                                <i class="material-icons">local_shipping</i> Shipped
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#delivered" data-toggle="tab">
                                <i class="material-icons">done</i> Delivered
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#cancelled" data-toggle="tab">
                                <i class="material-icons">highlight_off</i> Cancelled
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#returned" data-toggle="tab">
                                <i class="material-icons">replay</i> Returned
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="pendingorders">
                            <table class="table">
                                <thead class="table-primary">
                                    <th>O_ID</th>
                                    <th>Order Date</th>
                                    <th>Purchased Products</th>
                                    <th>Quantity of Products</th>
                                    <th>Total Price</th>
                                    <th>Payment</th>
                                    <th>Accept/Decline</th>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>12/11/2021</td>
                                    <td>TheOne Black Mascara</td>
                                    <td>1</td>
                                    <td>Rs. 1290.00</td>
                                    <td>COD</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">done</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </table>   
                        </div>
                        <div class="tab-pane" id="tobehanded">
                            <table class="table">
                                <thead class="table-primary">
                                    <th>O_ID</th>
                                    <th>Order Date</th>
                                    <th>Order age</th>
                                    <th>Purchased Products</th>
                                    <th>Quantity of Products</th>
                                    <th>Total Price</th>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>12/11/2021</td>
                                    <td>2 days</td>
                                    <td>TheOne Black Mascara</td>
                                    <td>1</td>
                                    <td>Rs. 1290.00</td>
                                </tr>
                            </table>   
                        </div>
                        <div class="tab-pane" id="shipped">
                            <table class="table">
                                <thead class="table-primary">
                                    <th>O_ID</th>
                                    <th>Order Date</th>
                                    <th>Shipped date</th>
                                    <th>Purchased Products</th>
                                    <th>Total Price</th>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>12/11/2021</td>
                                    <td>15/11/2021</td>
                                    <td>TheOne Black Mascara</td>
                                    <td>Rs. 1290.00</td>
                                </tr>
                            </table>   
                        </div>
                        <div class="tab-pane" id="delivered">
                            <table class="table">
                                <thead class="table-primary">
                                    <th>O_ID</th>
                                    <th>Order Date</th>
                                    <th>Shipped date</th>
                                    <th>Delivered Date</th>
                                    <th>Purchased Products</th>
                                    <th>Total Price</th>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>12/11/2021</td>
                                    <td>15/11/2021</td>
                                    <td>20/11/2021</td>
                                    <td>TheOne Black Mascara</td>
                                    <td>Rs. 1290.00</td>
                                </tr>
                            </table>   
                        </div>
                        <div class="tab-pane" id="cancelled">
                            <table class="table">
                                <thead class="table-primary">
                                    <th>O_ID</th>
                                    <th>Order Date</th>
                                    <th>Purchased Products</th>
                                    <th>Quantity of Products</th>
                                    <th>Total Price</th>
                                    <th>Payment</th>
                                    <th>Reason to decline</th>
                                    <th>Declined Date</th>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>12/11/2021</td>
                                    <td>TheOne Black Eyeliner</td>
                                    <td>1</td>
                                    <td>Rs. 1790.00</td>
                                    <td>COD</td>
                                    <td>As buyer requested</td>
                                    <td>13/11/2021</td>
                                </tr>
                            </table>   
                        </div>
                        <div class="tab-pane" id="returned">   
                            <table class="table">
                                <thead class="table-primary">
                                    <th>O_ID</th>
                                    <th>Order Date</th>
                                    <th>Purchased Products</th>
                                    <th>Return initiated Date</th>
                                    <th>Return Status</th>
                                    <th>Returned date</th>
                                    <th>Reason to Return</th>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>12/11/2021</td>
                                    <td>TheOne Lipstick shade Berry</td>
                                    <td>13/11/2021</td>
                                    <td class="td-actions text-right" >
                                        <button type="button" class="btn btn-warning btn-sm">At warehouse</button>
                                        <!-- <button type="button" class="btn btn-info btn-sm">In progress</button> 
                                        <button type="button" class="btn btn-success btn-sm">Delivered to Seller</button> -->
                                    </td>
                                    <td>15/11/2021</td>
                                    <td>Product was not satisfactory</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- /pagination product list -->
    </div>
</div>
<?php 
 include("s-footer.php");
?>