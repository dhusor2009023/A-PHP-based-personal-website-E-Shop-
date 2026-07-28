<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php', '_self')</script>";
} else {

?>
<?php
 if (isset($_GET['delete_product'])) {
        $delete_id = $_GET['delete_product']; // Get the product ID to delete
        $delete_pro = "DELETE FROM products WHERE product_id='$delete_id'"; // SQL query to delete the product
        $run_delete=mysqli_query($con,$delete_pro); // Execute the query

        if ($run_delete) { // If query executes successfully
            echo "<script>alert('One Product has been deleted')</script>";
            echo "<script>window.open('index.php?view_product', '_self')</script>"; // Redirect to view products
        } else {
            // Handle query failure
            echo "<script>alert('Error deleting product')</script>";
        }
    }

?>
<?php } ?>