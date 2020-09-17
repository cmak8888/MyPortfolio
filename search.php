<!DOCTYPE html>
<head>
</head>
<body>
<?php include 'database.php' ?>

<?php
  if(isset($_POST['submit'])){
    //SQL Query
    echo "<meta http-equiv='refresh' content='0'>";
  }
?>
<?php
    for ($rows = 0; $rows <= $table; $row++) {
      echo '
        <div>
            <ul>
                <li class="project_title">$table[$rows]</li>
                <li class="project_desc">$table[$rows[2]]</li>
                <li class="slideshow"></li>
                <li class="project_link><a href="">Project Link</a></li>
            </ul>
        </div>
      ';
    }
?>

<?php
    include 'contacts.php'
?>
</body>
<html>
