
<?php
// Script addentry.php
/* This is the comment page for Electronic Supply */
// Set the page title and include the header file:
define('TITLE', 'addentry');
include('header.html');
require_once('../config/db.php');
// Display HTML
?>

<div class="container-fluid">
    <div class="row" style="padding-bottom:15px;">
        <div class="col-md-7 col-md-offset-4">
            <h2 style="padding-bottom:10px;">

            </h2>
        </div>
    </div>

 <?php
    try {
        
        // PDO connect with recommended attributes
        $dbh = new PDO('mysql:host=127.0.0.1;dbname=login', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        foreach ($dbh->query('SELECT * from comments ORDER BY date DESC') as $row) {
            print "<div class='well' style='text-align:center;'><p><h3>{$row['title']}</h3>
          {$row['entry']}</div><br/></p><hr /> \n";
        } // end foreach to display the comments 
       
        // Handle the form information after checking for title and entry
        if (isset($_POST['submit'])) {
            if (EMPTY ($_POST['title']) OR (EMPTY ($_POST['entry']))){
                     echo '<div class="container"><div class="col-sm-5 col-sm-offset-3"> 
                         <div class="alert alert-danger" style="text-align:center"; role="alert"><h5>
                         <strong>Please enter a title AND comment.</strong></div></div></div></h5>'; 
        } else {
            
            //Prepare SQL statement and bind parameters
            $sql = $dbh->prepare("INSERT INTO `COMMENTS` (`entry`, `title`) VALUES (:entry, :title)");
            $sql->bindParam(':entry', $entry);
            $sql->bindParam(':title', $title);

            //Insert a Row after some cleanup
            $entry = trim(strip_tags($_POST['entry']));
            $title = trim(strip_tags($_POST['title']));
            $sql->execute();
  
            // Echo Successful attempt
            echo '<div class="container"><div class="col-sm-5 col-sm-offset-3"> 
                        <div class="alert alert-success" style="text-align:center"; role="alert"><h5>
                         <strong>Your comment has been added.</strong></div></div></div></h5>';
           } // end else
        } // end if 
    } // end TRY
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } // end catch
    ?>
    
    <!--- Print the form -->
    <div class="col-md-7 col-md-offset-3">
        <form action="views/addentry.php" method="post">
            <div class="form-group" style="">
                <div class="row">
                    <label for="title">Entry Title: </label>
                    <input type="text" name="title" class="form-control" />
                </div>
                <div class="row">
                    <label for="entry">Entry: </label>
                    <textarea name="entry" class="form-control" cols="40" rows="5"></textarea>
                </div>
                <div class="row" style="padding-top: 10px;">
                    <input type="submit" name="submit" value="Post This Comment!" />
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('footer.html'); ?>