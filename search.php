<!DOCTYPE html>
<head>
</head>
<body>
<?php include 'database.php' ?>

<?php 
  // For refreshing the page with updated submission
  if(isset($_POST['submit'])){
    //SQL Query
    $query = "SELECT * FROM MyPortfolio";
    echo "<meta http-equiv='refresh' content='0'>";
  }
?>
<?php
    while ($row = $query->fetch_assoc()) {
      echo "
        <div>
            <ul>
                <li class=\"project_title\">{$row['name']}</li>
                <li class=\"project_desc\">{$row['desc']}</li>
                <li class=\"slideshow\"></li>
                <li class=\"project_link\"><a href=\"{$row['link']}\">Project Link</a></li>
            </ul>
        </div>
      ";
    }
?>

<?php
    include 'contacts.php'
?>
</body>
<html>
