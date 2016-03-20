<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<div class="container-fluid">  

<div class="col-md-7 col-md-offset-4">
<!-- login form box -->
<form method="post" action="index.php" name="loginform">
    <div class="form-group">
    <div class="row">
    <label for="login_input_username">Username: </label>
    <input id="login_input_username" class="form-control" type="text" name="user_name" required />
    </div>
    <div class="row">    
    <label for="login_input_password">Password:</label>
    <input id="login_input_password" class="form-control" type="password" name="user_password" autocomplete="off" required />
    </div>
    <div class ="row" style="padding-top:10px;">    
    <input type="submit"  name="login" value="Log in" />
    </div>
    </div>    
</form>
<a href="register.php">Register new account</a>
</div>
    
</div>
<?php include('./footer.html');?>
