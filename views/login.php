<?php // Script to login.php
/* Login Page */

// Set the page title and include the header file:

include('header.html');

// Print some introductory text:
print '<h2>Login Form</h2>
    <p>You can log in as a customer, administrator or publisher.</p>';

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Handle the form:
    if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
    
        if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') && ($_POST['security'] == 'customer') ){ // Correct!
    
            // Do session stuff:
            session_start();
            $_SESSION['security'] = $_POST['security'];
                        $_SESSION['email'] = $_POST['email'];
            $_SESSION['loggedin'] = time();
            
            // Redirect the user to the welcome page!
            ob_end_clean(); // Destroy the buffer!
            header ('Location: welcome.php');
            exit();
        
        } else { // Incorrect!
    
            print '<p>The submitted email address and password do not match or your security level is not valid.<br />Go back and try again.</p>';
        
        }
    
    } else { // Forgot a field.
    
        print '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
        
    }

} else { // Display the form.

    print '<form action="login.php" method="post">
    <p>Email Address: <input type="text" name="email" size="20" /></p>
    <p>Password: <input type="password" name="password" size="20" /></p>
    <p>Log in as:
        <input type="radio" name="security" value="customer" /> Customer 
        <input type="radio" name="security" value="publisher" /> Publisher 
        <input type="radio" name="security" value="administrator" />Administrator</p>
        <p><input type="submit" name="submit" value="Log In!" /></p>
    </form>';
}



        

include('footer.html'); // footer file
?>



