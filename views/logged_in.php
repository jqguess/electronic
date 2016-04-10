<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<div class="col-md-6 col-md-offset-3"> 
    <div class="well">
<p>Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
  <a href="index.php?logout">Logout</a> or <a href="welcome.php">Continue to Electronic Supply</a>
</p>
</div>
</div>
</div>

