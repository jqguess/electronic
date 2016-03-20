<?php // Script bosch.php
/* This is the Product page for Electronic Supply */

// Set the page title and include the header file:
define ('TITLE', 'Bosch');
include('./header.html');

// Display HTML
?>
<div class="container-fluid">
 <div class="row">
   <div class="col-sm-6 col-md-4" width="150" height="150">
    <div class="thumbnail">
        <img src="images/2.png" alt="">
      <div class="caption">
        <h3>Pelco Dome Security Camera</h3>
        <p><strong>$74.99</strong>High resolution and zoom compact size.</p>
        <p><a href="products.php" class="btn btn-primary" role="button">Back to Products</a> <a href="https://paypal.com" class="btn btn-default" role="button">Checkout with PayPal</a></p>
      </div>
    </div>
   </div>  
    <div class="col-sm-6 col-md-4"> 
        <h3><strong></strong>HD 1000TVL Dome Security Camera Dark Gray - Outdoor - Night Vision - 2.8-12mm Lens
        </h3>    
     <!--Pelco list group-->
     <ul class="list-group" style="padding: 20px;">
         <li class="list-group-item disabled"><strong>2.8-12mm lens allowing for a larger viewing area.</strong></li>
         <li class="list-group-item disabled"><strong>Back light compensation (BLC) to ensure optimal picture quality in any given lighting condition.</strong></li>
         <li class="list-group-item disabled"><strong>98ft IR range with superior video quality in complete darkness.</strong></li>
         <li class="list-group-item disabled"><strong>Outdoor metal housing made to withstand tough weather conditions and vandalism</strong></li>
         <li class="list-group-item disabled"><strong>Indoor and outdoor use.</strong>
     </ul>
     <h4 style ="text-align: justify; padding: 20px;" >
     List Price: <s>$89.99</s> (2 in-stock)
     </h4>  <h4 style ="text-align: justify; padding: 20px;" >
     Instant Savings: <strong>$15.00</strong></s>
     </h4>
     <h4 style ="text-align: justify; padding: 20px; color: red" >
         Your Price: <strong>$74.99</strong></s>
     </h4>
    </div>
 </div>   
   <!--- <div class="row"> future comment section
        <div class="col-sm-6 col-md-4" style="text-align: justify">
            <h3>
                Reviews
            </h3>
                  <div class="blockquotes">    
            <p style="font-size: 18px;">
             We offer a wide variety of electronic solutions for businesses and homes. If your in need of security  
             we have you covered with a huge selection of alarms and cameras. We also have a multitude of electronic components and wiring of any type at wholesale
             prices. Electronic supply also offers home convenience products such as lighting and thermostats. Our partners are Nutone, Simply Automated, 
             Channel Master, Net Media, HAI to name a few. Give us a try on your next installation!
            </p>
            </div>
            </div> --> 
        </div> **/
    </div> <!--div container-fluid--->
  <?php include('./footer.html');?>
