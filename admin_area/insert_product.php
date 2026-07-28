<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else{

?>


<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
	<script src="https://cdn.tiny.cloud/1/lf5fvh91ded347cl3cui9mqba5bty6dinjgq7vax02esj93w/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


	
</head>


<body>




	<div class="row"><!-- breadcrumb row Start-->
<div class="col-lg-12">
<div class="breadcrumb">
<li class="active">
<i class="fa fa-dashboard"></i>
Dashboard / Insert Product
</li>
</div>
</div>
</div><!--breadcrumb row End-->
<div class="row">
	<div class="col-lg-3">
	
	
</div>

<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading"><!--panel-heading start-->
<h3 class="panel-title">
<i class="fa a-money fa-fw"></i> Insert Product
</h3>
</div><!--panel-heading end-->
<div class="panel-body">

	<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

		<div class="form-group">

			<label class="col-md-3 control-label">
				Product Title
				
			</label>
			<input type="text" name="product_title" class="form-control" required="">

		</div>



		<div class="form-group">

			<label class="col-md-3 control-label">
				product category
				
			</label>
			<select name="product_cat" class="form-control">
				<option>Select a Category</option>












				<?php
$get_p_cats="select * from product_category";
$run_p_cats=mysqli_query($con, $get_p_cats);
while ($row=mysqli_fetch_array($run_p_cats)) {
$id=$row['p_cat_id'];
$cat_title=$row['p_cat_title'];
echo "<option value='$id'> $cat_title </option>";
}

?>






			</select>
		</div>






		<div class="form-group">

			<label class="col-md-3 control-label">
				Birds Region
				
			</label>
			<select name="cat" class="form-control">
				<option>Select the Region</option>








				<?php
$get_cats="select * from categories";
$run_cats=mysqli_query($con, $get_cats);
while ($row=mysqli_fetch_array($run_cats)) {
$id=$row['cat_id'];
$cat_title=$row['cat_title'];
echo "<option value='$id'> $cat_title </option>";
}

?>





</select>


</div>







	<div class="form-group">

			<label class="col-md-3 control-label">
				Product Image 1
				
			</label>
			<input type="file" name="product_img1" class="form-control" required="">

		</div>


		<div class="form-group">

			<label class="col-md-3 control-label">
				Product Image 2
				
			</label>
			<input type="file" name="product_img2" class="form-control" required="">

		</div>


		<div class="form-group">

			<label class="col-md-3 control-label">
				Product Image 3
				
			</label>
			<input type="file" name="product_img3" class="form-control" required="">

		</div>



		<div class="form-group">

			<label class="col-md-3 control-label">
				Product Price
				
			</label>
			<input type="text" name="product_price" class="form-control" required="">

		</div>



		<div class="form-group">

			<label class="col-md-3 control-label">
				Product Keyword
				
			</label>
			<input type="text" name="product_keyword" class="form-control" required="">

		</div>


		<div class="form-group">

			<label class="col-md-3 control-label">
				Product Description
				
			</label>

			<textarea name="product_desc" class="form-control"
			rows="6" cols="19"></textarea>
			

		</div>

		<div class="form-group">
			<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
			
		</div>



		
	</form>
	
</div>
</div>
</div>

<div class="col-lg-3">
	

</div>

</div>





<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>







</body>
</html>



<?php
if (isset($_POST['submit'])) {
$product_title=$_POST['product_title'];
$product_cat=$_POST['product_cat'];
$cat=$_POST['cat'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];
$product_keyword=$_POST['product_keyword'];
$product_img1=$_FILES['product_img1'] ['name'];
$product_img2=$_FILES['product_img2'] ['name'];
$product_img3=$_FILES['product_img3'] ['name'];
$temp_name1=$_FILES['product_img1'] ['tmp_name'];
$temp_name2=$_FILES['product_img2'] ['tmp_name'];
$temp_name3=$_FILES['product_img3'] ['tmp_name'];
move_uploaded_file($temp_name1, "product_images/check/$product_img1"); 
move_uploaded_file($temp_name2, "product_images/check/$product_img2");
move_uploaded_file($temp_name3, "product_images/check/$product_img3");
$insert_product="INSERT INTO products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword) VALUES('$product_cat', '$cat', NOW(), '$product_title', '$product_img1', '$product_img2', '$product_img3', '$product_price', '$product_desc', '$product_keyword' )";


$run_product=mysqli_query($con,$insert_product);

if($run_product){
echo "<script>alert('Product Inserted Successfully')</script>";
echo "<script>window.open('index.php?view_product')</script>";

}


}

?>
<?php } ?>


