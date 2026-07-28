<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<?php
if (isset($_GET['pro_id'])) {
    $pro_id=$_GET['pro_id'];
$get_product="select * from products where product_id='$pro_id' ";
$run_product=mysqli_query($con,$get_product);
$row_product=mysqli_fetch_array($run_product);
$p_cat_id=$row_product['p_cat_id'];
$p_title=$row_product['product_title'];
$p_price=$row_product['product_price'];
$p_desc=$row_product['product_desc'];
$p_img1=$row_product['product_img1'];
$p_img2=$row_product['product_img2'];
$p_img3=$row_product['product_img3'];
$get_p_cat="select * from product_category where p_cat_id= '$p_cat_id'";
$run_p_cat=mysqli_query($con, $get_p_cat);
$row_p_cat=mysqli_fetch_array($run_p_cat);

$p_cat_id=$row_p_cat['p_cat_id'];
$p_cat_title=$row_p_cat['p_cat_title'];

}
?>








<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Bird Shop</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><!--bootstrap CSS library-->
	<link rel="stylesheet" href="styles(css)/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- font awesome cdn library-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





</head>


<body>


<!-- 1st div for the top bar-->

<div id="top"> <!--Here id=top means whenever we will call id then it will work by targetting style.css and whenever we will call "Class" then it will work by targetting bootstrap -->
		
<!--TOP Bar Start-->

   <div class="container"> <!--Bootstrap er by default class "Container"-->

<!--Container Start-->

     <div class="col-md-6 offer"> <!--jokhon kono browser er sreen open hoy tokhon bootstrap by default 12 ta column create kore rakhe. seikhane theke amra 6 ta 6ta half half kore use korbo ajonno 'col-md-6' likha hoise-->

       <!-- Left corner column(6 ta) starts-->

      	     <a href="#" class="btn btn-success btn-sm"><!--akta dami link show koranor jonno hyper text add kora hoise. <a>:Anchor tab. 'btn': This class is commonly used for styling buttons. 'btn-success':It typically sets the button's background color to green or another color that represents success. 'btn-sm': This class is also commonly used in CSS frameworks like Bootstrap to make buttons smaller in size-->

      		           
                    <?php
                   
if(!isset($_SESSION['customer_email'])){
echo "Welcome Guest";
} else{
echo "Welcome: " .$_SESSION['customer_email'];
}
?>

      	    </a>	

      	     <a href="#">
      		            Cart  Total Price: BDT <?php totalPrice();?>,  Items:<?php item(); ?>
      	    </a>

	 </div> <!-- Left corner column(6 ta) End-->


     <div class="col-md-6"> <!-- Now we will work with another 6 columns-->

       <!--Right Corner Column Start-->

            <ul class="menu"> <!-- class name assigned 'menu' and ul means unordered list-->
            	    <li>
            	      <a href="customer_registration.php">
            	      	Register
            	      </a>	
            	    </li>

            	    <li>
            	     <?php
if(!isset($_SESSION['customer_email'])){
echo "<a href='checkout.php'>My Account</a>";
} else{
echo "<a href='customer/my_account.php?my_order'>My Account</a>";
}
?>
            	    </li>

            	    <li>
            	      <a href="cart.php">
            	      	GoTo Cart
            	      </a>	
            	    </li>

            	    <li>
            	       <?php
if(!isset($_SESSION['customer_email'])){
echo "<a href='checkout.php'>Login</a>";
} else{
echo "<a href='logout.php'>Logout</a>";
}
?>
            	    </li>

            </ul>	    



     </div> <!--Right corner column End-->



   </div> <!--Container End-->


</div><!--TOP Bar End-->






<!--2nd div for the header-->

