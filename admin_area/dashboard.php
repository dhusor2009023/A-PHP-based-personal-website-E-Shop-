<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php', '_self')</script>";
} else {
    ?>

    <div class="row"> <!-- Dashboard Section -->
        <div class="col-lg-12"> <!-- Full width on large screens -->
            <h1 class="page-header" style="font-size: 24px;"> <!-- Adjust font size for the header -->
                Dashboard
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div> <!-- End of Dashboard Section -->

    <div class="row"> <!-- 2nd Row with Boxes -->
        <!-- Each box should use a maximum of 3 columns (col-lg-3) for a total of 12 in the row -->

        <div class="col-lg-3 col-md-6"> <!-- First Box -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $count_pro; ?></div>
                            <div>Products</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_product">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6"> <!-- Second Box -->
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $count_cust; ?></div>
                            <div>Customers</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_customers"> <!-- Corrected link -->
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6"> <!-- Third Box -->
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $count_p_cat; ?></div>
                            <div>Product Categories</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_product_cat">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6"> <!-- Fourth Box -->
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $count_order; ?></div>
                            <div>Orders</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view_orders"> <!-- Corrected link -->
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    </div> <!-- End of 2nd Row with Boxes -->



    <div class="row" ><!-- 3 row Starts -->
<div class="col-lg-8" ><!-- col-lg-8 Starts -->
<div class="panel panel-primary" ><!-- panel panel-primary Starts -->
<div class="panel-heading" ><!-- panel-heading Starts -->
<h3 class="panel-title" ><!-- panel-title Starts -->
<i class="fa fa-money fa-fw" ></i> New Orders
</h3><!-- panel-title Ends -->
</div><!-- panel-heading Ends -->
<div class="panel-body" ><!-- panel-body Starts -->
<div class="table-responsive" ><!-- table-responsive Starts -->
<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->
<thead><!-- thead Starts -->
<tr>
<th>Order No</th>
<th>Customer Email</th>
<th>Invoice No</th>
<th>Product Id</th>
<th>Total</th>
<th>Size</th>
<th>Status</th>
</tr>

</thead><!-- thead Ends -->
<tbody><!-- tbody Starts -->

<?php
$i=0;
$get_order= "select * from customer_order order by 1 DESC LIMIT 0,5";
$run_order=mysqli_query($con,$get_order);
while ($row_order=mysqli_fetch_array($run_order)) {
$order_id=$row_order['order_id'];
$customer_id=$row_order['customer_id'];
$product_id=$row_order['product_id'];
$invoice_no=$row_order['invoice_no'];
$qty=$row_order ['qty'];
$size=$row_order ['size'];
$status=$row_order ['order_status'];
$i++;
?>


<tr>
<td><?php echo $i ?></td>

<td>
	<?php
	$get_cust="select * from customers where customer_id='$customer_id'";
	$run_cust=mysqli_query($con,$get_cust);
	$row_customer=mysqli_fetch_array($run_cust);
	$customer_email=$row_customer['customer_email'];
	echo $customer_email;

	?>

</td>
<td><?php echo $invoice_no ?></td>
<td><?php echo $product_id ?></td>
<td><?php echo $qty ?></td>
<td><?php echo $size ?></td>
<td><?php echo $status ?></td>
</tr>
<?php } ?>
</tbody>

</table>

</div>

<div class="text-right">

	<a href="index.php?view_orders">
		View All Orders <i class="fa fa-arrow-circle-right"></i>
	</a>
	
</div>
</div><!-- panel-body ends here -->

</div>
</div>




<div class="col-md-4"><!-- col-md-4 Starts -->
<div class="panel"><!-- panel Starts -->
<div class="panel-body"><!-- panel-body Starts -->
<div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->
<img src="admin_images/<?php echo $admin_image ?>" class="rounded img-responsive" width="300" height="300">
<div class="thumb-info-title">
<span class="thumb-info-inner"><?php echo $admin_name ?></span>
<span class="thumb-info-type">(<?php echo $admin_job ?>)</span>

</div>
</div>

<div class="mb-md"><!-- mb-md Starts -->
<div class="widget-content-expanded">
<i class="fa fa-user"></i> <span>Email: </span> <?php echo $admin_email ?> <br>
<i class="fa fa-user"></i> <span>Country: </span> <?php echo $admin_country ?> <br>
<i class="fa fa-user"></i> <span>Contact: </span> <?php echo $admin_contact ?> <br>
</div><!-- widget-content-expanded Ends -->
<hr class="dotted short">
<h5 class="text-muted">About</h5>
<p>
<?php echo $admin_about ?>
</p>
</div>
</div>
</div>
</div>
</div>


<?php 
}
?>
