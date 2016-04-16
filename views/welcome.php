<?php 
/**
 * Electronic Supply
 * author @ Jonathan Guess
 */ 
define ('TITLE', 'welcome');
include('header.html');
// Display HTML
?>
<div class="container">  
    <div class="row">
        <div class="col-sm-6 col-md-4"style="padding-top: 30px;">
            <div class="thumbnail">


                <img style="padding-top:25px;" width="261" height="193" src="images/house2.jpg"  alt="">

            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <h2 style="text-align: center; padding-top: 15px; padding-bottom: 10px;" ><strong>Home Solutions</strong></h2>
            <div class="well" style="float:right;">    
                <p style="font-size: 18px;">
                    At Electronic Supply we know what matters and we help you protect it. We offer a wide variety of electronic solutions for businesses and homes. If your in need of security  
                    we have you covered with a huge selection of alarms and cameras. We also have a multitude of electronic components and wiring of any type at wholesale
                    prices. Check out our <a href="views/products.php">Products</a>
                </p>
            </div>
        </div>
    </div>


    <div class="row"> 
        <div class="col-sm-6 col-md-4"style="padding-top: 30px;">

            <div class="thumbnail">
                <img style="padding-top: 20px;padding-right: 10px;" width="310" height="150" src="images/phone.png"  alt="">
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <h2 style="text-align: center; padding-top: 15px; padding-bottom: 10px;" ><strong>Flexibility for your Lifestyle</strong></h2>
            <div class="well">    
                <p style="font-size: 18px;">
                    Our solutions are tailored to fit your needs from hardware only to complete home security installed and optimized to fit your lifestyle. Leave the complicated to us. 
                    Flexible and simple. This is Electronic Supply. <a href="views/products.php">Products</a>
                </p>
            </div>
        </div>
    </div>
</div>



<?php include('footer.html'); ?>
