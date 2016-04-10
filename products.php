<?php // Script products.php
/* This is the Product page for Electronic Supply */

// Set the page title and include the header file:
define ('TITLE', 'products');
include('header.html');

// Display HTML
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
<div class="container">
<div class="row">
    <div class="col-sm-6 col-md-4" width="125" height="150">
    <div class="thumbnail">
        <img src="images/1.png" alt="">
      <div class="caption">
        <h3>High-Res Bosch LCD</h3>
        <p><strong>$59.99</strong> Great price for a quality all purpose device.</p>
        <p><a href="bosch.php" class="btn btn-primary"role="button">Details</a>      <a class="btn btn-default" <a href="https://paypal.com"><i class="fa fa-paypal fa-2x"></i></a></p>
      </div>
    </div>
  </div>



  <div class="col-sm-6 col-md-4" width="125" height="150">
    <div class="thumbnail">
      <img src="images/2.png" alt="">
      <div class="caption">
        <h3>Pelco Dome CCTV</h3>
        <p><strong>$74.99</strong> High resolution and zoom, compact size. </p>
        <p><a href="pelco.php" class="btn btn-primary" role="button">Details</a> <a href="https://paypal.com" class="btn btn-default" role="button"><i class="fa fa-paypal fa-2x"></i></a></p>
      </div>
    </div>
  </div>



  <div class="col-sm-6 col-md-4" width="125" height="150">
    <div class="thumbnail">
        <img src="images/4.png" alt="">
      <div class="caption">
          <h3>CCTV Bosh Ultra </h3>
          <p><strong>$64.99</strong> Ultra high zoom and high resolution.</p>
          <p><a href="ultra.php" class="btn btn-primary" role="button">Details</a> <a href="https://payapl.com" class="btn btn-default" role="button"><i class="fa fa-paypal fa-2x"></i></a></p>
      </div>
    </div>
  </div>
</div>

<?php include('footer.html');?>