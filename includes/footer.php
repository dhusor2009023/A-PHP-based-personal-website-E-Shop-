<div id="footer"><!--Foooter section start-->
	

	<div class="container">


		<div class="row">


			<div class="col-md-3 col-sm-6"><!-- that means jokhon medium screen hobe tokhon ata 3 ta part a divie kore dibbe r jokhon ata small screeb hobe tokhon ata 6 ta part a split hobe r every part a amra 2 ta kore dekhte parbo-->

			<!--col-md-3 col-sm-6 start-->	

				<h4> Pages</h4>

				<ul>
					
					<li>
						<a href="cart.php">Shopping Cart</a>
					</li>

					<li>
						<a href="contact.php">Contact Us</a>
					</li>

					<li>
						<a href="shop.php">Shop</a>
					</li>

					<li>
						<a href="checkout.php">My Account</a>
					</li>
					
					
				</ul>


				<hr>

				<h4>User Section</h4>

				<ul>

				

					<li>
						<a href="customer_registration.php">Register</a>
					</li>
					
				</ul>

				<hr class="hidden-md hidden-lg hidden-sm"><!-- hidden er sob size diye dewa hoise. aikhane medium size large size and small size k indicate kora hoise-->




				
			</div><!--col-md-3 col-sm-6 end-->





			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->


				<h4>Top Product Categories</h4>

				<ul>
					
					
					<?php
$get_p_cats="select * from product_category";
$run_p_cats=mysqli_query($con,$get_p_cats);
while ($row_p_cat=mysqli_fetch_array($run_p_cats)) {
$p_cat_id=$row_p_cat['p_cat_id'];
$p_cat_title=$row_p_cat['p_cat_title'];
echo "<li><a href='shop.php?p_cat=$p_cat_id' > $p_cat_title </a></li>";
}
?>


				</ul>
				

				<hr class="hidden-md hidden-lg">





			</div><!--col-md-3 col-sm-6 end-->






			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->


				<h4>Where to find us!</h4>

				<p>
					<strong>Tailtweet.com</strong><!--Strong defines the important text in the paragraph-->

					<br>Sayekh Dhusor
					<br>Khulna
					<br>sayekhdhusor@gmail.com
					<br>+880 1734081767

				</p>

				<a href="contactus.php">Goto contact us page</a>
				<hr class="hidden-md hidden-lg">



				
			</div><!--col-md-3 col-sm-6 end-->






			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->


				<h4>Get the news</h4>

				<p class="text-muted">

					Subscribe here for getting news!
					
				</p>

				<form action="" method="post">

					<div class="input-group">

						<input type="text" name="email" class="form-control">

						<span class="input-group-btn">

							<input type="submit" name="" class="btn btn-default" value=subscribe>
							
						</span>
						
					</div>
					
				</form>


				<hr>
				<h4>Stay In Touch</h4>
				<p class="social">
					<a href="#">

						<i class="fa fa-facebook"></i>
						
					</a>

					<a href="#">

						<i class="fa fa-twitter"></i>
						
					</a>

					<a href="#">

						<i class="fa fa-instagram"></i>
						
					</a>

					<a href="#">

						<i class="fa fa-google-plus"></i>
						
					</a>

					<a href="#">

						<i class="fa fa-envelope"></i>
						
					</a>

				</p>






				
			</div><!--col-md-3 col-sm-6 end-->








			
		</div>

		
	</div>


</div><!--Foooter section end-->




<div id="copyright"><!--Copyright section start-->

	<div class="container">

		<div class="col-md-6">

			<p class="pull-left"><!-- pull left mane left a chole jabe-->

				&copy; 2024 Sayekh Dhusor
				
			</p>
			
		</div>

		<div class="col-md-6">

			<p class="pull-right">

				Template By: <a href="www.Tailtweet.com">Tailtweet.com</a>
				
			</p>
			
		</div>
		
	</div>


	
</div><!--copyright section end-->