<div class="navbar navbar default" id="navbar"> <!--navbar navbar-default start-->
<!--These classes are commonly used in CSS frameworks like Bootstrap to style navigation bars. They provide default styling for a navigation bar component. 'navbar default' holo bootstrap er akta by default class-->    
<!-- r aikhane id navbar dewa hoise jate ager motw amra id call korle seta css a jay and navbar k call kore--> 


  <div class="container"><!--Container start-->

         <div class="navbar-header"> <!--navbar-header start-->
             <a class="navbar-brand home" href="index.php"><!--logo te tab korle seta direct home page a niye jabe ajonno index.php dewa hoise-->
               
               <img src="images/logo.jpg" alt="TailTweet" class="hidden-xs" style="width:60px;height:50px"> <!--alt use kora hoise jodi kokhono logo nh show kore then TailTweet likha show korbe. then bootstrap a akta class create kora hoise jeikhane bola hoise jodi screen xtra small hoye jay tokhon logo ta jate hidden hoye jay karon amra pc and mobile both er jonno alada alada logo use korbo.-->

               <img src="images/logo-small.jpg" alt="TailTweet" class="visible-xs" style="width:60px;height:50px"> <!-- xs hole jate visible hoye jay ai logo--> 

             </a>



             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" >
             <!--data-toggle="collapse": This is a custom data attribute used for toggling the visibility of an element. 'data-target=navigation': This is another custom data attribute used to specify the target element that will be collapsed or expanded when the button is clicked-->

               <span class="sr-only">
                Toggle Navigation <!--It's commonly used for styling purposes or for targeting specific content with CSS or JavaScript. sr-only is used for specification-->
               </span> 

               <i class="fa fa-align-justify"  aria-hidden="true">
                <!--this is used for three dot icons in the right corner of navigation bar. and we can use any of icons from font awesome websites-->
               </i>   

             </button>


             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only">    
                </span>
                 
                 <i class="fa fa-search" aria-hidden="true">    
                 </i>


             </button>



         </div> <!--navbar header end-->






         <div class="navbar-collapse collapse" id="navigation"> <!-- Naavabr-collapse collapse start-->
         <!-- ai navbar ta create kora hoise jokhon amra ai navbar er upor pointer anbo tokhon jate er vitore amraa ja ja likhbo seigula operate hoy--> 
            <div class="padding-nav"><!--padding nav start-->
                <ul class="nav navbar-nav navbar-left">
                <!--nav: This class is commonly used in navigation menus to style the list items and make them horizontal.navbar-nav: This class is often used in conjunction with Bootstrap's navbar component to style the navigation items within a navbar.navbar-left: This class suggests that the navigation items within the navbar are aligned to the left side of the navbar-->

                <li> <!--jokhon ata active hobe tokhon akta round er motw jate hoye jay ajonno-->
                    <a href="index.php">Home</a>
                </li>

                <li class="active">
                    <a href="shop.php">Shop</a>
                </li>

                <li>
                    <?php
if(!isset($_SESSION['customer_email'])){
echo "<a href='checkout.php'>My Account</a>";
} else{
echo "<a href='customer/my_account.php?my_order'>My Account</a>";
}
?>
                </li>

                <li>
                    <a href="cart.php">Shopping cart</a>
                </li>


                <li>
                    <a href="Contactus.php">Contact Us</a>
                </li>


                 </ul>



            </div> <!-- Padding nav end-->


             <!--Akhon first a cart er button ta niye kaj korbo-->
            <a href="cart.php" class="btn btn-primary navbar-btn right"><!--btn btn-primary o bootstrap er akta by defalut class-->
                <i class="fa fa-shopping-cart"></i>
                <span><?php item(); ?> items in cart</span>


            </a>


            <!--akhon kaj korbo search button ta niye-->
            <div class="navbar-collapse collapse right"><!--navbar collapse-right Start-->
                <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                    
                </button>

            </div><!--navbar collapse-right End-->




            <div class="collapse clearfix" id="search"><!--jokhon kew search button a click a korbe tokhon take seikhani niye jabe jeta amra aikhane bole dibo."clearfix": It's often used in CSS to ensure that elements within the <div> are properly positioned and aligned, especially when floating elements are involved-->

                <form class="navbar-form" method="get" action="result.php"><!--<form>: This is an HTML element used to create a form on a webpage. Forms are used to collect and submit user input.  class="navbar-form": This is the class attribute of the <form> element. The class attribute is used to specify one or more class names for an HTML element. "method=get"The method attribute specifies the HTTP method to be used when submitting the form data to the server.  action="result.php": This is another attribute of the <form> element. The action attribute specifies the URL where the form data should be submitted. In this case, the form data will be submitted to the "result.php" file on the server for processing.-->
                    <div class="input-group">
                        <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                        

                        <span class="input-group-btn"><!--search box r icon pashe asharjonno--> 
  
                            <button type="submit" value="Search" name="Search" class="btn btn-primary"> 
                            <!--input box a kicu likhle jate tar pashe search er button tar upor press korle search hoye jay tai akta button create kora hoyeche-->
                            <i class="fa fa-search"></i>

                            </button>

                        </span>    
                        
                    </div>
                    
                </form> 
                
            </div>




         </div><!--Navbar-collapse collapse End-->

     
  </div><!--Container End-->


</div><!--navbar navbar-default end-->






