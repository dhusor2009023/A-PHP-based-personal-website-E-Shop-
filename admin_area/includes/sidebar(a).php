<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php', '_self')</script>";
} else {
    ?>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background: black;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php?dashboard" class="navbar-brand">Admin Panel</a>
        </div>

        <ul class="nav navbar-right top-nav"> <!-- Nav bar for top-right corner -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i> <?php echo $admin_name; ?>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="index.php?user_profile?id=<?php echo $admin_id; ?>">
                            <i class="fa fa-fw fa-user"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_product">
                            <i class="fa fa-fw fa-envelope"></i> Products
                            <span class="badge"><?php echo $count_pro; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_customer">
                            <i class="fa fa-fw fa-users"></i> Customers
                            <span class="badge"><?php echo $count_cust; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_product_cat">
                            <i class="fa fa-fw fa-gear"></i> Product Categories
                            <span class="badge"><?php echo $count_p_cat; ?></span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-fw fa-power-off"></i> Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="collapse navbar-collapse navbar-ex1-collapse"> <!-- Sidebar collapse start -->
            <ul class="nav navbar-nav side-nav"> <!-- Ensure proper class for side navigation -->
                <li>
                    <a href="index.php?dashboard">
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                    </a>
                </li>

                <!-- Product Section -->
                <li>
                    <a href="#" data-toggle="collapse" data-target="#products">
                        <i class="fa fa-fw fa-table"></i> Product
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="products" class="collapse">
                        <li><a href="index.php?insert_product">Insert Product</a></li>
                        <li><a href="index.php?view_product">View Product</a></li>
                    </ul>
                </li>

                <!-- Product Categories Section -->
                <li>
                    <a href="#" data-toggle="collapse" data-target="#product_cat">
                        <i class="fa fa-fw fa-table"></i> Product Categories
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="product_cat" class="collapse">
                        <li><a href="index.php?insert_product_cat">Insert Product Category</a></li>
                        <li><a href="index.php?view_product_cat">View Product Category</a></li>
                    </ul>
                </li>

                <!-- Categories Section -->
                <!--
                <li>
                    <a href="#" data-toggle="collapse" data-target="#categories">
                        <i class="fa fa-fw fa-table"></i> Categories
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="categories" class="collapse">
                        <li><a href="index.php?insert_categories">Insert Category</a></li>
                        <li><a href="index.php?view_categories">View Category</a></li>
                    </ul>
                </li> 
            -->

                <!-- Additional Sections -->
                <li>
                    <a href="index.php?view_customers">
                        <i class="fa fa-fw fa-users"></i> View Customers
                    </a>
                </li>
                <li>
                    <a href="index.php?view_orders">
                        <i class="fa fa-fw fa-list"></i> View Orders
                    </a>
                </li>

                <li>
                    <a href="index.php?view_payments">
                        <i class="fa fa-gear"></i> View Payments
                    </a>
                </li>

                <!-- Users Section -->
                <li>
                    <a href="#" data-toggle="collapse" data-target="#users">
                        <i class="fa fa-fw fa-table"></i> Users
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="users" class="collapse">
                        <li><a href="index.php?insert_user">Insert Employee</a></li>
                        <li><a href="index.php?view_user">View Employee</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div> <!-- Sidebar collapse end -->
    </nav>

<?php 
}
