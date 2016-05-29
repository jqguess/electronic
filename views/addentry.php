<?php // Script addentry.php
/* This is the comment page for Electronic Supply */

// Set the page title and include the header file:
define ('TITLE', 'addentry');
include('header.html');
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
 $dbc = mysqli_connect("127.0.0.1", "root", "", "login" );
  // connect to mysql
 $query = 'SELECT * FROM comments ORDER BY date DESC';
  if ($r = mysqli_query($dbc, $query)) {
      // retrieve and print all the comments
      while ($row = mysqli_fetch_array($r)) {
          print "<div class='well' style='text-align:center;'><p><h3>{$row['title']}</h3>
          {$row['entry']}</div><br/></p><hr /> \n";
      }
  } // end if
    // Handle the form information
  if (isset($_POST['submit'])){
     $problem = false;
     // make submittion safer for sql
     if(!empty($_POST['title']) && !empty($_POST['entry'])) {
      $title = $_POST['title'];
      $title = trim(strip_tags($title));
      $title = mysqli_real_escape_string($dbc, $title);
      
      $entry = $_POST['entry'];
      $entry = trim(strip_tags($entry));
      $entry = mysqli_real_escape_string($dbc, $entry);
     } else {
         print '<p style="color:red; text-align:center; margin-right: 25px;"> Please submit both a title and an entry.</p>';
          $problem = true;
     }    
     if (!$problem) {
         // define the query
         @$query = "INSERT INTO comments (entry_id, title, entry, date) VALUES
                 (0, '$title', '$entry', NOW())"; 
     if (mysqli_query($dbc, $query)) {
          print '<p style= "text-align:center; margin-right:25px;">The comment was added.</p>';
     } else {
         print '<p>The comment was not added, there is a connection error.</p>';
     } // end else
         
  } // No Problem
 
     mysqli_close($dbc); // close connection
     
 } // end if form submission
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
    <?php include('footer.html');?>