<div id="content">

    <div class="container"><!-- Container start-->

        <div class="col-md-12"><!-- col md 12 start-->

            <ul class="breadcrumb"><!--bootstrap er bydefault class-->
                
                <li>
                    <a href="home.php">Home</a>
                </li>

                <li>
                    Shop
                </li>

                <li>
                    <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                </li>


                <li><?php echo $p_title ?>
                </li>



            </ul>
            

        </div><!-- col md 12 end-->


        <div class="col-md-3"><!-- col md 3 start-->

            <?php
                include("includes/sidebar.php");
            ?>    
            
        </div><!-- col md 3 end-->





        <div class="col-md-9"><!-- col md 9 start-->

            <div class="row" id="productmain">

                <div class="col-md-6"><!-- col md 6 slider start-->

                    <div id="mainimage">

                        <div id="mycarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#mycarousel"
                                data-slide-to="0" class="active"></li>

                                <li data-target="#mycarousel"
                                data-slide-to="1"></li>

                                <li data-target="#mycarousel"
                                data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner"><!--carousel-innerstart-->





                                
                                <div class="item active">
                                    
                                    <center>
                                        <img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
                                    </center>
                                </div>



                                <div class="item">

                                    <center>

                                   <img src="admin_area/product_images/<?php echo $p_img2 ?>" class="img-responsive">
                                    </center>
                                    
                                </div>



                                <div class="item">

                                    <center>

                                   <img src="admin_area/product_images/<?php echo $p_img3 ?>" class="img-responsive">
                                    </center>
                                    
                                </div>






                            </div><!--carousel-inner end-->

                            <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                
                                <span class="glyphicon glyphicon-chevron-left">
                                </span>

                                <span class="sr-only">Previous</span>
                            </a>



                             <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                
                                <span class="glyphicon glyphicon-chevron-right">
                                </span>

                                <span class="sr-only">Next</span>
                            </a>



                            
                        </div>
                        
                    </div>
                    
                </div><!-- col md 6 slider end-->




                <div class="col-md-6"><!-- col md 6 slider start-->

                    <div class="box"><!--box start-->
                        
                        <h1 class="text-center"><?php echo $p_title ?></h1>


<?php
addCart();
?>





                        <form action="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal"><!--Form start-->


                            
                            <div class="form-group"><!--Form-group start-->

                                <label class="col-md-5 control-label">Product Quantity</label>

                                <div class="col-md-7"><!--Col-md-7 start-->
                                    
                                    <select name="product_qty" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        
                                    </select>

                                </div><!--Col-md-7 end-->
                                
                            </div><!--Form-group end-->


                            <div class="form-group">

                                <label class="col-md-5 control-label">
                                    Bird type
                                </label>


                                <div class="col-md-7">
                                    
                                    <select name="product_size" class="form-control">

                                        <option>Male</option>
                                        <option>Female</option>
                                        
                                    </select>

                                </div>
                                
                            </div>


                            <p class="price">BDT <?php echo $p_price ?></p>

                            <p class="text-center buttons">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-shopping-cart">Add to Cart</i>
                                </button>
                            </p>


                        </form><!--Form end-->


                    </div><!--box end-->





                    <div class="col-xs-4">
                        
                        <a href="#" id="thumb">
                            
                            <img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
                        </a>


                    </div>



                     <div class="col-xs-4">
                        
                        <a href="#" id="thumb">
                            
                            <img src="admin_area/product_images/<?php echo $p_img2 ?>" class="img-responsive">
                        </a>


                    </div>

<!--In PHP, echo is a language construct used to output text or variables to the browser or console. It's commonly used to display HTML or text in PHP scripts, allowing developers to create dynamic content-->

                     <div class="col-xs-4">
                        
                        <a href="#" id="thumb">
                            
                            <img src="admin_area/product_images/<?php echo $p_img3 ?>" class="img-responsive">
                        </a>


                    </div>





                    
                </div><!-- col md 6 slider end-->
                

            </div>





            <div class="box" id="details">

                <h4>Product Details</h4>

                <p>
                   <?php echo $p_desc ?>
                </p>
                
            </div>





            



            <div id="row same-height-row"><!--row same-height-row start-->

                <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->

                    <div class="box same-height headline"><!--box same-height headline start-->
                        
                        <h3 class="text-center">You also like these birds!</h3>

                    </div><!--box same-height headline end-->
                
            </div><!--col-md-3 col-sm-6 end-->

<?php
$get_product="select * from products order by 1 LIMIT 0,3";
$run_product=mysqli_query($con,$get_product);
while ($row=mysqli_fetch_array($run_product)) {
$pro_id=$row['product_id'];
$product_title=$row['product_title'];
$product_price=$row['product_price'];
$product_img1=$row['product_img1'];
echo "
<div class='center-responsive col-md-3 col-sm-6'>
<div class='product same-height'>
<a href='details.php?pro_id=$pro_id'>
<img src='admin_area/product_images/$product_img1' class='img-responsive'>
</a>
<div class='text'>
<h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
<p class='price'>BDT $product_price</p>
</div>
</div>
</div>




";
}

?>






           </div><!--row same-height-row end-->








            

        </div><!-- col md 9 end-->




  

    

    </div><!-- Container end-->
    
</div><!-- Content end-->









<!--Footer start-->
<!--amra akta footer create korbo then oitai bar bar use korte thakbo--> 

<?php 

include("includes/footer.php");

?>




<!--Footer end-->






<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!--Bootstrapn er Jss file ta body er last a add korte hoy-->
</body>




</html>




