<?php
session_start();
if(isset($_SESSION['customer_email'])){
echo "<script>window.open('already_register.php','_self')</script>";
}
else{
include("includes/db.php");
include("functions/functions.php");
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
      		            Cart  Total Price: BDT <?php totalPrice();?>, Items:<?php item(); ?>
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

                <li class="active"> <!--jokhon ata active hobe tokhon akta round er motw jate hoye jay ajonno-->
                    <a href="index.php">Home</a>
                </li>

                <li>
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
                <span>4 items in cart</span>


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






<div id="content"><!-- Content start-->

    <div class="container"><!-- Container start-->

        <div class="col-md-12"><!-- col md 12 start-->

            <ul class="breadcrumb"><!--bootstrap er bydefault class-->
                
                <li>
                    <a href="home.php">Home</a>
                </li>

                <li>
                    Registration
                </li>

            </ul>
            

        </div><!-- col md 12 end-->


        <div class="col-md-3"><!-- col md 3 start-->

            <?php
                include("includes/sidebar.php");
            ?>    
            
        </div><!-- col md 3end-->









        <div class="col-md-9"><!--col md-9 start-->
            
            <div class="box"><!--box start-->
                <div class="box-header"><!--box header start-->

                    <center>
                        <h2>Customer Registration</h2>
                        
                    </center>
                    
                </div><!--box header start-->


                <form action="customer_registration.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        
                        <label>Customer Name</label>
                        <input type="text" name="c_name" required="" class="form-control">


                    </div>


                    <div class="form-group">
                        
                        <label>Customer Email</label>
                        <input type="text" name="c_email" required="" class="form-control">

                    </div>


                    <div class="form-group">
                        
                        <label>Customer Password</label>
                        <input type="password" name="c_password" required="" class="form-control">

                    </div>



                    <div class="form-group">
                        
                        <label>Country</label>
                        <input type="text" name="c_country" required="" class="form-control">

                    </div>



                    <div class="form-group">
                        
                        <label>City</label>
                        <input type="text" name="c_city" required="" class="form-control">

                    </div>




                    <div class="form-group">
                        
                        <label>Contaact Number</label>
                        <input type="text" name="c_contact" required="" class="form-control">

                    </div>



                    <div class="form-group">
                        
                        <label>Address</label>
                        <input type="text" name="c_address" required="" class="form-control">

                    </div>



                    <div class="form-group">
                        
                        <label>Image</label>
                        <input type="file" name="c_image" required="" class="form-control">

                    </div>





                    <div class="text-center">
                        
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user-md"></i>
                           Register

                        </button>
                        
                    </div>
                    

                </form>


            </div><!--box end-->


        </div><!--col md-9 end-->









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























<?php

//isset() is a PHP function used to check whether a variable is set or defined and has a value other than null. It helps you determine if a variable exists before you attempt to use it, avoiding errors and undefined variable warnings.


if (isset($_POST['submit'])) {
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_password=$_POST['c_password'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];
    $c_image=$_FILES['c_image']['name'];
    $c_tmp_image=$_FILES['c_image']['tmp_name'];
    $c_ip=getUserIP();

    move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");
    $insert_customer="insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    $run_customer=mysqli_query($con, $insert_customer);
$sel_cart="select * from cart where ip_add='$c_ip'";
$run_cart=mysqli_query($con,$sel_cart);
$check_cart=mysqli_num_rows($run_cart);
if($check_cart>0){
$_SESSION['customer_email']=$c_email;
echo "<script>alert('You have been registered successfully!')</script>"; //to display text, variables, or other data as part of your HTML output echo is used.

echo "<script>window.open('checkout.php','_self')</script>";

}

else{
$_SESSION['customer_email']=$c_email;
echo "<script>alert('You have been registered successfully')</script>
";
echo "<script>window.open('index.php', '_self')</script>";

}
}

?>





<?php } ?>
















