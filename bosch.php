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
        <img src="images/1.png" alt="">
      <div class="caption">
        <h3>CCTV Bosch</h3>
        <p><strong>$59.99</strong> Great price for a quality all purpose device.</p>
        <p><a href="products.php" class="btn btn-primary" role="button">Back to Products</a> <a href="https://paypal.com" class="btn btn-default" role="button">Checkout with PayPal</a></p>
      </div>
    </div>
   </div>  
    <div class="col-sm-6 col-md-4"> 
        <h3><strong>BOSCH SECURITY VIDEO LTC 0455/21 High Resolution Camera</strong>
        </h3>    
     <!--bosh list group-->
     <ul class="list-group" style="padding: 20px;">
         <li class="list-group-item disabled"><strong>Durable, rugged design with indoor and outdoor.</strong></li>
         <li class="list-group-item disabled"><strong>160x zoom (10x optical 16x digital)</strong></li>
         <li class="list-group-item disabled"><strong>HD 1080p30 and 720p60 ips resolutions for crisp</strong></li>
         <li class="list-group-item disabled"><strong>Surveillance cameras; security cameras; screens LCD</strong></li>
         <li class="list-group-item disabled"><strong>Indoor and outdoor use.</strong>
     </ul>
     <h4 style ="text-align: justify; padding: 20px;" >
     List Price: <s>$79.99</s> (4 in-stock)
     </h4>  <h4 style ="text-align: justify; padding: 20px;" >
     Instant Savings: <srong>$20.00</strong></s>
     </h4>
     <h4 style ="text-align: justify; padding: 20px; color: red" >
         Your Price: <strong>$79.99</strong></s>
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